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
					<!-- slideBlock -->
					<div class="slideBlock">

					</div>
					<!-- /slideBlock -->

					<!-- newsBlock -->
					<section class="newsBlock">
						<div class="ctInner">
							<h2 class="blockTtl">お知らせ<span>PICK UP</span></h2>
							<p>2017年に出張授業「森永製菓のキャラメル教室」を開始し、現在は４つのプログラムを全国の小学校・中学校・高等学校や幼稚園・保育所で、当社の役職員が講師となり実施しています。各自治体や教育機関、教育委員会と連携するとともに、遠隔地の方々も参加しやすいよう、オンラインでの実施も推進しています。</p>
							<div class="btnWrap">
								<a href="#" class="btnLink">活動レポート</a>
							</div>
							<div class="btnWrap">
								<a href="#" class="btnLink pdf">実施校一覧（PDF）</a>
							</div>
						</div>
					</section>
					<!-- /newsBlock -->

					<!-- aboutBlock -->
					<section class="aboutBlock">

					</section>
					<!-- /aboutBlock -->

					<!-- interviewBlock -->
					<section class="interviewBlock">

					</section>
					<!-- /interviewBlock -->

					<!-- supportBlock -->
					<section class="supportBlock">

					</section>
					<!-- /supportBlock -->

					<!-- workBlock -->
					<section class="workBlock">

					</section>
					<!-- /workBlock -->

					<!-- contactBlock -->
					<section class="contactBlock">

					</section>
					<!-- /contactBlock -->

					<!-- awardBlock -->
					<section class="awardBlock">

					</section>
					<!-- /awardBlock -->
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