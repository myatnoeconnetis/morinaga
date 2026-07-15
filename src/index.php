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

					<!-- knowledgeBlock -->
					<section class="knowledgeBlock">
						<img src="assets/img/top/knowledge_float_img1.png" class="floatImg floatImg1 pcOnly" alt="" width="428" height="440">
						<img src="assets/img/top/knowledge_float_img2.png" class="floatImg floatImg2 pcOnly" alt="" width="226" height="265">

						<div class="ctInner">
                            <h2 class="blockTtl">知識を広げる<span>knowledge</span></h2>
							<p class="text">お菓子や食に関する専門的な解説から<br>ふわっと心温まるエピソードなど<br>様々なオンラインコンテンツを通じて、<br>学びへの興味喚起や知識の拡充を<br class="spOnly">サポートします。</p>
                            <ul class="colCardList">
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img1.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">食のしごと</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">小学生～大人</p>
                                        <p class="desc">食で人々を笑顔にしたい。そんな想いで働く社員の様々な仕事についてご紹介します。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img2.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">お菓子の記憶</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">小学生～大人</p>
                                        <p class="desc">森永製菓に寄せられたお菓子にまつわるふわっと心温まるエピソードをご紹介します。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img3.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">医師と考える食育</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">中高生～大人</p>
                                        <p class="desc">現場で活躍する医師たちから、健康で豊かな食生活へのアドバイスをお届けします。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img4.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">食品表示</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">小学生～大人</p>
                                        <p class="desc">表示を理解して商品を適切に選べるようキャラメルを例にしてご説明します。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img5.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">森永製菓の菓子育</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">幼児～小学生</p>
                                        <p class="desc">お菓子の大切な役割や安心して召し上がっていただくための情報をお届けします。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img6.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">アレルギー“だから” がないラボ</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">全世代</p>
                                        <p class="desc">「食物アレルギー“だから”がない世界」 を目指すプロジェクトをご紹介します。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img7.jpg" alt="" width="1200" height="630">
                                        </figure>
                                        <h3 class="ttl">森永おくち研究所</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">全世代</p>
                                        <p class="desc">おくちケアをおいしく、たのしく、つづけるための情報をお届けします。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                                <li class="card">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/top/knowledge_img8.jpg" alt="" width="680" height="383">
                                        </figure>
                                        <h3 class="ttl">バーチャル工場見学</h3>
                                        <p class="category">対象</p>
                                        <p class="subTtl">幼児～中高生</p>
                                        <p class="desc">おかしな妖精たちが工場をご案内。森永製菓のお菓子ができるまでをご紹介します。</p>
                                        <span class="seeMore" aria-hidden="true">詳細を見る</span>
                                    </a>
                                </li>
                            </ul>
							<div class="btnWrap">
								<a href="#" class="btnLink">対象別コンテンツ一覧</a>
							</div>
                        </div>
					</section>
					<!-- /knowledgeBlock -->
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