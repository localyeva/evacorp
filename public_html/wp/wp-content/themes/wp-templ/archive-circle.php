<?php get_header(); ?>
<title>社内取り組みの紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの社内取組み紹介ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="社内取り組みの紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
<div id="fb-root"></div>
<script type="text/javascript">
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=142180302543361";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
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
			<li> 社内取り組みの紹介</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/company/circle/h2_circle.jpg" width="770" height="208" alt="社内取り組みの紹介 CIRCLE"/></h2>
		<ul class="ul_circle clearfix p0b30">
			<?php
				$wp_query = new WP_Query();
				$param=array(
						'post_type'=>'circle',
						'order' => 'DESC',
						'post_status'=>'publish',
						'posts_per_page' => '4',
						'paged' => $paged,
						);
				$wp_query->query($param);
				if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					$img_url=wp_get_attachment_image_src(get_field('img'),'circle01');
			?>
			<li>

			<img src="<?php echo $img_url[0];?>" width="<?php echo $img_url[1];?>" height="<?php echo $img_url[2];?>" alt=""/>
				<div class="txtCircle">
					<p><?php the_title();?></p>
					<?php the_content();?>
				</div>
			</li>
			<?php endwhile;endif;?>
		</ul>
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ;?>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
		<!-- /maincontent end -->
	</div>

	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>