<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<?php include('../assets/php/meta.php'); ?>
<title>きつねび</title>
<?php include('../assets/php/css.php'); ?>
</head>
<body>


<nav class="navbar navbar-dark bg-green">
  <a class="navbar-brand" href="/">きつねび</a>
</nav>

<div class="bg-dark position-relative">
  <p class="position-absolute centering text-white h2 w-100 h-100" style="z-index: 100">
    ビギナー 攻略情報
  </p>
  <img src="/assets/images/sub_header.jpg" class="header__img" style="height: 150px;">
</div>

<div id="app" class="container-fluid" style="max-width 1110">
  <div class="row">
    <div class="col-12 my-3">
      <div v-html="contentAria" class="markdown-body"></div>
    </div>
  </div>
</div>

<?php include('../assets/php/script.php'); ?>
<script>
var mainMd = ' <?php echo substr(json_encode(file_get_contents('./main.md')), 1, -1); ?> ';
var app = new Vue({
  el: '#app',
  data: {
    contentAria: marked(mainMd)
  }
})
</script>
</body>
</html>
