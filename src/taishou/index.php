<?php
	require_once('../php/init.php');
	require_once("../php/layouts/page_header.php");
	$this_page = "taishouPage";
?>
	<title>対象別（年齢別）コンテンツ紹介一覧</title>
	<meta property="og:title" content="対象別（年齢別）コンテンツ紹介一覧">
</head>

<body>
    <!-- wrapper -->
    <div id="wrapper">

        <!-- innerWrapper -->
        <main id="innerWrapper" class="ctTaishou">

            <!-- header -->
			<?php require_once("../php/layouts/contents_header.php"); ?>
            <!-- /header -->

            <!-- ctArea -->
            <div id="ctArea">
				<!-- pictogramsBlock -->
				<div class="pictogramsBlock">
					<div class="ctInner">
						<p class="pictogramTtl">食育ピクトグラムについて</p>
						<ul class="pictogramList">
							<li class="pictogram1">
								<div class="imgArea">
									<img src="../assets/img/common/icon1.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">共食</p>
									<p class="text">家族や仲間と、会話を楽しみながら食べる食事で、心も体も元気にしましょう。</p>
								</div>
							</li>
							<li class="pictogram2">
								<div class="imgArea">
									<img src="../assets/img/common/icon2.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">朝食欠食の改善</p>
									<p class="text">朝食を食べて生活リズムを整え、健康的な生活習慣につなげましょう。</p>
								</div>
							</li>
							<li class="pictogram3">
								<div class="imgArea">
									<img src="../assets/img/common/icon3.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">栄養バランスの良い食事</p>
									<p class="text">主食・主菜・副菜を組み合わせた食事で、バランスの良い食生活につなげましょう。また、減塩や野菜・果物摂取にも努めましょう。</p>
								</div>
							</li>
							<li class="pictogram4">
								<div class="imgArea">
									<img src="../assets/img/common/icon4.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">生活習慣病の予防</p>
									<p class="text">適正体重の維持や減塩に努めて、生活習慣を予防しましょう。</p>
								</div>
							</li>
							<li class="pictogram5">
								<div class="imgArea">
									<img src="../assets/img/common/icon5.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">歯や口腔の健康</p>
									<p class="text">口腔機能が十分に発達し維持されることが重要ですので、よく噛んでおいしく安全に食べましょう。</p>
								</div>
							</li>
							<li class="pictogram6">
								<div class="imgArea">
									<img src="../assets/img/common/icon6.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">食の安全</p>
									<p class="text">食品の安全性について基礎的な知識をもち、自ら判断し行動する力を養いましょう。</p>
								</div>
							</li>
							<li class="pictogram7">
								<div class="imgArea">
									<img src="../assets/img/common/icon7.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">災害への備え</p>
									<p class="text">いつ起こるかも知れない災害を意識し、非常時のための食料品を備蓄しておきましょう。</p>
								</div>
							</li>
							<li class="pictogram8">
								<div class="imgArea">
									<img src="../assets/img/common/icon8.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">生活習環境への配慮（調和）慣病の予防</p>
									<p class="text">SDGsの目標である持続可能な社会を達成するため、環境に配慮した農林水産物・食品を購入したり、食品ロスの削減を進めたりしましょう。</p>
								</div>
							</li>
							<li class="pictogram9">
								<div class="imgArea">
									<img src="../assets/img/common/icon9.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">地産地消等の推進</p>
									<p class="text">地域でとれた農林水産物や災害食品等を消費することで、食を支える農林水産業や地域経済の活性化、環境負荷の低減につなげましょう。</p>
								</div>
							</li>
							<li class="pictogram10">
								<div class="imgArea">
									<img src="../assets/img/common/icon10.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">農林漁業体験</p>
									<p class="text">農林漁業を体験して、食や農林水産業への理解を深めましょう。</p>
								</div>
							</li>
							<li class="pictogram11">
								<div class="imgArea">
									<img src="../assets/img/common/icon11.png" alt="" width="200" height="200">
								</div>
								<div class="textArea">
									<p class="listTtl">日本の食文化の継承</p>
									<p class="text">地域の郷土料理や伝統料理等の食文化を大切にして、次の世代への継承を図りましょう。</p>
								</div>
							</li>
							<li class="pictogram12">
								<div class="imgArea">
									<img src="../assets/img/common/icon12.png" alt="" width="200" height="200">
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