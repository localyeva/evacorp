<?php get_header(); ?>
<title>フォトギャラリー｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのギャラリーページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/galleriffic.css" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jquery.opacityrollover.js"></script>
<!-- FACE BOOK start -->
<meta property="og:title" content="フォトギャラリー｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
			<li><a href="<?php echo home_url(); ?>">TOP</a></li>
			<li><a href="<?php echo home_url(); ?>/company/">企業情報</a></li>
			<li>フォトギャラリー</li>
		</ul>
		<h2 class="t0b30"><img src="<?php echo APP_URL; ?>img/company/gallery/h2_gallery.jpg" alt="フォトギャラリー PHOTOGALLERY" width="770" height="210" /></h2>
		<ul class="galleryList p0b20">
			<?php
				$wp_query = new WP_Query();
				$param=array(
						'post_type'=>'gallery',
						'order' => 'DESC',
						'post_status'=>'publish',
						'posts_per_page' => '3',
						'paged' => $paged,
						);
				$wp_query->query($param);
				$i="0";
				if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
					$i++;
			?>
			<li>
				<h3><?php the_title();?></h3>
				<div class="galleryBox clearfix">
					<div class="imageGallery taC">

						<div id="slideshow<?php echo $i;?>" class="slideshow">
							<span id="caption<?php echo $i;?>" class="caption-container"></span>
						</div>

					</div>					
					<div id="thumbs<?php echo $i;?>">

						<ul class="thumbs thumbList<?php echo $i;?>">
						<?php
							if(get_field('gallery_img')):
							$j="0";
							while(has_sub_field('gallery_img')):
								$j++;
								$noMR="";
								if($j%7==0) $noMR="noMR";
							$img_url01=wp_get_attachment_image_src(get_sub_field('img'),'gallery01');
							$img_url02=wp_get_attachment_image_src(get_sub_field('img'),'gallery02');
						?>
							<li class="<?php echo $noMR;?>">
								<a title="<?php echo $img_url01[0];?>" class="thumb" name="leaf" ><img src="<?php echo $img_url02[0];?>" width="<?php echo $img_url02[1];?>" height="<?php echo $img_url02[2];?>" alt=""/></a>
								<span class="caption" style="width:<?php echo ($img_url01[1]-20);?>px !important"><?php the_sub_field('img_desc');?></span>
							</li>

							<?php endwhile;endif;?>
						</ul>
					</div>
				</div>
				<?php
				if(get_the_content() !=""){
				?>
				<div class="t30b0"><?php the_content();?></div>
				<?php
				}
				?>
			</li>
			<script type="text/javascript">
										$(function($) {
											var onMouseOutOpacity = 0.67;
											$('#thumbs<?php echo $i;?> ul li').opacityrollover({
												mouseOutOpacity:   onMouseOutOpacity,
												mouseOverOpacity:  1.0,
												fadeSpeed:         'fast',
												exemptionSelector: '.selected'
											});
											// Initialize Advanced Galleriffic Gallery
											var gallery = $('#thumbs<?php echo $i;?>').galleriffic({
												delay:                     2500,
												numThumbs:                 14,
												preloadAhead:              10,
												enableTopPager:            true,
												enableBottomPager:         true,
												maxPagesToShow:            14,
												imageContainerSel:         '#slideshow<?php echo $i;?>',
												controlsContainerSel:      '#controls',
												captionContainerSel:       '#caption<?php echo $i;?>',
												loadingContainerSel:       '#loading',
												renderSSControls:          true,
												renderNavControls:         false,
												playLinkText:              'Play Slideshow',
												pauseLinkText:             'Pause Slideshow',
												prevLinkText:              '&lsaquo; Previous Photo',
												nextLinkText:              'Next Photo &rsaquo;',
												nextPageLinkText:          'Next &rsaquo;',
												prevPageLinkText:          '&lsaquo; Prev',
												enableHistory:             false,
												autoStart:                 true,
												syncTransitions:           true,
												defaultTransitionDuration: 900,
												onSlideChange:             function(prevIndex, nextIndex) {
													// 'this' refers to the gallery, which is an extension of $('#thumbs')
													this.find('ul.thumbList<?php echo $i;?>').children()
														.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
														.eq(nextIndex).fadeTo('fast', 1.0);
												},
												onPageTransitionOut:       function(callback) {
													this.fadeTo('fast', 0.0, callback);
												},
												onPageTransitionIn:        function() {
													this.fadeTo('fast', 1.0);
												}
											});

										});
									</script>
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