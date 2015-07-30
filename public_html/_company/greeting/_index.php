<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
<?php get_header(); ?>
<title>代表挨拶｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの代表挨拶ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="代表挨拶｜オフショア ベトナム｜ベトナムでのラボ型開発、BPOならエボラブルアジア" />
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

<body id="company">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
		<!-- /mainContent start -->

		<ul id="bread" class="clearfix">
			<li> <a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li> <a href="<?php echo home_url(); ?>/company/">企業情報</a> </li>
			<li>代表挨拶</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/company/greeting/h2_greeting.jpg" width="770" height="208" alt="代表挨拶" /></h2>
		<div class="greetingBox clearfix t0b15"> <img src="<?php echo APP_URL; ?>img/company/greeting/img_photo01.jpg" width="325" height="562" alt="代表 薛　悠司" />
			<div class="descGr">
				<p class="fz16 mb20">日本の会社が抱える問題点や課題点が、<br>
我が社の優秀なベトナム人スタッフ達やサポート体制によって解決し、ビジネスの成長を促進させると確信しています。</p>
				<p class="txtGr01">代表取締役社長　薛　悠司</p>
				<div class="txtGr02">
					<p class="t0b10">　弊社は受託型のオフショア開発ではない、ラボ型オフショア開発事業をメインにITオフショア開発事業とBPO(ビジネスプロセスアウトソーシング）事業を展開しております。<br />　弊社でのラボ型オフショア開発とは、クライアントから１名プロジェクマネージャーを選出頂き、そのプロジェクトマネージャーが常駐もしくは遠隔ベースでベトナム人とチームを形成し開発を行っていく開発形態を意味します。クライアント様のプロジェクトマネージャーと弊社スタッフが恊働することで、従来のオフショア開発よりも圧倒的に効率良く開発できる事業を展開しております。</p>
					<p class="t0b10">　また、クライアントサポート体制として、採用力に富んだ人事チーム、ラボ型開発をサポートする弊社サポートエンジニアチーム、快適な滞在体制・就業環境を形成する総務チームなど充実した体制を取っております。
					</p>
					<p class="t0b10">　なお、価格に関しては、オフショア開発・BPO事業に関しても圧倒的な安価でご提供をしておりますが、 ボリュームメリットを追求することによる管理費の圧縮、人材稼働率100％を実現することによる余剰人材コストの削減を実現し、「安かろう悪かろう」ではなく、安価ではありながらハイクオリティな人材・開発環境を提供することでお客様満足を追求しております。</p>
					<p>年間離職率が20％前後と言われるベトナムにおいて、一桁の離職率を保つ数字が立証するように、高い従業員満足を実現し、顧客満足につなげております。</p>
				</div>
			</div>
		</div>
		<ul class="ul_greeting">
			<li>略歴</li>
			<li><span>2005年</span>株式会社リクルート　入社</li>
			<li><span>2011年</span>株式会社ソルテック工業入社</li>
			<li><span>2011年</span>Soltec Vietnam Company代表取締役社長就任</li>
			<li><span>2012年</span>EVOLABLE ASIA Co., Ltd 代表取締役社長就任</li>
			<li><span>2012年</span>EVOLABLE ASIA Co., Ltd 取締役会長就任</li>
			<li><span>2013年12月1日</span>EVOLABLE ASIA Co., Ltd 代表取締役社長　就任</li>
		</ul>
		<!-- /maincontent end -->

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
	</div>

	<?php get_sidebar(); ?>
    <!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>