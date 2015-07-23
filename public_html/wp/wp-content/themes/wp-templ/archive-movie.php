<?php get_header(); ?>
<title>動画紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの動画紹介ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/shadowbox.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="動画紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
			<li>動画紹介</li>
		</ul>
		<h2><img src="<?php echo APP_URL; ?>img/company/movie/h2_movie.jpg" width="768" height="208" alt="動画紹介 MOVIE"/></h2>
		<div class="movieBox">
		<ul class="ul_movie clearfix">
			<?php
				$wp_query = new WP_Query();
				$param=array(
						'post_type'=>'movie',
						'order' => 'DESC',
						'post_status'=>'publish',
						'posts_per_page' => '-1',
						'paged' => $paged,
						);
				$wp_query->query($param);
				$i="";
				if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					$i++;
			?>
			<li>
				<p class="thumbMovie"><a rel="shadowbox;width=639;height=389;player=swf" href="http://www.youtube.com/v/<?php the_field('movie_code');?>&amp;rel=0&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php the_field('movie_code');?>/default.jpg" class="opa"/></a></p>
				<p class="fz10"><?php if(mb_strlen($post->post_title)>45) { $cont= mb_substr($post->post_title,0,45) ; echo strip_tags($cont. ･･･ );} else {echo strip_tags($post->post_title);}?></p>
			</li>
			<?php
				if($i%5==0){
					echo '</ul><ul class="ul_movie clearfix">';
				}
				endwhile;endif;
			?>
		</ul>
		</div>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
		<!-- /maincontent end -->
	</div>

	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
<script src="<?php echo APP_URL; ?>common/js/shadowbox.js" type="text/javascript"></script>
<script type="text/javascript">
Shadowbox.init({
   		gallery:    "swf",
        continuous: true
});
</script>
</body>
</html>