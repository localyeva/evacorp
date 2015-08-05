<?php
/*
 * Author: KhangLe
 * Template Name: Company-Circle
 * 
 */
get_header();
?>

<section>

    <div class="container">
        <div class="row">

            <ul class="ul_circle">
                <?php
                $wp_query = new WP_Query();
                $param = array(
                    'post_type' => 'company-circle',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'posts_per_page' => '4',
                    'paged' => $paged,
                );
                $wp_query->query($param);
                if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                        $img_url = wp_get_attachment_image_src(get_field('img'), 'circle01');
                        ?>
                        <li>

                            <img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt=""/>
                            <div class="txtCircle">
                                <p><?php the_title(); ?></p>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php
                    endwhile;
                endif;
                
                wp_reset_postdata();
                ?>
            </ul>
            <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            };
            ?>

        </div>
    </div>

</section>


<?php
get_footer();
?>