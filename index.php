<?php
    if(empty(getenv('PHP_TEST'))){
        require('config.inc');
    }

    /* 共通関数郡を読みこむ */
    require('./unit/common.php');
    
    /* ローディング画面 画像選定 */
    $loadImageList = glob('./assets/images/loading/*.*');
    if(count($loadImageList) <= 1){
        $loadImage = $loadImageList[0];
    }else{
        $loadImage = $loadImageList[mt_rand(1,count($loadImageList))-1];
    }

    //$galleryList = glob('./assets/images/gallery/*.*'); 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />

<!-- meta -->
<?php include('./assets/php/meta.php'); ?>
<title>きつねび</title>

<!-- css -->
<?php include('./assets/php/css.php'); ?>

</head>
<body>
<div class="loading">
    <div class="animation centering w-100"><img class="img-fluid" style="max-height: 70vh;" src="<?php echo $loadImage;?>"></div>
</div>
<div id="backMovie" data-property="{
    videoURL:'tSE6BBF6zqU',
    containment:'body', 
    showControls:false, 
    autoPlay:true, 
    loop:true, 
    mute:true, 
    startAt:0, 
    stopAt: 40,
    opacity:1, 
    addRaster:true, 
    quality:'default',
    onReady: function(player){
            $('.loading').show().delay(3000).queue(function (next) {
                $(this).hide();
                $('html,body').css('overflow-y','visible');
                next();
            });
        }
    }">My video
