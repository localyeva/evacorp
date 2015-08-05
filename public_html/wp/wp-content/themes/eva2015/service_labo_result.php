<?php
/*
 * Author: KhangLe
 * Template Name: Service-Labo-Result
 * 
 */

get_header();
?>

<section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                 
                <h2 class="t0b35"><img src="<?php echo get_template_directory_uri() ?>/img/service/labo_result/h2_resultlabo.jpg" width="770" height="208" alt="開発実績 LABO RESULTS"/></h2>
                <ul class="ul_result p0b20">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'labo-result',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'posts_per_page' => '4',
                        'paged' => $paged,
                    );
                    $wp_query->query($param);
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $img_url = wp_get_attachment_image_src(get_field('img'), 'result01');
                            ?>
                            <li>
                                <h3><?php the_field('slogan'); ?></h3>
                                <p><?php the_title(); ?></p>
                                <div class="txtResult clearfix">
                                    <?php if ($img_url) { ?>
                                        <img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php the_title(); ?>"/>
                                    <?php } ?>
                                    <div><?php the_content(); ?></div>
                                </div>
                            </li>
                        <?php endwhile;
                    endif; ?>
                </ul>
                <?php wp_reset_postdata() ?>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                }; ?>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>