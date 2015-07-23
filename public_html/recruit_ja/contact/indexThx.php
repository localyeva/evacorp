
<?php 
include_once('/home/1705726298/evolable-asia/public_html/recruit_ja/app_config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="http://evolable.asia/common/img/ico/favicon.ico" />
<link rel="icon" type="image/x-icon" href="http://evolable.asia/common/img/ico/favicon.ico" />
<title>応募フォーム｜EVA求人特設サイト｜ベトナムで働くならEVOLABLE ASIA(エボラブルアジア)</title>
<meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイト。エボラブルアジアの求人応募フォームです。海外で働きたい方やインターンの希望者はこちらからどうぞ。" />
<meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン" />
<link type="text/css" rel="stylesheet" href="css/exvalidation.css" />
<link type="text/css" rel="stylesheet" href="css/base.css" />
 <SCRIPT type="text/javascript">
   history.pushState({ page: 1 }, "title 1", "#noback");
window.onhashchange = function (event) {
window.location.hash = "#noback";

};
</SCRIPT>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47878088-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>


<body id="contact"  >

<div id="headerWrap" class="clearfix"> 
	<!-- /header start -->
	<div class="headerLogo clearfix">
	<p class="logo"><a href="<?php echo APP_URL; ?>"><img src="img/logo.png" width="156" height="51" class="opa" /></a></p>
	<p class="floatR"><a href="<?php echo APP_URL; ?>"><img src="img/btn_head.png" width="115" height="56" alt="" class="opa"/></a></p>
	</div>
	
	<h2 class="mb80"><img src="img/h2_contact.png" width="1000" height="43" alt="" /></h2>
	<!-- /header end --> 
</div>


<!--Container-->
<div id="container" class="clearfix">

<!--<h2 class="blue fz30 fwB">お問い合わせフォーム</h2>-->
	<p align="center" class="t20b20">
    	お問い合わせありがとうございます。 
    </p>
	<p class="t20b20">送信が完了いたしました。<br />
		弊社で確認後、折り返しご連絡させていただきます。<br />
		2営業日以上経ってもご連絡がない場合は、お電話にてお問い合わせください。<br />
		</p>
	<p class=" t20b0 txtContact02"><a href="/recruit_ja/">TOPへ戻る</a></p>
    
  	<p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
   	<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->



<div id="footerWrap"> 
	<!-- /footer start -->
		
	<!-- /footer end --> 
</div>
</div>
<!--/Container-->	



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
<!-- Anti spam part2: clickable email address start -->
<script type="text/javascript">
	$(function(){
		var address = "info" + "@" + "evolable.asia";
		$("#mailContact").attr("href", "mailto:" + address);
		$("#mailContact").text(address);
	});
</script>
<!-- Anti spam part2: clickable email address end -->
</body>
</html>