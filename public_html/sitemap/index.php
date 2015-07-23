<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
<?php get_header(); ?>
<title>サイトマップ｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのサイトマップページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="サイトマップ｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
</head>

<body id="sitemap">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->
	<div id="mainContent">
		<!-- /mainContent start -->

		<ul id="bread" class="clearfix">
			<li> <a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li>サイトマップ</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/sitemap/h2_sitemap.jpg" width="769" height="208" alt="サイトマップ"/></h2>
		<ul class="sitemapList clearfix t0b60">
			<li>
				<h3><span><a href="<?php echo home_url(); ?>">TOP</a></span></h3>
			</li>
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/company/">企業情報</a></span></h3>
				<ul>
					<li><a href="<?php echo home_url(); ?>/company/company_profile/">会社概要</a></li>
					<li><a href="<?php echo home_url(); ?>/company/greeting/">代表挨拶</a></li>
					<li><a href="<?php echo home_url(); ?>/company/staff/">スタッフ紹介</a></li>
					<li><a href="<?php echo home_url(); ?>/company/circle/">社内の取り組み</a></li>
					<li><a href="<?php echo home_url(); ?>/company/gallery/">ギャラリー</a></li>
					<li><a href="<?php echo home_url(); ?>/company/movie/">動画紹介</a></li>
				</ul>
			</li>
			<li class="noMR">
				<h3><span><a href="<?php echo home_url(); ?>/service/">サービス</a></span></h3>
				<ul>
					<li><a href="<?php echo home_url(); ?>/service/about_labo/">ラボ型開発</a>
						<ul>
							<li><a href="<?php echo home_url(); ?>/service/labo_result/">開発実績</a></li>
						</ul>
					</li>
					<li><a href="<?php echo home_url(); ?>/service/about_bpo/">BPO</a>
						<ul>
							<li><a href="<?php echo home_url(); ?>/service/bpo_result/">BPO実績</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="sitemapList clearfix t0b60">
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/recommend/">参加企業の声</a></span></h3>
			</li>
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/vietnam/">ベトナムの魅力</a></span></h3>
				<!--<ul>
					<li><a href="<?php echo home_url(); ?>/vietnam/">なぜ今ベトナムに進出するのか？</a></li>
					<li><a href="<?php echo home_url(); ?>/about_vietnam/">ベトナムコラム</a></li>
				</ul>-->
			</li>
			<li class="noMR">
				<h3><span><a href="<?php echo home_url(); ?>/faq/">FAQ</a></span></h3>
			</li>
		</ul>
		<ul class="sitemapList clearfix t0b60">
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/recruit/">求人情報</a></span></h3>
			</li>
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></span></h3>
			</li>
			<li class="noMR">
				<h3><span><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></span></h3>
			</li>
		</ul>
		<ul class="sitemapList clearfix">
			<li>
				<h3><span><a href="<?php echo home_url(); ?>/privacypolicy/">プライバシーポリシー</a></span></h3>
			</li>
			<li>
				<h3><span><a href="http://design-team.evolable.asia" target="_blank">>EVA Designチーム</a></span></h3>
			</li>

		</ul>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
		<!-- /maincontent end -->
	</div>
	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jQuery.equalHeights.js"></script>
<script type="text/javascript">
	$(function(){
		$('.sitemapList').equalHeights();
	});
</script>
</body>
</html>