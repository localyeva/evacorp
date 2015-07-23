<?php include_once('/home/1705726298/evolable-asia/public_html/recruit_ja/app_config.php'); ?>
<?php include(APP_PATH .'/libs/header.php'); ?>
<?php include_once(APP_PATH_HOME.'wp-load.php');

 ?>

<title>よくある質問｜EVA求人特設サイト｜ベトナムで働くならEVOLABLE ASIA(エボラブルアジア)</title>
<meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイト。エボラブルアジアやインターン制度、ベトナムでの生活についてのご質問にお答えしています。" />
<meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン" />
<link rel="icon" href="/common/img/icon/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/import.css" type="text/css" media="all" />
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

<body id="">
<?php include(APP_PATH .'/libs/header2_test.php'); ?>
<div id="container" class="clearfix"> 
	<!-- /container start -->
	<h2 class="mb30"><img src="../img/faq/h2_faq.png" width="990" height="43" alt="よくある質問" /></h2>
	<p class="mb30"><img src="../img/faq/img_demo.png" width="1000" height="275" alt="よくある質問" /></p>
	<div class="clearfix mb70">	
		<?php
				$args = array(
						'post_type'                => 'faqrecruit',
						'orderby'                  => 'id',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'taxonomy'                 => 'faqcat2',
						'pad_counts'               => false );
					
				$categories = get_categories( $args );
				$i = 1;
				foreach ($categories as $cat) { ?>	
			<?php if ($i%2==0) { echo "<div class='rightFaq'>";} else { echo "<div class='leftFaq'>"; } ?>
			<h3 class="h3_faq"><a href="#anchor01"><?php  echo $cat->name; ?></a></h3>
			<ul class="lstFaq">
			
 <?php 
		   $wp_query = new WP_Query();
		   $param=array(
				   'post_type'=>'faqrecruit',
				   'order' => 'DESC',
				   'posts_per_page' => '-1',
				   'tax_query' => array(
					   array(
						   'taxonomy' => 'faqcat2',
						   'field' => 'term_id',
						   'terms' =>  $cat->term_id
						   )
					   )
				   );
				
				
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
			 
?>
	
<li><a href="#<?php echo $post->ID;?>"><?php if(mb_strlen($post->post_title)>30) { $cont= mb_substr($post->post_title,0,30) ; echo strip_tags($cont. ･･･ );} else {echo strip_tags($post->post_title);}?></a></li>
			
			<?php 
					
					endwhile; endif; wp_reset_query(); ?>
			</ul>
				</div><?php  if ($i%2==0) {echo "<div style='clear:both;'></div>";}?>
			<?php $i ++;} ?>
		
	</div>
<?php
					$args = array(
						'post_type'                => 'faqrecruit',
						'orderby'                  => 'id',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'taxonomy'                 => 'faqcat2',
						'pad_counts'               => false );
					
					$categories = get_categories( $args );
					$i = 1;
					foreach ($categories as $cat)
					{		
			?>	
	
	<h4 class="h4_faq" id="anchor01"><?php  echo $cat->name; ?></h4>
	<ul class="lstFaq02">
		
		 <?php 
		   $wp_query = new WP_Query();
		   $param=array(
				   'post_type'=>'faqrecruit',
				   'order' => 'DESC',
				   'posts_per_page' => '-1',
				   'tax_query' => array(
					   array(
						   'taxonomy' => 'faqcat2',
						   'field' => 'term_id',
						   'terms' =>  $cat->term_id
						   )
					   )
				   );
				
				
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
			 
?>
		
		<li id="<?php echo $post->ID;?>">
			<div class="wrapQues">
				<p class="question"><?php the_title(); ?></p>
			</div>
			<div class="answer">
				<p><?php the_content(); ?></p>
			</div>
		</li>
		
		
	<?php endwhile; endif; wp_reset_query(); ?>	
		
	</ul>
	<?php $i ++;} ?>
	<?php include(APP_PATH .'/libs/contactBox.php'); ?>

	<!-- /container end --> 
</div>
<?php include(APP_PATH .'/libs/footer.php'); ?>
