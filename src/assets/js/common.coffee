# ============================================
# 定数
# ============================================
SMOOTH_SCROLL_SPEED = 600
INIT_DELAY = 100
SP_BREAKPOINT = 1080

# ============================================
# モジュール変数
# ============================================
resizeTimer = null

# ============================================
# ユーティリティ関数
# ============================================

# スクロール可能な要素を取得
getScrollTarget = ->
	firefox = navigator.userAgent.match(/Firefox\/([0-9]+)\./)
	
	if 'scrollingElement' of document
		return document.scrollingElement
	else if !!window.MSInputMethodContext and !!document.documentMode
		return document.documentElement
	else if firefox and parseInt(firefox[1]) <= 47
		return document.documentElement
	else
		return document.body

# ============================================
# スムーススクロール機能
# ============================================

# スムーススクロールを実行
smoothScroll = (href) ->
	return true if href == '#'
	
	targetSelector = if href == '' then 'html' else href
	target = $(targetSelector)
	
	return false unless target.length
	
	position = target.offset().top
	scrollTarget = $(getScrollTarget())
	
	scrollTarget.stop().animate(
		{ scrollTop: position },
		SMOOTH_SCROLL_SPEED,
		'easeOutExpo'
	)
	
	return false

# スムーススクロールのイベントを設定
setSmoothScroll = ->
	$(document).on 'click', 'a[href^="#"], area', (e) ->
		e.preventDefault()
		href = $(this).attr('href')
		smoothScroll(href)

# ============================================
# リサイズ機能（現在は未使用）
# ============================================

# リサイズイベントを設定
setResize = ->
	$(window).resize ->
		if resizeTimer != null
			clearTimeout(resizeTimer)
		
		resizeTimer = setTimeout ->
			# リサイズ時の処理をここに記述
			resizeTimer = null
		, 100

# ============================================
# navList scroll
# ============================================
setNavListScroll = ->
	navList = document.querySelector '.navList'
	lastScrollTop = 0

	# Initialize state
	navList.classList.remove 'sticky', 'show'

	$(window).scroll ->
		currentScrollY = window.scrollY
		isScrollingDown = currentScrollY > lastScrollTop

		if window.innerWidth <= SP_BREAKPOINT
			return

		# Check navList position
		navListRect = navList.getBoundingClientRect()
		isSticky = navListRect.bottom <= 0

		# Sticky state
		if isSticky
			navList.classList.add 'sticky'
			$('.navList .popupMenu').removeClass 'open'
		else
			navList.classList.remove 'sticky', 'show'

		# Visibility state
		if isScrollingDown
			navList.classList.remove 'show'
		else if isSticky
			navList.classList.add 'show'
		else
			navList.classList.remove 'show'

		lastScrollTop = currentScrollY

# ============================================
# イベント設定
# ============================================

# イベントリスナーを設定
setEvent = ->
	# 必要に応じてスクロールイベントなどを追加
	# $(window).scroll ->
	# 	# スクロール時の処理
	# スライダー
	initSlider = ->
		return unless window.jQuery? and $.fn?.slick?
		slider = $('.slider')
		listSlider = $('.listSlider')
		return unless slider.length > 0 and !slider.hasClass('slick-initialized')

		# full slider
		slider.slick({
			dots: true,
			arrows: false,
			infinite: true,
			duration: 500,
			draggable: true,
			autoplay: true,
			fade: true,
		})
		$('.slider').each ->
			name = $(this).data('slider-name')
			return unless name
			$(this).attr 'aria-label', "#{name} carousel"

	#window.loadイベントが既に発火済みの場合は即座に実行、そうでなければイベントを待つ
	if document.readyState == 'complete'
		initSlider()
	else
		$(window).on 'load', initSlider

	# popupMenu
	$('.navList .navItem > a').on 'click', (e) ->
		e.preventDefault()
		$('.navList .navItem > a').removeClass 'active'
		$(this).addClass 'active'
		$('.navList .popupMenu').removeClass 'open'

		$(this)
			.closest('.navItem')
			.find('.popupMenu')
			.addClass 'open'

	$('.navList .closeBtn').on 'click', ->
		$(this)
			.closest('.popupMenu')
			.removeClass 'open'
		
		$(this)
			.closest('.navItem')
			.find('> a')
			.removeClass 'active'

	$(document).on 'click', (e) ->
		unless $(e.target).closest('.popupMenu, .navList .navItem > a').length
			$('.navList .popupMenu').removeClass 'open'
			$('.navList .navItem > a').removeClass 'active'
	

	return

# ============================================
# 初期化
# ============================================

# 共通機能を初期化
initCommon = ->
	setSmoothScroll()
	setEvent()
	setNavListScroll()
	# setResize() # 必要に応じてコメントアウトを解除

# ============================================
# エントリーポイント
# ============================================

# DOM読み込み完了後に初期化
$ ->
	setTimeout ->
		initCommon()
	, INIT_DELAY


