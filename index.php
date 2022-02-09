<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="キーワード,キーワード,キーワード,キーワード,キーワード">
  <meta name="description" content="ディスクリプションディスクリプションディスクリプションディスクリプションディスクリプション">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>タイトル</title>
  <meta property="og:site_name" content="タイトル">
  <meta property="og:type" content="website">
  <meta property="og:url" content="URLが入ります。">
  <meta property="og:image" content="URLが入ります。/images/ogp.png">
  <meta property="og:title" content="タイトル">
  <meta property="og:description" content="ディスクリプションディスクリプションディスクリプションディスクリプションディスクリプション">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="タイトル">
  <meta name="twitter:description" content="ディスクリプションディスクリプションディスクリプションディスクリプションディスクリプション">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/lib.js"></script>
  <script src="js/script.js"></script>
  <script src="http://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
<?php
//タイムゾーンは日本
date_default_timezone_set('Asia/Tokyo');

//現在時刻を0000-00-00-00:00の形式で取得
$today = date("Y-m-d-H:i");

//?time=パラメータを取得
if(isset($_GET['time'])) { $parameter_time = $_GET['time']; }

//?time=パラメータがあれば使用、なければ現在時刻を使用
if(isset($_GET["time"])){
  $nowtime = $parameter_time;
}
if(!isset($_GET["time"])){
  $nowtime = $today;
}

//切替日を2022年02月08日 23:59に設定
$switching_date = date("2022-02-08-23:59");

?>

<?php
//2022年02月08日 23:59以降
if ($nowtime > $switching_date): ?>
キャンペーン終了
<?php endif; ?>

<?php
//2022年02月08日 23:59以前
if ($nowtime < $switching_date): ?>
キャンペーン期間中
<?php endif; ?>


</body>

</html>