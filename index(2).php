<?php
$conn=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($conn,"SET NAMES utf8");
$sql = "select * from people";
$query =mysqli_query($conn,$sql);
?>
<!-- connect -->

<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Người phổ biến nhất | Sinh nhật nổi tiếng </title>
<meta name="description" content="Khám phá những người phổ biến nhất được xếp hạng dựa trên hoạt động người dùng của chúng tôi. Trang cập nhật hàng tuần với danh sách 48 người nổi tiếng hàng đầu trên trang web của chúng tôi.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="#E4138E">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="main.css">
</head>

<body>
<nav class="nav nav-fixed-top" role="navigation">
<div class="container">
<div class="row no-gutter">
<div class="col-xs-2 col-sm-3 col-md-2">
<a class="brand" href="famous-birthdays-logo-rgb.svg" title="FamousBirthdays.com">Sinh Nhật Nổi Tiếng</a>
</div>
<div class="col-xs-10 col-sm-4">
<form id="fb_search" class="search" role="form" name="fb_search" action="/search" method="post">
<input autocomplete="off" type="search" name="q" placeholder="Nhập Người Nổi Tiếng hoặc Ngày Tháng " class="form-control search search-bar" aria-label="Nhập Người Nổi Tiếng hoặc Ngày Tháng ">
<button type="submit" class="btn btn-search" aria-label="Tìm kiếm" title="Tìm kiếm"><i class="icn icn-search"></i></button>
</form>
</div>
<div class="col-sm-5 col-md-6">
<ul class="quick-links">
<li><a href="/most-popular-people.html" title="phổ biến"><i class="icn icn-star"></i>phổ biến</a></li>
<li><a href="/trending/" title="xu hướng"><i class="icn icn-trending"></i>xu hướng</a></li>
<li><a href="/new/" title="gần đây"><i class="icn icn-recent"></i>gần đây</a></li>
<li><a id="random-person" href="#" title="ngẫu nhiên" class="random-person"><i class="icn icn-random"></i>ngẫu nhiên</a></li>
</ul>
</div>
</div>
</div>

</nav>
<div class="page-wrapper">
<div class="list-page">
<div class="heading-container container">
<div class="row">
<div class="col-xs-12">
<div id="div-gpt-ad-1391210931444-0" class="adspot adspot1">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391210931444-0'); });
	</script>
</div> </div>
</div>
</div>
<div class="container people-list">
<div class="row list-title-sub">
<div class="col-xs-12">
<h3 class="page-title">Phổ biến nhất</h3>
</div>
</div>
	
<div class="row">
<?php
while($row=mysqli_fetch_array($query)) {
?>
<a href="<?php echo $row['link'] ?>" class="face person-item" style="background: url(<?php echo $row['img'] ?>) no-repeat center center; background-size:cover;">
<i class="icn icn-star icn-rank"><span class="rank"><?php echo $row['rank'] ?></span></i>
<div class="info">
<div class="name">
<?php echo $row['name'] ?><?php echo $row['age'] ?>
</div>
<div class="title hidden-xs"><?php echo $row['career'] ?></div>
</div>
</a>
<?php
}
?>
</div>
	
<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1391216460869-2" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391216460869-2'); });
	</script>
</div> </div>
</div>
	
<div class="row">
</div>
	
<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1423776989563-0" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423776989563-0'); });
	</script>
</div> </div>
</div>
	
<div class="row">
</div>

<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1391216734145-1" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391216734145-1'); });
	</script>
</div> </div>
</div>

<div class="row">
</div>

<div class="row">
<div class="col-xs-12">
<div id="div-gpt-ad-1391213528835-0" class="adspot adspot7">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391213528835-0'); });
	</script>
</div> </div>
</div>

</div>
</div>
</div>

<div class="footer-wrapper">
<div class="container">
<footer>
<div class="row">
<div class="col-sm-6">
<ul class="social">
<li>
<a class="icn icn-twitter" href="https://twitter.com/famousbirthdays" targe="_blank" title="Famous Birthdays Twitter"></a>
</li>
<li>
<a class="icn icn-facebook" href="https://www.facebook.com/FamousBirthdays" targe="_blank" title="Famous Birthdays Facebook"></a>
</li>
<li>
<a class="icn icn-instagram" href="https://instagram.com/famousbirthdays" targe="_blank" title="Famous Birthdays Instagram"></a>
</li>
<li>
<a class="icn icn-ios" href="https://itunes.apple.com/us/app/famous-birthdays-celebrity/id646707938" targe="_blank" title="Get the Famous Birthdays iOS App"></a>
</li>
<li>
<a class="icn icn-android" href="https://play.google.com/store/apps/details?id=com.famousbirthdays" targe="_blank" title="Get the Famous Birthdays Android App"></a>
</li>
</ul>
<ul class="quick-links">
<li><a href="/about/">Thông tin</a></li>
<li><a href="/contact/">Liên hệ</a></li>
<li><a href="https://www.amazon.com/s/ref=w_bl_sl_s_ap_web_7141123011?ie=UTF8&node=7141123011&field-brandtextbin=Famous+Birthdays">Áo thun</a></li>
<li><a href="/team/">Nhóm</a></li>
<li><a href="/terms/">Điều khoản</a></li>
</ul>
</div>
<div class="col-sm-6">
<div class="row">
<div class="col-sm-12">
<a href="/" class="brand pull-right" title="FamousBirthdays.com"></a>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<ul class="copyright">
<li>© SinhNhatNoiTieng.com 2017</li>
</ul>
</div>
</div>
</div>
</div>
</footer>
</div>
</div>




<div id="autocomplete-suggestions" class="autocomplete-suggestions" style="position: fixed; display: none; max-height: 300px; z-index: 9999;"></div>
<form name="random" id="random-form" method="post" action="/random"></form>
<script type="text/javascript" src="/static/js/main.js"></script>
<script>
    if ('serviceWorker' in navigator && 'PushManager' in window) {
        navigator.serviceWorker.register('/fb-sw.js')
        .then(function(swReg) {
        })
        .catch(function(error) {
          console.error('Service Worker Error', error);
        });
    } 
  </script>
</body>
</html>