</div>
<div>
    <div>
        <div class="header__movie" style="height:100vh">
            <div class="header__message">
                <div class="header__message__title">
                    <h2>きつねび</h2>
                </div>
                <div class="header__message__main">
                    <p class="h1 font-weight-bold d-block d-sm-none">GUILD<br />INTRODUCTION</p>
                    <p class="display-4 font-weight-bold d-none d-sm-block">GUILD<br />INTRODUCTION</p>
                    <hr class="bg-white m-0" style="min-width:300px; width:75vw;">
                    <p>Kitsunebi active in Maple Story M</p>
                </div>
                <div class="header__message__footer">
                    <i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="app" class="container-fluid" style="max-width 1110">
    <div class="row">
        <div class="col-1 col-sm-4 bg-filter"></div>
        <div class="col-11 col-sm-8 bg-blank p-1" style="height: 100px;">
            <div class="context__headline scroll-animation fadein-right">
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
            <div class="context__title text-light py-1 pr-5 d-block d-xl-none scroll-animation fadein-left" style="width: 160px;">
                <h1 class="text-right">Style</h1>
            </div>
            <div class="context__title text-light py-1 pr-5 d-none d-xl-block scroll-animation fadein-left" style="width: 400px;">
                <h1 class="text-right">Style</h1>
            </div>
            <div class="m-3 scroll-animation text-fadein">
                <p class="mx-4">『きつねび』は、既存の枠組みに囚われず、新しい楽しみ方を追求します。</p>
                <p class="mx-4">バンケの後半15分では、外のマップに遠足に行く事もよくあり、自由奔放なギルドです。メンバーを見かけたら仲良くしたってください。</p>
            </div>
        </div>
        <div class="col-12 bg-blank p-0" style="height: 50px;">
            <div class="float-right context__title text-light py-1 pr-5 d-block d-xl-none scroll-animation fadein-right" style="width: 200px;">
                <h1 class="ml-5">Article</h1>
            </div>
            <div class="float-right context__title text-light py-1 pr-5 d-none d-xl-block scroll-animation fadein-right" style="width: 400px;">
                <h1 class="ml-5">Article</h1>
            </div>
        </div>
        <div class="col-12 bg-blank" style="height: 40px;"></div>
        <div class="col-12 col-md-6 bg-blank">
            <div class="w-100 centering-x scroll-animation fadein-left" id="article-1" >
                <!-- Twitterの埋め込みダミー  -->
                <blockquote class="twitter-tweet"><p lang="ja" dir="ltr">昨日のバンケは園児＋ライディングで遊びました🙌<a href="https://twitter.com/hashtag/%E3%81%8D%E3%81%A4%E3%81%AD%E3%81%B3?src=hash&amp;ref_src=twsrc%5Etfw">#きつねび</a><a href="https://twitter.com/hashtag/%E3%83%A1%E3%82%A4%E3%83%97%E3%83%ABM?src=hash&amp;ref_src=twsrc%5Etfw">#メイプルM</a> <a href="https://t.co/xoOVnU9Jlq">pic.twitter.com/xoOVnU9Jlq</a></p>&mdash; こまいぬkunn@すもも🃏 (@komainu_maple) <a href="https://twitter.com/komainu_maple/status/1299137947539652609?ref_src=twsrc%5Etfw">August 28, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-blank">
            <div class="w-100 centering-x scroll-animation fadein-right" id="article-2" >
                <!-- Twitterの埋め込みダミー  -->
                <blockquote class="twitter-tweet"><p lang="ja" dir="ltr">新しい事をしたい人、ゆるくやりたい人、初心者は必見！！<br><br>「きつねび」は、こんなギルドです！<br><br>🦊要塞戦なし<br>🦊遠征は各自<br>🦊バンケ 2日に1回 22:30〜<br>🦊メインキャラのみ<br>🦊初心者 多数<br>🦊誰とでも仲良く<br><br>“道なき道を照らす灯火となれ”<a href="https://twitter.com/hashtag/%E3%81%8B%E3%82%8A%E3%82%93%E9%AF%96?src=hash&amp;ref_src=twsrc%5Etfw">#かりん鯖</a><a href="https://twitter.com/hashtag/%E3%83%A1%E3%82%A4%E3%83%97%E3%83%ABM?src=hash&amp;ref_src=twsrc%5Etfw">#メイプルM</a><a href="https://twitter.com/hashtag/%E3%81%8D%E3%81%A4%E3%81%AD%E3%81%B3?src=hash&amp;ref_src=twsrc%5Etfw">#きつねび</a><a href="https://t.co/A5hCryK2CL">https://t.co/A5hCryK2CL</a></p>&mdash; こまいぬkunn@すもも🃏 (@komainu_maple) <a href="https://twitter.com/komainu_maple/status/1239520979635671042?ref_src=twsrc%5Etfw">March 16, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-blank">
            <div class="w-100 centering-x scroll-animation fadein-left" id="article-3" >
            </div>
        </div>
        <div class="col-12 col-md-6 bg-blank">
            <div class="w-100 centering-x scroll-animation fadein-left" id="article-4" >
            </div>
        </div>
        <div class="col-12 bg-blank py-3 px-5" style="height: 70px;">
            <a class="pull-right" href="https://twitter.com/hashtag/%E3%81%8D%E3%81%A4%E3%81%AD%E3%81%B3?src=hashtag_click&f=live">もっと見る>></a>
        </div>
        <div class="col-12 bg-blank p-0">
            <div class="context__title text-light py-1 pr-5 d-block d-xl-none scroll-animation fadein-left" style="width: 260px;">
                <h1 class="text-right">Member</h1>
            </div>
            <div class="context__title text-light py-1 pr-5 d-none d-xl-block scroll-animation fadein-left" style="width: 500px;">
                <h1 class="text-right">Member</h1>
            </div>
            <div style="height:50px;"></div>
        </div>
        <div class="col-4 bg-blank" v-for="member in members">
            <div class="text-center scroll-animation fadein-bottom">
                <a :href=member.url target="_blank"><img class="rounded-circle img-fluid" :src=member.image width="100" height="100"></a>
                <p>{{member.name}}</p>
            </div>
        </div>
        <div class="col-4 bg-blank" v-for="n in 3-(members.length % 3)" ></div>
        <div class="col-12 bg-blank px-2" style="height:70px;">
            <div class="scroll-animation text-fadein">
                <p>※他にもメンバーが多数在籍してます！！</p>
            </div>
        </div>
        <div class="col-12 bg-blank" style="height: 100px;"></div>
        <div class="col-12 bg-filter" style="height: 70vh;"></div>
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

<!--javascript -->
<?php include('./assets/php/script.php'); ?>
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

<script>

    /* youtubeの動画再生 */
    $('#backMovie').YTPlayer();

    /* スクロールし表示範囲に入ったら scroll-animationクラスにアクティブを付与する */
    function scrollChk(){
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();

        jQuery('.scroll-animation').not('.active').each(function(){
            var pos = $(this).offset().top;

            if (scroll > pos - (windowHeight * 0.95)){
                $(this).addClass("active");
            }
        });
    }
    $(window).scroll(function (){
        scrollChk();
    });
    $('body').on('touchmove', function() {
        scrollChk();
    });

    /* vueの処理*/
    var app = new Vue({
        el: '#app',
        data:{
            members: [],
            articles: [],
        },
        methods:{
            getMember: function(){
                var self = this;
                axios.get('./api/member.php').then(function (res){
                    self.members = res.data;
                }).catch(function (err){
                    console.log('err:', err);
                });
            },
            getArticle: function(){
                var self = this;
                axios.get('./api/article.php').then(function (res){
                    self.articles = res.data;
                    for(i=0;i<self.articles.length;i++){
                        $("#article-"+(i+1)).html(self.articles[i].html);
                    }
                }).catch(function (err){
                    console.log('err:', err);
                });
            },
        },
        mounted: function(){
            this.getMember();
            this.getArticle();
        },
    });


</script>

</body>
</html>
