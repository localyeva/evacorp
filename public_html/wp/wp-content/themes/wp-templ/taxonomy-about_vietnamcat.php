<?php get_header(); ?>
<title>ベトナム進出の魅力｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのコラムページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="ベトナム進出の魅力｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
<body id="about_vietnam">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>
	<div id="mainContent">
		<!-- /mainContent start -->
		<ul id="bread" class="clearfix">
			<li><a href="<?php echo home_url(); ?>">TOP</a></li>
			<li><a href="<?php echo home_url(); ?>/about_vietnam/">ベトナムの魅力</a></li>
			<li><?php echo $term->name;?></li>
		</ul>
		<h2 class="t0b50"><img src="<?php echo APP_URL; ?>img/about_vietnam/h2_vietnam.jpg" alt="ベトナムの魅力 ABOUT VIETNAM" width="770" height="210" /></h2>
		<h3 class="mHead">ベトナムコラム</h3>
		<div class="ul_vietnam catVietNam">
			<h4 class="clearfix"><span><?php echo $term->name;?></span></h4>
			<ul>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts($query_string . '&order=desc&posts_per_page=-1&paged=' . $paged);
					if(have_posts()):while(have_posts()) : the_post();
				?>
				<li><a href="<?php the_permalink();?>"><?php if(mb_strlen($post->post_title)>50) {
						$title= mb_substr($post->post_title,0,50) ;
						echo $title ;
					} else {echo $post->post_title;}?></a></li>
				<?php endwhile;endif;?>
			</ul>
		</div>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
		<!-- /maincontent end -->
	</div>

	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>