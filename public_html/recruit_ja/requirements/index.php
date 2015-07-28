<?php include_once('/home/1705726298/evolable-asia/public_html/recruit_ja/app_config.php'); ?>
<?php include(APP_PATH .'/libs/header.php'); ?>
<?php include_once(APP_PATH_HOME.'wp-load.php');?>
<title>募集要項｜EVA求人特設サイト｜ベトナムで働くならEVOLABLE ASIA(エボラブルアジア)</title>
<meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイト。エボラブルアジアの求人募集要項ページです。" />
<meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/import.css" type="text/css" media="all" />
<link rel="icon" href="http://evolable.asia/common/img/ico/favicon.ico?20141124" type="image/vnd.microsoft.icon" />
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

<body id="requirements">
<?php include(APP_PATH .'/libs/header2.php'); ?>
<div id="container" class="clearfix"> 
  <!-- /container start -->
  <h2 class="taC mb30"><img src="<?php echo APP_URL; ?>img/requirements/h2.png" width="999" height="44" alt="募集要項"  /></h2>
  <!-- /mainContent start -->
  <div id="main">
<!--    <p class="taC mb40"><img src="<?php echo APP_URL; ?>img/requirements/banner.png" width="1000" height="275" alt=""  /></p>-->
    <ul class="recList">
     
	 
	 <?php
//$post_7 = get_post(1708); 
//echo $title = $post_7->post_title;
?> 
	 <?php 
	
				 $wp_query = new WP_Query();
           
			   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$param = array(
					'posts_per_page' => '6',
					'post_type' => 'requirements',
					'post_status' => 'publish',
					
					'paged' => $paged,
					'orderby' => 'post_date',
					'order' => 'DESC'
				);
				
				$i = 1;
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
			 $staffID = get_post_thumbnail_id($post->ID);
            $thumb_url = wp_get_attachment_image_src($staffID,'img_re');
			
		?>
	 
	 
	  <li>
        <p class="floatR"><img src="<?php echo $thumb_url[0];?>" alt=""  /></p>
        <div class="SLeft">
          <h3><span><?php echo the_title();?></span></h3>
          <div class="mb20">
		  	<?php echo get_field( "value01" );  ?>
		  
		  </div>
          <div class="SText">
            <dl>
				<?php if(get_field( "value2" ) !="") {?>
              <dt>給与</dt>
              <dd>	<?php echo get_field( "value2" );  ?></dd>
              <?php } ?>
			  
			  <?php if(get_field( "value_n01" ) !="") {?>
              <dt>勤務地</dt>
              <dd>	<?php echo get_field( "value_n01" );  ?></dd>
              <?php } ?>
			  
			  <?php if(get_field( "value03" ) !="") {?>
			  <dt>仕事内容</dt>
              <dd>	<?php echo get_field( "value03" );  ?></dd>
			  <?php } ?>
			  
			  
              <?php if(get_field( "value04" ) !="") {?>
			  <dt>推奨スキル</dt>
              <dd>	<?php echo get_field( "value04" );  ?></dd>
              <?php } ?>
			  
			   <?php if(get_field( "value04" ) !="") {?>
			  <dt>福利厚生</dt>
              <dd>	<?php echo get_field( "value05" );  ?></dd>
			  
			  <?php }?>
            </dl>
            <p class="taC"><a href="<?php echo APP_URL ?>contact?job=<?php echo the_title();?>"><img src="../img/requirements/btn01.png" width="199" height="50" class="opa" alt="応募フォーム"  /></a></p>
          </div>
        </div>
      </li>
      
	  <?php  $i++; endwhile; endif; wp_reset_query(); ?>
	 
	  
    </ul>
	
	      					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array( 'query' => $wp_query )); }  ?>

  </div>
  <!-- /container end --> 
</div>
<?php include(APP_PATH .'/libs/footer.php'); ?>
