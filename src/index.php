<?php
require_once('php/init.php');

$current_url = get_current_url();

//キャッシュ削除
$common_css_mtime = get_file_mtime(WWW_ASSETS_ROOT . "css/common.min.css");
$common_js_mtime = get_file_mtime(WWW_ASSETS_ROOT . "js/common.min.js");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">

	<title></title>
	<meta property="og:title" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="copyright" content="Copyright © 2026 ">
	<meta name="author" content="">
	<meta name="rating" content="general">
	<meta name="content-language" content="">
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="<?= $current_url ?>">

	<meta property="og:site_name" content="">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= $current_url ?>">
	<meta property="og:image" content="<?= DOMAIN ?>/assets/img/ogp.png">
	<meta property="og:description" content="">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="<?= DOMAIN ?>/assets/img/ogp.png">
	<link rel="icon" href="<?=DOC_ROOT?>assets/img/favicon.ico">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

	<!-- build:css assets/css/vendor.min.css -->
	<!-- endbuild -->

	<link rel="stylesheet" href="assets/css/common.min.css?<?= $common_css_mtime ?>">
</head>

<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper" class="ctTop">

			<!-- header -->
			<?php require_once("php/layouts/contents_header.php"); ?>
			<!-- /header -->

			<!-- ctArea -->
			<div id="ctArea">
				<main>
					
					<!-- navList -->
					<nav class="navList">
						<ul>
							<li><a href="#"><span>体験で深める</span></a></li>
							<li><a href="#"><span>知識を広げる</span></a></li>
							<li><a href="#"><span>関連リンク</span></a></li>
						</ul>
					</nav>
					<!-- navList -->

					<!-- bnrBlock -->
					<div class="bnrBlock">
						<figure>
							<img src="./assets/img/top/bnr_img.jpg" alt="" width="1920" height="963">
						</figure>
					</div>
					<!-- /bnrBlock -->

					<!-- visionBlock -->
					<section class="visionBlock">
						<div class="ctInner">
							<div class="visionBlockInner">
								<figure class="titleImg">
									<img src="./assets/img/top/title_img.png" alt="">
								</figure>

								<figure class="titleTxtImg">
									<img src="./assets/img/top/title_txt_img.png" alt="">
								</figure>

								<p class="text"><span class="intro">「日本の人々に<br class="spOnly">栄養価のあるおいしいお菓子を届けたい」</span>1899 年、創業者・森永太一郎の想いから <br class="spOnly"> 森永製菓は誕生しました。 <br>森永製菓の食育は、<br>120 年を超える歴史のなかで <br class="spOnly">育んできた想いを受け継ぎ、<br>他者への思いやりを大切にしながら、 <br>「心・体・環境の健康」へ<br class="spOnly">貢献できるよう活動を行っています。<br>従業員もともに学びながら、<br>世界の人々の笑顔を<br class="spOnly">未来につないでいきたいと考えています。</p>

								<div class="photoImg photoImg1">
									<img src="./assets/img/top/photo_img1.png" alt="" width="339" height="260">
								</div>
								<div class="photoImg photoImg2">
									<img src="./assets/img/top/photo_img2.png" alt="" width="426" height="345">
								</div>
								<div class="photoImg photoImg3">
									<img src="./assets/img/top/photo_img3.png" alt="" width="282" height="217">
								</div>
								<div class="photoImg photoImg4">
									<img src="./assets/img/top/photo_img4.png" alt="" width="264" height="361">
								</div>
								<div class="photoImg photoImg5">
									<img src="./assets/img/top/photo_img5.png" alt="" width="375" height="313">
								</div>
								<div class="photoImg photoImg6">
									<img src="./assets/img/top/photo_img6.png" alt="" width="355" height="328">
								</div>
							</div>

							<div class="infoBlock">
								<h2 class="blockTtl">お知らせ<span>PICK UP</span></h2>
								<ul class="infoList">
									<li>
										<figure class="imgCol">
											<img src="./assets/img/top/info_img1.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">🏆 農林水産省 第10回食育活動表彰 <br>「消費・安全局長賞」受賞</span>
											<p class="text">キャラメルの歴史から続く、世代を超え親しまれる身近な「食」を通して「笑顔を未来につなぐ」活動が評価されました。</p>
											<a href="" class="link">▷ニュースリリースはこちら</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="./assets/img/top/info_img2.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">「食のしごと」の記事が追加されました。</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="./assets/img/top/info_img3.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">「お菓子の記憶」の記事が追加されました</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="./assets/img/top/info_img4.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">食育ホームページをリニューアルしました。</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
								</ul>

								<div class="infoFloatImg infoFloatImg1">
									<img src="./assets/img/top/info_float_img1.png" alt="">
								</div>
								<div class="infoFloatImg infoFloatImg2">
									<img src="./assets/img/top/info_float_img2.png" alt="">
								</div>
								<div class="infoFloatImg infoFloatImg3">
									<img src="./assets/img/top/info_float_img3.png" alt="">
								</div>
							</div>
						</div>

					</section>
					<!-- /visionBlock -->
				</main>
			</div>
			<!-- /ctArea -->

			<!-- footer -->
			<?php require_once("php/layouts/contents_footer.php"); ?>
			<!-- /footer -->

		</div>
		<!-- / innerWrap -->

	</div>
	<!-- / wrapper -->


	<!--build:js assets/js/vendor.min.js -->
	<script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
	<script src="assets/js/vendor/jquery.easing.min.js"></script>
	<!-- endbuild -->

	<script src="assets/js/common.min.js?<?=$common_js_mtime?>"></script>
</body>

</html>