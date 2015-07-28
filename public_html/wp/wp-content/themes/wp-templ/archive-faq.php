<?php get_header(); ?>
<title>ITのベトナム進出でよくあるご質問｜エボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのよくあるご質問ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="ITのベトナム進出でよくあるご質問｜エボラブルアジア" />
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
<body id="faq">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
        <!-- /mainContent start -->

            <ul id="bread" class="clearfix">
                <li class="home">
                    <a href="/">TOP</a>
                </li>
               <li>FAQ</li>
            </ul>

			<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/faq/h2_faq.jpg" width="770" height="208" alt="FAQ"/></h2>
			<ul class="ul_faq01 clearfix t0b25">
				<li class="floatL">
					<p><a href="#faqCat01">ベトナムについて</a></p>
				<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'faq',
							'order' => 'DESC',
							'posts_per_page' => '3',
							'tax_query' => array(
								array(
									'taxonomy' => 'faqcat',
									'field' => 'slug',
									'terms' => 'ベトナムについて'
									)
								)
							);
					$wp_query->query($param);
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
				?>
					<p><a href="#<?php the_ID();?>"><?php the_title();?></a></p>
				<?php endwhile;endif;?>
				</li>
				<li class="floatR">
					<p><a href="#faqCat02">生活について</a></p>
					<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'faq',
							'order' => 'DESC',
							'posts_per_page' => '3',
							'tax_query' => array(
								array(
									'taxonomy' => 'faqcat',
									'field' => 'slug',
									'terms' => '生活について'
									)
								)
							);
					$wp_query->query($param);
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					?>
					<p><a href="#<?php the_ID();?>"><?php the_title();?></a></p>
					<?php endwhile;endif;?>
				</li>
			</ul>
			<ul class="ul_faq01 clearfix t0b40">
				<li class="floatL">
					<p><a href="#faqCat03">実務について</a></p>
					<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'faq',
							'order' => 'DESC',
							'posts_per_page' => '3',
							'tax_query' => array(
								array(
									'taxonomy' => 'faqcat',
									'field' => 'slug',
									'terms' => '実務について'
									)
								)
							);
					$wp_query->query($param);
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					?>
					<p><a href="#<?php the_ID();?>"><?php the_title();?></a></p>
					<?php endwhile;endif;?>
				</li>
				<li class="floatR">
					<p><a href="#faqCat04">EVAのサービスについて</a></p>
					<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'faq',
							'order' => 'DESC',
							'posts_per_page' => '3',
							'tax_query' => array(
								array(
									'taxonomy' => 'faqcat',
									'field' => 'slug',
									'terms' => 'EVAのサービスについて'
									)
								)
							);
					$wp_query->query($param);
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					?>
					<p><a href="#<?php the_ID();?>"><?php the_title();?></a></p>
					<?php endwhile;endif;?>
				</li>
			</ul>
			<ul class="ul_faq02">
				<li id="faqCat01">
					<h3><span>ベトナムについて</span></h3>
					<ul class="ul_faq03">
						<?php
							$wp_query = new WP_Query();
							$param=array(
									'post_type'=>'faq',
									'order' => 'DESC',
									'posts_per_page' => '-1',
									'tax_query' => array(
										array(
											'taxonomy' => 'faqcat',
											'field' => 'slug',
											'terms' => 'ベトナムについて'
											)
										)
									);
							$wp_query->query($param);
							if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						?>
						<li id="faq<?php the_ID();?>">
						<h4 id="<?php the_ID();?>"><?php the_title();?></h4>
						<?php the_content();?>
						</li>
						<?php endwhile;endif;?>
					</ul>
				</li>
				<li id="faqCat02">
					<h3><span>生活について</span></h3>
					<ul class="ul_faq03">
						<?php
							$wp_query = new WP_Query();
							$param=array(
									'post_type'=>'faq',
									'order' => 'DESC',
									'posts_per_page' => '-1',
									'tax_query' => array(
										array(
											'taxonomy' => 'faqcat',
											'field' => 'slug',
											'terms' => '生活について'
											)
										)
									);
							$wp_query->query($param);
							if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						?>
						<li id="faq<?php the_ID();?>">
						<h4 id="<?php the_ID();?>"><?php the_title();?></h4>
						<?php the_content();?>
						</li>
						<?php endwhile;endif;?>
					</ul>
				</li>
				<li id="faqCat03">
					<h3><span>実務について</span></h3>
					<ul class="ul_faq03">
						<?php
							$wp_query = new WP_Query();
							$param=array(
									'post_type'=>'faq',
									'order' => 'DESC',
									'posts_per_page' => '-1',
									'tax_query' => array(
										array(
											'taxonomy' => 'faqcat',
											'field' => 'slug',
											'terms' => '実務について'
											)
										)
									);
							$wp_query->query($param);
							if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						?>
						<li id="faq<?php the_ID();?>">
						<h4 id="<?php the_ID();?>"><?php the_title();?></h4>
						<?php the_content();?>
						</li>
						<?php endwhile;endif;?>
					</ul>
				</li>
				<li id="faqCat04">
					<h3><span>EVAのサービスについて</span></h3>
					<ul class="ul_faq03">
						<?php
							$wp_query = new WP_Query();
							$param=array(
									'post_type'=>'faq',
									'order' => 'DESC',
									'posts_per_page' => '-1',
									'tax_query' => array(
										array(
											'taxonomy' => 'faqcat',
											'field' => 'slug',
											'terms' => 'EVAのサービスについて'
											)
										)
									);
							$wp_query->query($param);
							if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						?>
						<li id="faq<?php the_ID();?>">
						<h4 id="<?php the_ID();?>"><?php the_title();?></h4>
						<?php the_content();?>
						</li>
						<?php endwhile;endif;?>
					</ul>
				</li>
			</ul>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
        <!-- /maincontent end -->
        </div>

	<?php get_sidebar(); ?>
	<!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>