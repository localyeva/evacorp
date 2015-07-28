<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php get_header(); ?>
<title>スタッフ紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのスタッフ紹介ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/colorBox.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="スタッフ紹介｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
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
			<li>スタッフ紹介</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/company/staff/h2_staff.png" width="769" height="208" alt="スタッフ紹介 STAFF"/></h2>
		<div class="staffBox p0b20">

			<ul class="clearfix ul_staff01">
				<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'staff',
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'meta_key' => 'staff_number',
							'posts_per_page' => '-1',
							'tax_query' => array(
								array(
									'taxonomy' => 'staffcat',
									'field' => 'slug',
									'terms' => 'manager'
									)
								)
							);
					$wp_query->query($param);
					$count="";
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						$count++;
						$img_url01=wp_get_attachment_image_src(get_field('image'),'staff01');
						$img_url012=wp_get_attachment_image_src(get_field('image02'),'staff01');
				?>
				<li>
					<p class="photoStaff"><a href="<?php bloginfo('template_url'); ?>/lightBox.php?id=<?php echo get_the_ID();?>">

					<?php if($img_url01){?>
						<img src="<?php echo $img_url01[0];?>" width="<?php echo $img_url01[1];?>" height="<?php echo $img_url01[2];?>" alt="" <?php if($img_url012){?> onMouseOver="this.src='<?php echo $img_url012[0];?>'" onMouseOut="this.src='<?php echo $img_url01[0];?>'" <?php }?>/>

					<?php }
					else {
						echo '<img src="<?php echo APP_URL; ?>img/company/staff/img_noPhoto01.png" width="162 height="162" alt=""/>';
					}?>


					</a></p>
					<?php the_title();?><br />
					<a href="<?php bloginfo('template_url'); ?>/lightBox.php?id=<?php echo get_the_ID();?>"><?php the_field('staff_role');?></a>
				</li>
				<?php
					if($count%4==0){
						echo '</ul><ul class="clearfix ul_staff01">';
					}
					endwhile;endif;
				?>
			</ul>

			<ul class="clearfix ul_staff02">
				<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'staff',
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'meta_key' => 'staff_number',
							'posts_per_page' => '-1',
							'tax_query' => array(
								array(
									'taxonomy' => 'staffcat',
									'field' => 'slug',
									'terms' => 'staff-works'
									)
								)
							);
					$wp_query->query($param);
					$count="";
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						$count++;
						$img_url02=wp_get_attachment_image_src(get_field('image'),'staff02');
						$img_url022=wp_get_attachment_image_src(get_field('image02'),'staff02');
				?>
				<li>
					<p class="photoStaff">


					<?php if($img_url02){?>
						<img src="<?php echo $img_url02[0];?>" width="<?php echo $img_url02[1];?>" height="<?php echo $img_url02[2];?>" alt="" <?php if($img_url022){?>onMouseOver="this.src='<?php echo $img_url022[0];?>'" onMouseOut="this.src='<?php echo $img_url02[0];?>'" <?php }?>/>

					<?php }
					else {
						echo '<img src="<?php echo APP_URL; ?>img/company/staff/img_noPhoto02.png" width="124" height="124" alt=""/>';
					}?>


					</p>
					<?php the_title();?><br />

					<?php
					$find[] = '<br />';
					$replace[] = '';
					$title = str_replace($find, $replace, get_field('staff_role'));
					print_r($title);
					//the_field('staff_role');?>
				</li>
				<?php
					if($count%5==0){
						echo '</ul><ul class="clearfix ul_staff02">';
					}
					endwhile;endif;
				?>
			</ul>

			<ul class="clearfix ul_staff02 ul_staff03">
				<?php
					$wp_query = new WP_Query();
					$param=array(
							'post_type'=>'staff',
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'meta_key' => 'staff_number',
							'posts_per_page' => '-1',
							'tax_query' => array(
								array(
									'taxonomy' => 'staffcat',
									'field' => 'slug',
									'terms' => 'other-staff'
									)
								)
							);
					$wp_query->query($param);
					$count="";
					if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
						$count++;
						$img_url03=wp_get_attachment_image_src(get_field('image'),'staff04');
						$img_url032=wp_get_attachment_image_src(get_field('image02'),'staff04');
				?>
				<li>
					<p class="photoStaff">

					<?php if($img_url03){?>
						<img src="<?php echo $img_url03[0];?>" width="<?php echo $img_url03[1];?>" height="<?php echo $img_url03[2];?>" alt="" <?php if($img_url032){?>onMouseOver="this.src='<?php echo $img_url032[0];?>'" onMouseOut="this.src='<?php echo $img_url03[0];?>'" <?php }?>/>

					<?php }
					else {
						echo '<img src="<?php echo APP_URL; ?>img/company/staff/img_noPhoto02.png" width="101" height="101" alt=""/>';
					}?>

					</p>
					<?php the_title();?><br />

					<?php
					$find[] = '<br />';
					$replace[] = '';
					$title = str_replace($find, $replace, get_field('staff_role'));
					print_r($title);
					//the_field('staff_role');?>
				</li>
				<?php
					if($count%6==0){
						echo '</ul><ul class="clearfix ul_staff02 ul_staff03">';
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(function(){
		$(".ul_staff01 li a").colorbox();
	});
</script>
</body>
</html>