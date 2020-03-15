<?php
    if(empty(getenv('PHP_TEST'))){
        require('config.php');
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />

<!-- Twitter サムネ-->
<meta name="twitter:card" content="summary_large_image" /> <!--Twitterのサムネのタイプ指定-->
<meta name="twitter:site" content="@komainu_maple" /> <!--Twitterアカウント-->
<meta property="og:url" content="https://kitsunebi-maple.herokuapp.com/" /> <!--ページURL-->
<meta property="og:title" content="きつねび" /> <!--記事タイトル-->
<meta property="og:description" content="メイプルストーリーMかりん鯖で活動しているギルドきつねびの紹介ページです！" /> <!--ディスクリプション-->
<meta property="og:image" content="https://kitsunebi-maple.herokuapp.com/assets/images/header-bg.png" /> <!-- 画像URL -->

<title>きつねび</title>
<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
</script>

<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

<!-- google fonts -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>

<!-- css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css" media="screen"/>

</head>
<body>

<div id="wrapper">
<div id="header" class="content-block header-wrapper">
	<div class="header-wrapper-inner">
		<section class="top clearfix">
			<div class="pull-left">
				<h1><a class="logo" href="index.html">きつねび</a></h1>
			</div>
			<div class="pull-right">
				<!-- <a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a> -->
			</div>
		</section>
		<section class="center">
			<div class="slogan">
				道無き道を照らす</br>灯火となれ
			</div>
		</section>
		<section class="bottom">
			<a id="scrollToContent" href="#">
				<img src="assets/images/arrow_down.png">
			</a>
		</section>
	</div>
</div><!-- header -->

<div class="content-block" id="portfolio">
	<div class="container">
		<header class="block-heading cleafix">
			<h1>ギルド紹介</h1>
			<p>メイプルストーリーM かりんサーバーで活動している『きつねび』をご紹介させていただきます。</p>
		</header>
		<section class="block-body">
			<div class="row">
				<div class="col-sm-4">
					<a href="#services" class="recent-work" style="background-image:url(assets/images/overview_thumb.jpg)">
						<span class="btn btn-o-white">概要</span>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#blog" class="recent-work" style="background-image:url(assets/images/activity_thumb.jpg)">
						<span class="btn btn-o-white">活動</span>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#parallax" class="recent-work" style="background-image:url(assets/images/gallery_thumb.jpg)">
						<span class="btn btn-o-white">ギャラリー</span>
					</a>
				</div>
			</div>
		</section>
	</div>
</div><!-- #portfolio -->

<div class="content-block parallax" id="services">
	<div class="container text-center">
		<header class="block-heading cleafix">
			<h1>概要</h1>
			<p>きつねびは、非常にゆるいギルドです。ガチガチな要塞戦や遠征に疲れてしまった方や初心者に優しいギルドを目指しています。</p>
		</header>
		<section class="block-body">
			<div class="row">
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-bolt"></i>
                        <h2>要塞戦</h2>
						<p>要塞戦は行いません！その時間は、自由にメイプルしたり、他の事をやったりしています。気まぐれで行う時もあります笑</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-heart-o"></i>
						<h2>遠征</h2>
						<p>特に縛りはありません。各自で行くこともあれば、集まって行く場合もあります。みんなマイペースにやっています！</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-bell-o"></i>
						<h2>バンケット</h2>
                        <p>2日に1回 22時30分より行っています。前半の15分ぐらいはギルドアジト内で雑談しており、後半の15分はスクリーンショットを取りに遠足へ行ったり、クイズ大会などの企画を行っています！！</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div><!-- #services -->

<div class="content-block" id="blog">
	<div class="container">
		<header class="block-heading cleafix">
			<h1>活動紹介</h1>
			<p>主にバンケットの様子を紹介します。</p>
		</header>
		<section class="block-body">
			<div class="row">
				<div class="col-sm-4 blog-post">
					<img src="assets/images/activity_1.png">
					<h2>雑談</h2>
					<p>前半15分では、雑談しつつメンバーが揃うのを待ちます。通常のバンケットを行っているようなイメージです。</p>
				</div>
				<div class="col-sm-4 blog-post">
					<img src="assets/images/activity_2.jpg">
					<h2>遠足</h2>
					<p>ギルドアジトを抜け出しスクリーンショットを取りに行くのが遠足です。また遠足先マップのBGMを聞くことも醍醐味になっています。決め方は、ギルドメンバーが気に入ってる場所だったり、気まぐれで決めたり、ほとんどノリで決めてます笑</p>
				</div>
				<div class="col-sm-4 blog-post">
					<img src="assets/images/activity_3.png">
					<h2>その他企画</h2>
					<p>遠足以外の事をやりたい時に、クイズ大会やエオス塔レースなどの企画を差し込みで行います。画像はエオス塔レースを行った際の写真です。終わった後は皆ヘトヘトでした笑</p>
				</div>
			</div>
		</section>
	</div>
</div><!-- #blog -->

<div class="content-block parallax" id="parallax">
	<div class="container text-center">
		<h1>ギャラリー</h1>
<a class="twitter-timeline" href="https://twitter.com/komainu_maple/lists/list?ref_src=twsrc%5Etfw">A Twitter List by komainu_maple</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
</div><!-- #parallax -->

<div class="content-block" id="testimonials">
	<div class="container">
		<header class="block-heading cleafix">
			<h1>コンタクト</h1>
			<p>下記のツイッターアカウントまでご連絡ください。</p>
		</header>
		<section class="block-body">
			<div class="row">
				<div class="col-md-4">
					<div class="testimonial">
						<img src="assets/images/koma.jpg">
						<br />
						<strong>こまいぬkunn</strong><br/>
						<span><a href="https://twitter.com/komainu_maple">@komainu_maple</a></span>
					</div>
				</div>
			</div>
		</section>
	</div>
</div><!-- /#testimonials -->

</div><!--/#wrapper-->

<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.actual.min.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
    $(function(){
    });
</script>
</body>
</html>
