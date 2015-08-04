<?php
/*
 * Author: KhangLe
 * Template Name: Company
 * 
 */
get_header();
?>

<section>
    <div class="keyvisual-company" style="background:url(<?php echo get_template_directory_uri() ?>/img/company/h2_company.jpg) no-repeat scroll center center / auto 100%;width: 778px;height: 208px;background-size: 100% 100%;">
        <!--        <div class="text">
                    <p class="lead main">
        <?php echo get_contact_text_1() ?>
                    </p>
                    <p class="lead">
        <?php echo get_contact_text_2() ?>
                    </p>
                </div>-->
    </div>

    <div class="container company">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'company-general',
                'posts_per_page' => '-1',
                'order' => 'DESC'
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()): $loop->the_post();
                ?>
                <div class="col-md-6 col-xs-12 inline-block">
                    <a href="<?php echo bloginfo('url') . '/' . get_field('link') ?>">
                        <div class="col-md-3">
                            <img class="img-responsive" width="150" src="<?php the_field('image') ?>"/>
                        </div>
                        <div class="col-md-9">
                            <h2><?php the_title() ?></h2>
                            <p><?php the_field('description') ?></p>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>