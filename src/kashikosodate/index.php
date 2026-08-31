<?php
	require_once('../php/init.php');
	require_once("../php/layouts/page_header.php");
?>
	<title>メルとマールのピクニック</title>
	<meta property="og:title" content="メルとマールのピクニック">
</head>

<body>

    <!-- wrapper -->
    <div id="wrapper">

        <!-- innerWrapper -->
        <div id="innerWrapper" class="ctKashikosodate">

            <!-- header -->
            <?php require_once("../php/layouts/contents_header.php"); ?>
            <!-- /header -->

            <!-- ctArea -->
            <div id="ctArea">
				<main>

					<!-- breadcrumbs -->
					<nav class="breadcrumbs">
						<ul>
							<li>
								<a href="#">ホーム</a>
							</li>
							<li>
								<a href="#">知る・楽しむ</a>
							</li>
							<li>
								<a href="#">食育・工場見学</a>
							</li>
							<li>
								<a href="#">森永製菓の食育</a>
							</li>
						</ul>
					</nav>
					<!-- /breadcrumbs -->

					<!-- navList -->
					<?php require_once("../php/layouts/contents_nav.php"); ?>
					<!-- /navList -->

					<div class="ctPage">
						<div class="pageBnr">
							<p class="pageBnrTxt">メルとマールのピクニック</p>
						</div>

						<div class="ctInner">
							<div class="bnrBlock">
								<img src="../assets/img/kashikosodate/bnr_img.png" class="pcOnly" alt="" width="2160" height="700">
								<img src="../assets/img/kashikosodate/bnr_img_sp.png" class="spOnly" alt="" width="780" height="392">
							</div>

							<div class="noticeBlock">
								<div class="floatArea">
									<img src="../assets/img/top/info_float_img1.png" class="floatImg floatImg1" alt="" width="215" height="286" >
									<img src="../assets/img/top/experience_float_img5.png" class="floatImg floatImg2" alt="" width="375" height="408">
									<img src="../assets/img/top/experience_float_img8.png" class="floatImg floatImg3" alt="" width="356" height="310">
									<img src="../assets/img/top/info_float_img2.png" class="floatImg floatImg4" alt="" width="247" height="249">
								</div>
								<div class="title">菓子育とは</div>
								<p class="text">菓子育は、<br class="spOnly">子どもたちのすこやかな成長を応援する<br>森永製菓の食育の取り組みです。</p>
								<p class="text">お菓子の価値は、栄養補給だけでなく、<br class="spOnly">人と人、心と心をつなぐ<br>コミュニケーションの役割である<br class="spOnly">と考えています。</p>
							</div>

							<div class="twoCol">
								<div class="visualCol">
									<div class="title">菓子育絵本<br>「メルとマールのピクニック」</div>
									<img src="../assets/img/kashikosodate/kashikosodate_img1.png" alt="" width="1040" height="764">
								</div>
								<div class="textCol">
									<div class="title">菓子育絵本<br>「メルとマールのピクニック」</div>
									<p class="text">そこで、創造性を育みながら、菓子の役割や菓子との上手な付き合い方をたのしく学ぶことができるオリジナル菓子育絵本「メルとマールのピクニック」（協力：（株）NHKエデュケーショナル）を2018年に制作しました。<br>保育・幼児教育の現場で行われている「食への関心を高めるための工夫」をちりばめた内容で構成し、さまざまな保育シーンでご活用いただいています。</p>
									<div class="subTt">あらすじ</div>
									<p class="text">仲良しのうさぎ、メルとマールは、ある日、ビスケットを持って森へお散歩に出かけます。お菓子を持っていたことで、その森の住人たちとの出会いが、思いがけない心のふれあいを生むことになります。</p>
								</div>
							</div>

							<div class="twoCol">							
								<div class="textCol">
									<div class="title">劇遊びになった<br>「メルとマールのピクニック」</div>
									<p class="text">2025年からは従業員が自身の子どもの通う幼稚園・保育所で「メルとマールのピクニック」を題材とした劇遊びを行うワークショップにも取り組んでいます。<br>ワークショップでは、絵本の読み聞かせで十分に絵本の世界を味わったあと、「劇遊び」の中で登場キャラクターになりきり絵本の世界に入り込みます。想像力をはばたかせて遊ぶ中で、「お菓子のある楽しい時間」や「家族やお友だちなど大切な人と心を通わせるコミュニケーションの楽しさ」を自然と体感できます。</p>
								</div>
								<div class="visualCol">
									<div class="title">劇遊びになった<br>「メルとマールのピクニック」</div>
									<img src="../assets/img/kashikosodate/kashikosodate_img2.png" alt="" width="1040" height="565">
								</div>
							</div>

							<div class="ytVideo">
								<iframe src="https://www.youtube.com/embed/BCNwaaGw3E4?si=3Dnq6xiyYSRMU1tz" title="メルとマールのピクニック" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>

							<div class="btnWrap">
								<a href="#" target="_blank" class="btnLink">森永製菓の菓子育</a>
							</div>
						</div>
					</div>
				</main>
            </div>
            <!-- /ctArea -->

            <!-- footer -->
            <?php require_once("../php/layouts/contents_footer.php"); ?>
            <!-- /footer -->

        </div>
        <!-- / innerWrapper -->

    </div>
    <!-- / wrapper -->

    <?php require_once('../php/layouts/page_footer.php'); ?>