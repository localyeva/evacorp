<?php
/*
 * Author: KhangLe
 * Template Name: Single Staff
 * 
 */

get_header();
?>

<section>
    <div class="container">
        <?php
        $term = get_the_terms($post->ID, 'staffcat');
        echo $term[0]->name;
        ?>

        <img src="<?php echo the_field('image') ?>" alt="<?php the_title(); ?>" class="img-responsive"/>

        <div class="descStaff">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <p id="test"><?php the_title() ?></p>
                    <p><?php echo get_field('staff_role') ?></p>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>