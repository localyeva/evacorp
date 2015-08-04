<?php
/*
 * Author: KhangLe
 * Template Name: Archive-Company-Staff
 * 
 */
get_header();
?>

<section>
    <div class="container company-staff">
        <div class="row">
            <div class="col-md-12">

                <ul class="inline-block ul_staff01">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'manager'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url01 = wp_get_attachment_image_src(get_field('image'), 'staff01');
                            $img_url012 = wp_get_attachment_image_src(get_field('image02'), 'staff01');
                            ?>
                            <li  class="inline-block">
                                <p class="photoStaff"><a href="<?php echo get_permalink(get_the_ID()) ?>">

                                        <?php if ($img_url01) { ?>
                                            <img src="<?php echo $img_url01[0]; ?>" width="<?php echo $img_url01[1]; ?>" height="<?php echo $img_url01[2]; ?>" alt="" <?php if ($img_url012) { ?> onMouseOver="this.src = '<?php echo $img_url012[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url01[0]; ?>'" <?php } ?>/>

                                            <?php
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto01.png" width="162 height="162" alt=""/>';
                                        }
                                        ?>


                                    </a></p>
                                <?php the_title(); ?><br />
                                <a href="<?php echo get_permalink(get_the_ID()) ?>"><?php the_field('staff_role'); ?></a>
                            </li>
                            <?php
                            if ($count % 4 == 0) {
                                echo '</ul><ul class="clearfix ul_staff01">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>

                <ul class="">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'staff-works'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url02 = wp_get_attachment_image_src(get_field('image'), 'staff02');
                            $img_url022 = wp_get_attachment_image_src(get_field('image02'), 'staff02');
                            ?>
                            <li class="inline-block">
                                <p class="photoStaff">


                                    <?php if ($img_url02) { ?>
                                        <img src="<?php echo $img_url02[0]; ?>" width="<?php echo $img_url02[1]; ?>" height="<?php echo $img_url02[2]; ?>" alt="" <?php if ($img_url022) { ?>onMouseOver="this.src = '<?php echo $img_url022[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url02[0]; ?>'" <?php } ?>/>

                                        <?php
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto02.png" width="124" height="124" alt=""/>';
                                    }
                                    ?>


                                </p>
                                <?php the_title(); ?><br />

                                <?php
                                $find[] = '<br />';
                                $replace[] = '';
                                $title = str_replace($find, $replace, get_field('staff_role'));
                                print_r($title);
                                //the_field('staff_role');
                                ?>
                            </li>
                            <?php
                            if ($count % 5 == 0) {
                                echo '</ul><ul class="clearfix ul_staff02">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>

                <ul class="">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'other-staff'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url03 = wp_get_attachment_image_src(get_field('image'), 'staff04');
                            $img_url032 = wp_get_attachment_image_src(get_field('image02'), 'staff04');
                            ?>
                            <li class="inline-block">
                                <p class="photoStaff">

                                    <?php if ($img_url03) { ?>
                                        <img src="<?php echo $img_url03[0]; ?>" width="<?php echo $img_url03[1]; ?>" height="<?php echo $img_url03[2]; ?>" alt="" <?php if ($img_url032) { ?>onMouseOver="this.src = '<?php echo $img_url032[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url03[0]; ?>'" <?php } ?>/>

                                        <?php
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto02.png" width="101" height="101" alt=""/>';
                                    }
                                    ?>

                                </p>
                                <?php the_title(); ?><br />

                                <?php
                                $find[] = '<br />';
                                $replace[] = '';
                                $title = str_replace($find, $replace, get_field('staff_role'));
                                print_r($title);
                                //the_field('staff_role');
                                ?>
                            </li>
                            <?php
                            if ($count % 6 == 0) {
                                echo '</ul><ul class="clearfix ul_staff02 ul_staff03">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- /maincontent end -->
        </div>

        <!-- /container end -->
    </div>

</section>

<?php
get_footer();
?>