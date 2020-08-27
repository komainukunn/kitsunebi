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
<meta property="og:image" content="https://kitsunebi-maple.herokuapp.com/assets/images/activity_2.jpg" /> <!-- 画像URL -->

<title>きつねび</title>

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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" media="screen"/>

</head>
<body>

<div>
    <div>
        <div class="header__movie">
            <div class="header__message">
                <div class="header__message__title">
                    <h2>きつねび</h2>
                </div>
                <div class="header__message__main">
                    <p class="h1 font-weight-bold d-block d-sm-none">GUILD<br />INTRODUCTION</p>
                    <p class="display-4 font-weight-bold d-none d-sm-block">GUILD<br />INTRODUCTION</p>
                    <hr class="bg-white m-0" style="min-width:300px; width:75vw;">
                    <p>Kitsunebe active in Maple Story M</p>
                </div>
                <div class="header__message__footer">
                    <i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div id="headerMovie" data-property="{
            videoURL:'afEUxpV94s8',
            containment:'body', 
            showControls:false, 
            autoPlay:true, 
            loop:true, 
            mute:true, 
            startAt:0, 
            opacity:1, 
            addRaster:true, 
            quality:'default'}">My video01</div>
    </div>
</div>


<div class="container-fluid" style="max-width 1110">
    <div class="row">
        <div class="col-1 col-sm-4 bg-filter"></div>
        <div class="col-11 col-sm-8 bg-blank p-1" style="height: 100px;">
            <div class="context__headline">
                <p class="text-light h2">きつねび</p>
                <div class="p-2 bg-white">
                    <ul class="m-1" style="list-style: none;">
                        <li class="mt-1">要塞戦 : 基本なし</li>
                        <li class="mt-1">バンケ : 2日に1度 22:30〜</li>
                        <li class="mt-1">その他 : メインキャラ在住必須</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 bg-blank d-block d-sm-none" style="height:95px;"></div>
        <div class="col-12 bg-blank d-none d-sm-block" style="height:60px;"></div>
        <div class="col-12 bg-blank p-0">
            <div class="context__title text-light py-1 pr-5 d-block d-xl-none" style="width: 160px;">
                <h1 class="text-right">Style</h1>
            </div>
            <div class="context__title text-light py-1 pr-5 d-none d-xl-block" style="width: 400px;">
                <h1 class="text-right">Style</h1>
            </div>
            <div class="m-3">
                <p class="mx-4">『きつねび』は、既存の枠組みに囚われず、新しい楽しみ方を追求します。</p>
                <p class="mx-4">バンケの後半15分では、外のマップに遠足に行く事もよくあり、自由奔放なギルドです。メンバーを見かけたら仲良くしたってください。</p>
            </div>
        </div>
        <div class="col-12 bg-blank p-0" style="height: 50px;">
            <div class="float-right context__title text-light py-1 pr-5 d-block d-xl-none" style="width: 300px;">
                <h1 class="ml-5">Gallery</h1>
            </div>
            <div class="float-right context__title text-light py-1 pr-5 d-none d-xl-block" style="width: 400px;">
                <h1 class="ml-5">Gallery</h1>
            </div>
        </div>
        <div class="col-11 bg-blank p-0">
            <div id="photoCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators"  style="bottom:-50px;">
                <li data-target="#photoCarousel" class="bg-lightblack active" data-slide-to="0"></li>
                <li data-target="#photoCarousel" class="bg-lightblack" data-slide-to="1"></li>
                <li data-target="#photoCarousel" class="bg-lightblack" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/assets/images/activity_1.png">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/assets/images/activity_2.jpg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/assets/images/activity_3.png">
                </div>
              </div>
              <a class="carousel-control-prev" href="#photoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#photoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="col-1 bg-blank"></div>
        <div class="col-12 bg-blank" style="height: 200px;"></div>
        <div class="col-12 bg-filter" style="height: 70vh;">
            <div class="h1 font-weight-bold text-light centering m-0 text-center" style="height: 70vh;">
                <p class="text-switch">共に笑い</p>
                <p class="text-switch">時には戦い</p>
                <p class="text-switch">面白おかしく<br>毎日を過ごす</p>
                <p class="text-switch">さあ</p>
                <p class="text-switch">道無き道を照らす<br>灯火となろう</p>
            </div>
        </div>
        <div class="col-12 bg-blank  p-5">
            <div class="text-center">
                <h1>コンタクト</h1>
                <p>下記のツイッターアカウントまでご連絡ください。</p>
                <img class="rounded-circle img-fluid" src="assets/images/koma.jpg">
                <p class="mb-0">こまいぬkunn</p>
                <a href="https://twitter.com/komainu_maple">@komainu_maple</a>
            </div>
        </div>
    </div>
</div>

</div>
<!--javascript -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

<script>
    /* youtubeの動画再生 */
    $('#headerMovie').YTPlayer();

    /* ヘッダーの文字のアニメーション */
    var texts = $('.text-switch');
    let textIndex = -1;
    texts.hide();
    
    function switchText() {
        textIndex++;
        texts.eq(textIndex % texts.length).delay(2000).fadeIn(2000).delay(3000).fadeOut(2000, switchText);
    }
    switchText();
</script>

</body>
</html>
