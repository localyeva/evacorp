<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
<div id='inline_content' class="lbStaff clearfix">
	<?php
		$getID=$_GET['id'];
		$wp_query = new WP_Query();
		$param=array(
				'post_type'=>'staff',
				'order' => 'DESC',
				'posts_per_page' => '-1',
				'p' =>$getID,
				);
		$wp_query->query($param);
		if($wp_query->have_posts()):$wp_query->the_post();
			$img_url04=wp_get_attachment_image_src(get_field('image'),'staff03');

	if($img_url04){?>
	<img src="<?php echo $img_url04[0];?>" width="<?php echo $img_url04[1];?>" height="<?php echo $img_url04[2];?>" alt="<?php the_title(); ?>" class="floatL mr20"/>

	<?php }

	?>

	<div class="descStaff">
		<p id="test"><?php the_title();?></p>
		<p><?php
					$find[] = '<br />';
					$replace[] = '';
					$title = str_replace($find, $replace, get_field('staff_role'));
					print_r($title);
					//the_field('staff_role');?></p>
		<div><?php the_content();?></div>
	</div>
	<?php endif;?>
</div>