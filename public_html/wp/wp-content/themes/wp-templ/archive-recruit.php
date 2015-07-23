<?php get_header(); ?>
<title>求人情報｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの求人情報ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="求人情報｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
<body id="recruit">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
        <!-- /mainContent start -->

            <ul id="bread" class="clearfix">
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li>求人情報</li>
            </ul>

			<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/recruit/h2_recruit.jpg" width="769" height="209" alt="求人情報 RECRUIT"/></h2>
			<p class="t0b35 taC"><a href="http://evolable.asia/recruit_ja/" target="_blank"><img src="/img/recruit/img_01.png" width="705" height="173" alt="" class="opa" /></a></p>

			<p class="t0b35 taC"><a href="http://www.jobs.evolable.asia/" target="_blank"><img src="/img/recruit/bnr_recruit01.jpg" width="700" height="92" alt="" class="opa"/></a></p>
			<!--
            <ul class="ul_recruit line20 p0b20">
				<?php
					$wp_query = new WP_Query();
					$param = array(
						'posts_per_page' => '-1',
						'post_type' => 'recruit',
						'post_status' => 'publish',
						'order' => 'ASC',
					);
					$wp_query->query($param);
					$i="0";
					if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
						$i++;
				?>
				<li>
					<h3 class="sHead06"><?php echo $i;?>. <?php the_title();?></h3>
					<table class="tableRecruit">
						<?php if(get_field('recruit_content')):while(has_sub_field('recruit_content')):?>
						<tr>
							<th><?php the_sub_field('require');?></th>
							<td><?php the_sub_field('require_content');?></td>
						</tr>
						<?php endwhile;endif;?>
					</table>
				</li>
				<?php endwhile;endif;?>
			</ul>
            -->
		
		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
        <!-- /maincontent end -->
        </div>

	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>