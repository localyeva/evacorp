<?php get_header(); ?>

<body id="lower">
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
<!-- //FACE BOOK end -->

<?php include(TEMPLATEPATH . '/header2.php'); ?>

	<!-- mainImg start -->
    <div id="mainImgLow">
        <div id="mainImgLowInner">
            <div class="mainImg<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php echo post_custom('directory'); ?><?php endwhile; endif; ?>"><img src="<?php echo APP_URL; ?>img/<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php echo post_custom('directory'); ?><?php endwhile; endif; ?>/mainImg_<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php echo post_custom('directory'); ?><?php endwhile; endif; ?>01.png" alt="<?php the_title(); ?>" /></div>
        </div>
    </div>
    <!-- /mainImg end -->

    <div id="bread_sns" class="clearfix">
	    <ul id="bread">
        	<li class="home"><a href="/">HOME</a></li>
            <li class="next">&gt; <?php the_title(); ?></li>
        </ul>
        <div id="SNSlow">
	        <div class="iineBtn-tw">
	            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">Tweet</a>
	            <script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	        </div>
	        <div class="iineBtn-fb">
	            <fb:like href="http://sunwaspa.jp/<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php echo post_custom('directory'); ?><?php endwhile; endif; ?>" send="false" layout="button_count" width="120" show_faces="false"></fb:like>
	        </div>
	    </div>
    </div>

	<!-- /container start -->
	<div id="container" class="clearfix">


		<!-- /maincontent start -->
		<div id="mainContent">

		<?php the_content(); ?>

		</div>
		<!-- /maincontent end -->



		<?php get_sidebar(); ?>
	</div>
	<!-- /container end -->

<?php get_footer(); ?>
</body>
</html>