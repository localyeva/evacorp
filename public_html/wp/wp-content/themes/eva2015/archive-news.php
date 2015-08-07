<?php
/*
 * Author: KhangLe
 * Template Name: Arichive-News
 * 
 */
get_header();
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ul class="ul_news">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'news',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'posts_per_page' => '4',
                        'paged' => $paged,
                    );
                    $wp_query->query($param);
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <li>
                                <div class="txtNews" id="news<?php the_ID(); ?>">
                                    <h3>
                                        <span class="t0b5"><?php the_time('Y.m.d'); ?></span>
                                        <span class="fz18"><?php the_title(); ?></span>
                                    </h3>
                                </div>
                                <div class="descNews"><?php the_content(); ?></div>
                            </li>
                        <?php endwhile;
                    endif; ?>
                </ul>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                }; ?>

            </div>
        </div>
    </div>    
</section>

<?php get_footer(); ?>