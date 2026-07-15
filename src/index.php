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
	 <link rel="stylesheet" href="assets/css/vendor/slick.min.css">
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
					<div class="navList">
						<div class="navListInner">
							<ul>
								<li><a href="#"><span>体験で深める</span></a></li>
								<li><a href="#"><span>知識を広げる</span></a></li>
								<li><a href="#"><span>関連リンク</span></a></li>
							</ul>
						</div>
					</div>
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
						<div class="ctInner">
							<div class="visionBlockInner">
								<figure class="titleImg">
									<img src="assets/img/top/title_img.png" alt="">
								</figure>

								<figure class="titleTxtImg">
									<img src="assets/img/top/title_txt_img.png" alt="">
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

								<div class="infoFloatImg infoFloatImg1">
									<img src="assets/img/top/info_float_img1.png" alt="">
								</div>
								<div class="infoFloatImg infoFloatImg2">
									<img src="assets/img/top/info_float_img2.png" alt="">
								</div>
								<div class="infoFloatImg infoFloatImg3">
									<img src="assets/img/top/info_float_img3.png" alt="">
								</div>
							</div>
						</div>

					</section>
					<!-- /visionBlock -->

					<!-- experienceBlock -->
					<section class="experienceBlock">
						<div class="ctInner">
							<ul class="floatingImages">
								<li>
									<img src="assets/img/top/experience_float_img1.png" alt="" width="363" height="363">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img2.png" alt="" width="254" height="224">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img3.png" alt="" width="302" height="298">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img4.png" alt="" width="394" height="394">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img5.png" alt="" width="375" height="408">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img6.png" alt="" width="232" height="232">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img7.png" alt="" width="172" height="156">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img8.png" alt="" width="356" height="310">
								</li>
								<li>
									<img src="assets/img/top/experience_float_img9.png" alt="" width="249" height="249">
								</li>
							</ul>
							<h3 class="blockTtl">体験で深める<span>Experience</span></h3>
							<p class="desc">４つのプログラムの出張授業をはじめ、<br>森永エンゼルミュージアム <br class="spOnly">MORIUM＆鶴見工場見学ツアーや<br>キッザニア東京での<br class="spOnly">お菓子工場パビリオンなど、<br>様々な体験を通じて、<br class="spOnly">学びの深化をサポートします。</p>
	
							<h4 class="redTtl">出張授業</h4>
							<p class="para">2017年に出張授業「森永製菓のキャラメル教室」を開始し、現在は４つのプログラムを全国の小学校・中学校・高等学校や幼稚園・保育所で、当社の役職員が講師となり実施しています。各自治体や教育機関、教育委員会と連携するとともに、遠隔地の方々も参加しやすいよう、オンラインでの実施も推進しています。</p>

							<ul class="lessons">
								<li class="kyaramel">
									<figure class="imgArea">
										<img src="assets/img/top/kyaramel.png" alt="Kyaramel image" width="484" height="352">
									</figure>
									<div class="content">
										<p class="lessonTtl">キャラメルの歴史から<br class="pcOnly">「工業生産」を学ぼう</p>
										<p class="labelBadge"><span class="badge">対象</span>小学校５・６年生</p>
										<p class="labelBadge"><span class="badge">関連教科</span>社会科「わたしたちの生活と工業生産」</p>
										<p class="text">製造ラインや働く人の動画・クイズ・発売当初の手工業をイメージしたワークを通じて、工業生産における工夫や努力、モノづくりへの想いを工場見学さながらの臨場感で学び、教科書の学びを深化します。</p>
										<a href="#">詳細を見る</a>
									</div>
								</li>
								<li class="foodRelated">
									<figure class="imgArea">
										<img src="assets/img/top/mirai.png" alt="Mirai image" width="680" height="339">
									</figure>
									<div class="content">
										<p class="lessonTtl">「食のしごと」から「働く」を<br>想像してみよう</p>
										<p class="labelBadge"><span class="badge">対象</span>中学校、高等学校、高等専門学校の在学生</p>
										<p class="labelBadge"><span class="badge">関連教科</span>総合的な学習（探求）の時間</p>
										<p class="text">森永製菓の社員が事業内容や実際の働き方などを説明し、質疑応答などのコミュニケーションを通じて、職業やキャリアを考え、進路や働くことのイメージを深める機会を提供します。</p>
										<a href="#">詳細を見る</a>
									</div>
								</li>
								<li class="future">
									<figure class="imgArea">
										<img src="assets/img/top/head_thumb.png" alt="Head Thumb image" width="680" height="338">
									</figure>
									<div class="content">
										<p class="lessonTtl">「わたしたちの未来」を考えよう</p>
										<p class="labelBadge"><span class="badge">対象</span>小学校４～６年生</p>
										<p class="labelBadge"><span class="badge">関連教科</span>総合的な学習の時間 「持続可能な社会の実現」</p>
										<p class="text">チョコレートを題材に、社会課題を「自分ごと化」して考える授業です。クイズやワークを通して「誰一人取り残さない」持続可能な社会について考え、行動するきっかけを作ります。</p>
										<a href="#">詳細を見る</a>
									</div>
								</li>
								<li class="pictureBooks">
									<figure class="imgArea">
										<img src="assets/img/top/merumaru.png" alt="Merumaru image" width="660" height="328">
									</figure>
									<div class="content">
										<p class="lessonTtl">絵本の劇遊びから<br>「菓子の役割」を学ぼう</p>
										<p class="labelBadge"><span class="badge">対象</span>幼児～小学校低学年</p>
										<p class="pcOnly">&nbsp;</p>
										<p class="text">菓子育絵本「メルとマールのピクニック」を題材とした劇遊びを行うワークショップを通じて、創造性を育みながら、菓子の役割や菓子との上手な付き合い方を楽しく学びます。</p>
										<a href="#">詳細を見る</a>
									</div>
								</li>
							</ul>

							<div class="btnWrap">
								<a href="#" class="btnLink">活動レポート</a>
							</div>

							<div class="performanceArea">
								<p class="areaTtl">2026年3月末時点の実績</p>

								<div class="twoCol">
									<div class="statsCol">
										<dl>
											<dt>参加児童生徒数</dt>
											<dd>14,208名</dd>
										</dl>
										<dl>
											<dt>参加学校数</dt>
											<dd>206校</dd>
										</dl>
										<dl>
											<dt>参加役職員数</dt>
											<dd>716名</dd>
										</dl>
									</div>
									<div class="imgCol">
										<div class="slider">
											<figure>
												<img src="assets/img/top/performance_slider_img1.png" alt="Performance slider image" width="1100" height="560">
											</figure>
											<figure>
												<img src="assets/img/top/performance_slider_img1.png" alt="Performance slider image" width="1100" height="560">
											</figure>
											<figure>
												<img src="assets/img/top/performance_slider_img1.png" alt="Performance slider image" width="1100" height="560">
											</figure>
											<figure>
												<img src="assets/img/top/performance_slider_img1.png" alt="Performance slider image" width="1100" height="560">
											</figure>
											<figure>
												<img src="assets/img/top/performance_slider_img1.png" alt="Performance slider image" width="1100" height="560">
											</figure>
										</div>
									</div>
								</div>
							</div>

							<div class="btnWrap">
								<a href="#" class="btnLink pdf">実施校一覧（PDF）</a>
							</div>

							<div class="tourArea">
								<p class="redTtl spOnly">森永エンゼルミュージアム<br>MORIUM(モリウム)& 工場見学[予約制]</p>
								<div class="tsurumiFactory">
									<a href="#">
										<figure>
											<img class="pcOnly" src="assets/img/top/tsurumi_factory_pc.png" alt="Tsurumi factory image" width="940" height="508">
											<img class="spOnly" src="assets/img/top/tsurumi_factory_sp.png" alt="Tsurumi factory image" width="940" height="508">
										</figure>
										<div class="content">
											<p class="ttl">森永エンゼルミュージアム<br>MORIUM＆鶴見工場見学</p>
											<p class="notice pcOnly">～新しくて懐かしい MORINAGAに出会える～</p>
											<p class="category">対象</p>
											<p class="subTtl">小学生～大人</p>
											<p class="desc">森永製菓は、約100年前から学校の子どもたちなどの工場見学を受け入れてきました。企業活動を通して社会に貢献する「利他の精神」を受け継ぎ、森永エンゼルミュージアム MORIUM（モリウム）と鶴見工場の両方をご見学いただけるアテンド付きツアーを行っています。</p>
											<span class="seeMore" aria-hidden="true">詳細を見る</span>
										</div>
									</a>
								</div>
								<ul class="colCardList">
									<li class="card">
										<a href="#">
											<figure>
												<img src="assets/img/top/candy_factory.png" alt="Candy factory image" width="676" height="392">
											</figure>
											<p class="ttl">キッザニア東京「お菓子工場」</p>
											<p class="category">対象</p>
											<p class="subTtl">３歳～中学生</p>
											<p class="desc">五感を使ってお菓子がもたらす価値やものづくりの工夫を体験。食品衛生やルール・マナーへの理解を深め、子どもたちの自立性と社会性を養います。</p>
											<span class="seeMore" aria-hidden="true">詳細を見る</span>
										</a>
									</li>
									<li class="card">
										<a href="#">
											<figure>
												<img src="assets/img/top/recycling.png" alt="Recycling image" width="676" height="392">
											</figure>
											<p class="ttl">ｉｎゼリーリサイクルプログラム＆プロギング</p>
											<p class="category">対象</p>
											<p class="subTtl">全世代</p>
											<p class="desc">容器のリサイクルプログラムやプロギングを広めていく活動を通じて、"体の健康"だけでなく、"心の健康"、 "環境の健康"に貢献します。</p>
											<span class="seeMore" aria-hidden="true">詳細を見る</span>
										</a>
									</li>
									<li class="card">
										<a href="#">
											<figure>
												<img src="assets/img/top/smile_park.png" alt="Smile park image" width="676" height="392">
											</figure>
											<p class="ttl">モリナガスマイルパーク</p>
											<p class="category">対象</p>
											<p class="subTtl">全世代</p>
											<p class="desc">森永製菓が考える「心の健康＝こころく」を大切にした様々な活動をご紹介。世界中のお客様の笑顔を育み、未来へとつなげていく場所です。</p>
											<span class="seeMore" aria-hidden="true">詳細を見る</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
					<!-- /experienceBlock -->

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
	<script src="assets/js/vendor/slick.min.js"></script>
	<!-- endbuild -->

	<script src="assets/js/common.min.js?<?=$common_js_mtime?>"></script>
	<script src="assets/js/other.js"></script>
</body>

</html>