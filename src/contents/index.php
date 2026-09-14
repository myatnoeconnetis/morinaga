<?php
	require_once('../php/init.php');
	require_once("../php/layouts/page_header.php");
?>
	<title>対象別（年齢別）コンテンツ紹介一覧</title>
	<meta property="og:title" content="対象別（年齢別）コンテンツ紹介一覧">
</head>

<body>
    <!-- wrapper -->
    <div id="wrapper">

        <!-- innerWrapper -->
        <main id="innerWrapper" class="ctContents">

            <!-- header -->
			<?php require_once("../php/layouts/contents_header.php"); ?>
            <!-- /header -->

            <!-- ctArea -->
            <div id="ctArea">
				<!-- breadcrumbs -->
				<nav class="breadcrumbs">
					<ul>
						<li>
							<a href="/">ホーム</a>
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

				<!-- tableBlock -->
				<div class="tableBlock">
					<div class="ctInner">
						<h1 class="tableTitle">対象別（年齢別）<br class="spOnly">コンテンツ紹介一覧</h1>
						<div class="tableWrap">
							<table class="contentTable">
								<colgroup>
									<col class="contentNameCol">
									<col class="ageCol">
									<col class="ageCol">
									<col class="ageCol">
									<col class="ageCol">
									<col class="pictogramCol">
								</colgroup>
								<thead>
									<tr>
										<th scope="col"><span>コンテンツ名</span></th>
										<th scope="col">幼児～<br class="spOnly">小学低学<br class="spOnly">年<br class="pcOnly">（保護者・教員）</th>
										<th scope="col">小学<br class="spOnly">４～６年<br>（保護者・教員）</th>
										<th scope="col">中高生<br>（保護者・教員）</th>
										<th scope="col">大学<br class="spOnly">～大人</th>
										<th scope="col">
											食育ピクトグラムの該当項目<br>
											<a class="pictoLink" href="#pictogramsBlock"><span>※</span><span>食育ピクトグラムについて</span></a>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="categoryRow categoryRow--red">
										<th scope="row" colspan="6">体験で深める</th>
									</tr>
									<tr>
										<th scope="row">
											<a href="../caramel-class/">森永製菓のキャラメル教室</a>
										</th>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon10.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../mirai-learning/">森永１チョコ for １スマイル<br>未来ラーング<br>〜チョコレートでSDGsを学ぶ〜</a>
										</th>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../career-class/">森永製菓のキャリア授業</a>
										</th>
										<td></td>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../mel-marl/">森永製菓の菓子育「メルとマールのピクニック」</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon1.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon3.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon5.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../report/03.html">活動レポート</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon10.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../factory/">MORIUM＆鶴見工場見学</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../kidzania/">キッザニア東京「お菓子工場」</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon10.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../recycle-plogging/">プロギング＆in ゼリーリサイクルプログラム</a>
										</th>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr class="categoryRow categoryRow--brown">
										<th scope="row" colspan="6">知識を広げる</th>
									</tr>
									<tr>
										<th scope="row">
											<a href="../job/">食のしごと</a>
										</th>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../memory/">お菓子の記憶</a>
										</th>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon1.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../doctor/">医師と考える食育</a>
										</th>
										<td></td>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon2.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon3.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row"><a href="../foodlabel/">食品表示</a></th>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../kashiiku/">森永製菓の菓子育</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td></td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon1.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon3.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon5.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../factory/virtual/">バーチャル工場見学</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td></td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon10.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="../allergy-lab/">アレルギー “だから” がないラボ</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon1.png" alt="" width="200" height="200">
												<img class="pictogramIcon" src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<a href="https://okuchi-lab.jp/" target="_blank">森永おくち研究所</a>
										</th>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<span class="circleMarker" role="img" aria-label="対象"></span>
										</td>
										<td>
											<div class="pictogramList">
												<img class="pictogramIcon" src="../assets/img/contents/icon5.png" alt="" width="200" height="200">
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /tableBlock -->

				<!-- pictogramsBlock -->
				<div class="pictogramsBlock" id="pictogramsBlock">
					<div class="ctInner">
						<p class="pictogramTtl">食育ピクトグラムについて</p>
						<ul class="pictogramList">
							<li class="pictogram1">
								<div class="imgArea">
									<img src="../assets/img/contents/icon1.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">共食</p>
									<p class="text">家族や仲間と、会話を楽しみながら食べる食事で、心も体も元気にしましょう。</p>
								</div>
							</li>
							<li class="pictogram2">
								<div class="imgArea">
									<img src="../assets/img/contents/icon2.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">朝食欠食の改善</p>
									<p class="text">朝食を食べて生活リズムを整え、健康的な生活習慣につなげましょう。</p>
								</div>
							</li>
							<li class="pictogram3">
								<div class="imgArea">
									<img src="../assets/img/contents/icon3.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">栄養バランスの良い食事</p>
									<p class="text">主食・主菜・副菜を組み合わせた食事で、バランスの良い食生活につなげましょう。また、減塩や野菜・果物摂取にも努めましょう。</p>
								</div>
							</li>
							<li class="pictogram4">
								<div class="imgArea">
									<img src="../assets/img/contents/icon4.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">生活習慣病の予防</p>
									<p class="text">適正体重の維持や減塩に努めて、生活習慣を予防しましょう。</p>
								</div>
							</li>
							<li class="pictogram5">
								<div class="imgArea">
									<img src="../assets/img/contents/icon5.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">歯や口腔の健康</p>
									<p class="text">口腔機能が十分に発達し維持されることが重要ですので、よく噛んでおいしく安全に食べましょう。</p>
								</div>
							</li>
							<li class="pictogram6">
								<div class="imgArea">
									<img src="../assets/img/contents/icon6.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">食の安全</p>
									<p class="text">食品の安全性について基礎的な知識をもち、自ら判断し行動する力を養いましょう。</p>
								</div>
							</li>
							<li class="pictogram7">
								<div class="imgArea">
									<img src="../assets/img/contents/icon7.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">災害への備え</p>
									<p class="text">いつ起こるかも知れない災害を意識し、非常時のための食料品を備蓄しておきましょう。</p>
								</div>
							</li>
							<li class="pictogram8">
								<div class="imgArea">
									<img src="../assets/img/contents/icon8.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">環境への配慮（調和）</p>
									<p class="text">SDGsの目標である持続可能な社会を達成するため、環境に配慮した農林水産物・食品を購入したり、食品ロスの削減を進めたりしましょう。</p>
								</div>
							</li>
							<li class="pictogram9">
								<div class="imgArea">
									<img src="../assets/img/contents/icon9.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">地産地消等の推進</p>
									<p class="text">地域でとれた農林水産物や災害食品等を消費することで、食を支える農林水産業や地域経済の活性化、環境負荷の低減につなげましょう。</p>
								</div>
							</li>
							<li class="pictogram10">
								<div class="imgArea">
									<img src="../assets/img/contents/icon10.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">農林漁業体験</p>
									<p class="text">農林漁業を体験して、食や農林水産業への理解を深めましょう。</p>
								</div>
							</li>
							<li class="pictogram11">
								<div class="imgArea">
									<img src="../assets/img/contents/icon11.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">日本の食文化の継承</p>
									<p class="text">地域の郷土料理や伝統料理等の食文化を大切にして、次の世代への継承を図りましょう。</p>
								</div>
							</li>
							<li class="pictogram12">
								<div class="imgArea">
									<img src="../assets/img/contents/icon12.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">食育の推進</p>
									<p class="text">生涯にわたって心も身体も健康で、質の高い生活を送るために「食」について考え、食育の取組を推進しましょう。</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /pictogramsBlock -->

				<div class="btnWrap">
					<a href="/" class="btnHome">森永製菓の食育トップ</a>
				</div>
            </div>
            <!-- /ctArea -->

            <!-- footer -->
            <?php require_once("../php/layouts/contents_footer.php"); ?>
            <!-- /footer -->

        </main>
        <!-- / innerWrapper -->

    </div>
    <!-- / wrapper -->

    <?php require_once('../php/layouts/page_footer.php'); ?>