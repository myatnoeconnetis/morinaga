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

	<title>MORINAGA</title>
	<meta property="og:title" content="MORINAGA">
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
					<nav class="navList">
						<ul>
							<li><a href="#"><span>体験で深める</span></a></li>
							<li><a href="#"><span>知識を広げる</span></a></li>
							<li><a href="#"><span>関連リンク</span></a></li>
						</ul>
					</nav>
					<!-- /navList -->

					<!-- bnrBlock -->
					<div class="bnrBlock">
						<figure>
							<img src="assets/img/top/bnr_img.jpg" alt="" width="1920" height="963">
						</figure>
					</div>
					<!-- /bnrBlock -->

					<!-- visionBlock -->
					<section class="visionBlock">
						<div class="floatArea">
							<img src="assets/img/top/info_float_img1.png" class="floatImg floatImg1 pcOnly" alt="" width="215" height="286" >
							<img src="assets/img/top/info_float_img2.png" class="floatImg floatImg2 pcOnly" alt="" width="247" height="249">
							<img src="assets/img/top/info_float_img3.png" class="floatImg floatImg3 pcOnly" alt="" width="442" height="382">
						</div>

						<div class="ctInner">
							<div class="visionBlockInner">
								<figure class="titleImg">
									<img src="assets/img/top/title_img.png" alt="" width="600" height="464">
								</figure>

								<figure class="titleTxtImg">
									<img src="assets/img/top/title_txt_img.png" alt="" width="1284" height="202">
								</figure>

								<p class="text"><span class="intro">「日本の人々に<br class="spOnly">栄養価のあるおいしいお菓子を届けたい」</span>1899 年、創業者・森永太一郎の想いから <br class="spOnly"> 森永製菓は誕生しました。 <br>森永製菓の食育は、<br>120 年を超える歴史のなかで <br class="spOnly">育んできた想いを受け継ぎ、<br>他者への思いやりを大切にしながら、 <br>「心・体・環境の健康」へ<br class="spOnly">貢献できるよう活動を行っています。<br>従業員もともに学びながら、<br>世界の人々の笑顔を<br class="spOnly">未来につないでいきたいと考えています。</p>

								<div class="photoImg photoImg1">
									<img src="assets/img/top/photo_img1.png" alt="" width="339" height="260">
								</div>
								<div class="photoImg photoImg2">
									<img src="assets/img/top/photo_img2.png" alt="" width="426" height="345">
								</div>
								<div class="photoImg photoImg3">
									<img src="assets/img/top/photo_img3.png" alt="" width="282" height="217">
								</div>
								<div class="photoImg photoImg4">
									<img src="assets/img/top/photo_img4.png" alt="" width="264" height="361">
								</div>
								<div class="photoImg photoImg5">
									<img src="assets/img/top/photo_img5.png" alt="" width="375" height="313">
								</div>
								<div class="photoImg photoImg6">
									<img src="assets/img/top/photo_img6.png" alt="" width="355" height="328">
								</div>
							</div>

							<div class="infoBlock">
								<h2 class="blockTtl">お知らせ<span>PICK UP</span></h2>
								<ul class="infoList">
									<li>
										<figure class="imgCol">
											<img src="assets/img/top/info_img1.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">🏆 農林水産省 第10回食育活動表彰 <br>「消費・安全局長賞」受賞</span>
											<p class="text">キャラメルの歴史から続く、世代を超え親しまれる身近な「食」を通して「笑顔を未来につなぐ」活動が評価されました。</p>
											<a href="" class="link">▷ニュースリリースはこちら</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="assets/img/top/info_img2.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">「食のしごと」の記事が追加されました。</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="assets/img/top/info_img3.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">「お菓子の記憶」の記事が追加されました</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
									<li>
										<figure class="imgCol">
											<img src="assets/img/top/info_img4.png" alt="">
										</figure>
										<div class="textCol">
											<span class="title">食育ホームページをリニューアルしました。</span>
											<a href="" class="link">▷記事一覧へ</a>
										</div>
									</li>
								</ul>

								
							</div>
						</div>
					</section>
					<!-- /visionBlock -->

					<!-- knowledgeBlock -->
					<section class="knowledgeBlock">
						<div class="floatArea">
							<img src="assets/img/top/knowledge_float_img1.png" class="floatImg floatImg1 pcOnly" alt="" width="428" height="440">
							<img src="assets/img/top/knowledge_float_img2.png" class="floatImg floatImg2 pcOnly" alt="" width="226" height="265">
						</div>

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