<?php get_header(); ?>
<title>ベトナムにオフショア開発で進出した企業インタビュー｜エボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジア参加企業の声ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="ベトナムにオフショア開発で進出した企業インタビュー｜エボラブルアジア" />
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
<body id="recommend">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
        <!-- /mainContent start -->

            <ul id="bread" class="clearfix">
                <li>
                    <a href="<?php echo home_url(); ?>">TOP</a>
                </li>
                <li>参加企業の声</li>
            </ul>

			<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/recommend/h2_recommend.jpg" width="769" height="208" alt="参加企業の声  RECOMMEND"/></h2>
			<ul class="ul_rec p0b30">
				<?php
					$wp_query = new WP_Query();
					$param = array(
						'posts_per_page' => '6',
						'post_type' => 'recommend',
						'post_status' => 'publish',
						 'paged' => $paged,
						'order' => 'DESC',
						'meta_query' => array(
							array(
								'key' => 'faq',
								'value' => 0,
								'type' => 'NUMERIC',
								'compare' => '>'
							)
						)
					);
					$wp_query->query($param);

					if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
						$link = get_field('comLink');
						$img_url01 = wp_get_attachment_image_src(get_field('comp_img'),'recommend01');
						$img_urlCheck = wp_get_attachment_image_src(get_field('comp_logo'),'full');
						$with=$img_urlCheck[1];
						$height=$img_urlCheck[2];
						if($height < $with){
							$img_url02 = wp_get_attachment_image_src(get_field('comp_logo'),'recommend06');
						}
						else{
							$img_url02 = wp_get_attachment_image_src(get_field('comp_logo'),'recommend06');
						}

				?>
				<li class="clearfix" id="rec<?php the_ID();?>">

					<p class="imgRec taC" style="width:265px;">
					<?php if($img_url01){?>
					<img src="<?php echo $img_url01[0];?>" width="<?php echo $img_url01[1];?>" height="<?php echo $img_url01[2];?>" alt="<?php the_title();?>" class="t0b10"/><br />
					<?php }?>
						<?php if($img_url02){?>
						<?php if($link): ?><a href="<?php echo $link; ?>" target="_blank"><?php endif; ?>
						<img src="<?php echo $img_url02[0];?>" width="<?php echo $img_url02[1];?>" height="<?php echo $img_url02[2];?>" alt="<?php the_title();?>"/><?php if($link): ?></a><?php endif; ?>

						<?php }?>
					</p>

					<div class="cntRec">
						<p class="fz16 fwB line20"><?php the_field('comp_slogan');?></p>
						<p class="fz14 fwB"><?php the_title();?></p>
						<div>
							<?php
								// start advanced custom fields repeater
								if(get_field('faq')):
									while(the_repeater_field('faq')):
						   ?>
									<p class="fwB fz15"><? echo get_sub_field('question')?></p>
									<div class="t10b20"><? echo get_sub_field('answer')?></div>
						  <?php
									endwhile;
								endif;
							?>
						</div>
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