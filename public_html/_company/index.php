<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
<?php get_header(); ?>
<title>企業情報｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの企業情報ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="企業情報｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
<meta property="og:image" content="" />
<!-- //FACE BOOK end -->
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
<?php include(TEMPLATEPATH . '/tracklist-finderjp.php'); ?>
</head>

<body id="company">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
		<!-- /mainContent start -->

		<ul id="bread" class="clearfix">
			<li> <a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li>企業情報</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/company/h2_company.jpg" width="770" height="208" alt="企業情報 CAMPANY PROFILE" /></h2>
		<ul class="ul_company clearfix">
			<li class="clearfix floatL"> <a href="company_profile"><img src="<?php echo APP_URL; ?>img/company/img_company01.png" width="150" height="168" alt="会社概要" /></a>
				<p class="txtCompany01">会社概要</p>
				<p>ベトナム ホーチミンにてラボ型オフショア開発のリーディングカンパニーであるEVOLABLE ASIAについてご紹介いたします。</p>
				<a href="company_profile" class="btnMore wi_icon wi_icon07"></a> </li>
			<li class="clearfix floatR"> <a href="greeting"><img src="<?php echo APP_URL; ?>img/company/img_company02.png" width="150" height="168" alt="代表挨拶" /></a>
				<p class="txtCompany01">代表挨拶</p>
				<p>EVOLABLE ASIAの代表取締役社長 薛悠司からのご挨拶です。</p>
				<a href="greeting" class="btnMore wi_icon wi_icon07"></a> </li>
			<li class="clearfix floatL"> <a href="staff"><img src="<?php echo APP_URL; ?>img/company/img_company03.png" width="150" height="168" alt="スタッフ紹介" /></a>
				<p class="txtCompany01">スタッフ紹介</p>
				<p>EVOLABLE ASIAに所属し、ラボ型オフショア開発やBPO業務を行うベトナム人スタッフをご紹介いたします。</p>
				<a href="staff" class="btnMore wi_icon wi_icon07"></a> </li>
			<li class="clearfix floatR"> <a href="gallery"><img src="<?php echo APP_URL; ?>img/company/img_company04.png" width="150" height="168" alt="フォトギャラリー" /></a>
				<p class="txtCompany01">フォトギャラリー</p>
				<p>キックオフパーティーや社員旅行、イベントなどEVOLABLE ASIAに関わるフォトをご覧いただけます。</p>
				<a href="gallery" class="btnMore wi_icon wi_icon07"></a> </li>
			<li class="clearfix floatL"> <a href="movie"><img src="<?php echo APP_URL; ?>img/company/img_company05.png" width="150" height="168" alt="動画紹介" /></a>
				<p class="txtCompany01">動画紹介</p>
				<p>EVOLABLE ASIAに関わる動画をご紹介いたします。</p>
				<a href="movie" class="btnMore wi_icon wi_icon07"></a> </li>
			<li class="clearfix floatR"> <a href="circle"><img src="<?php echo APP_URL; ?>img/company/img_company06.png" width="150" height="168" alt="社内取り組み紹介" /></a>
				<p class="txtCompany01">社内取り組み紹介</p>
				<p>お客様満足度を上げる社内の取り組みや従業員満足度を上げる各種取り組みなどをご紹介いたします。</p>
				<a href="circle" class="btnMore wi_icon wi_icon07"></a> </li>
		</ul>
		<div class="videoBox">
			<iframe width="639" height="389" src="//www.youtube.com/embed/tRupzgAWD9M" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- /maincontent end -->

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
	</div>
	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jquery.biggerlink.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.ul_company li').biggerlink();
    });
</script>
</body>
</html>