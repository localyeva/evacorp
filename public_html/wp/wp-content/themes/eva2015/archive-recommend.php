<?php
/*
 * Author: KhangLe
 * Template Name: Archive-Recommend
 */
get_header();
?>

<section>

    <div class="container">

        <ul class="ul_rec p0b30">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => '6',
                'post_type' => 'recommend',
                'post_status' => 'publish',
                'paged' => $paged,
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => 'faq',
                        'value' => 0,
                        'type' => 'NUMERIC',
                        'compare' => '>'
                    )
                )
            );
            $loop = new WP_Query($args);

            if ($loop->have_posts()):
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <li class="clearfix" id="rec<?php the_ID(); ?>">

                        <p class="imgRec taC" style="width:265px;">
                            <img src="<?php echo get_field('comp_img') ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                            <br />
                            <a href="<?php get_field('comLink') ?>" target="_blank">
                                <img src="<?php echo get_field('comp_logo') ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                            </a>
                        </p>

                        <div class="cntRec">
                            <p class="fz16 fwB line20"><?php the_field('comp_slogan'); ?></p>
                            <p class="fz14 fwB"><?php the_title(); ?></p>
                            <div>
                                <?php
                                // start advanced custom fields repeater
                                if (have_rows('faq')):
                                    while (have_rows('faq')): the_row();
                                        ?>
                                        <p class="fwB fz15"><?php echo get_sub_field('question') ?></p>
                                        <div class="t10b20"><?php echo get_sub_field('answer') ?></div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </li>

                    <?php
                endwhile;
            endif;
            //
            ?>
        </ul>

        <div>
            <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $loop));
                wp_reset_postdata();
            };
            ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>