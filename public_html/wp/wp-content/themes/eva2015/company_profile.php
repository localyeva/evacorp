<?php
/*
 * Author: KhangLe
 * Template Name: Company-Profile
 * 
 */
get_header();
?>

<section>

    <div class="container company-profile">

        <div class="company-info">
            <?php
            $wp_query = new WP_Query();
            $param = array(
                'post_type' => 'company-profile',
                'order' => 'DESC',
                'post_status' => 'publish',
                'posts_per_page' => '1',
                'paged' => $paged,
            );
            $wp_query->query($param);
            if ($wp_query->have_posts()):
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>

                    <table class="table table-responsive table-striped profileTable">
                        <tr>
                            <th>
                        <p>社名<span>Company name</span></p>
                        </th>
                        <td><?php the_field('name'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>所在地<span>Address</span></p>
                        </th>
                        <td><?php the_field('location'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>電話番号(Phone)</p>
                        </th>
                        <td><?php the_field('phone_number'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>FAX</p>
                        </th>
                        <td><?php the_field('fax'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>役員<span>Office</span></p>
                        </th>
                        <td><?php the_field('officer'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>設立<span>Date of establishment</span></p>
                        </th>
                        <td><?php the_field('establishment'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>資本金<span>Capital stock</span></p>
                        </th>
                        <td><?php the_field('Capital'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>事業内容<span>Business Description</span></p>
                        </th>
                        <td><?php the_field('desc'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>ライセンスNo.<span>License No.</span></p>
                        </th>
                        <td><?php the_field('licence'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>従業員数<span>Number of Employees</span></p>
                        </th>
                        <td><?php the_field('staff'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>主要取引銀行<span>Main Bank</span></p>
                        </th>
                        <td><?php the_field('bank'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>経営理念<span>Management Principles</span></p>
                        </th>
                        <td><?php the_field('principles'); ?></td>
                        </tr>
                    </table>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
        
    </div>
</section>



<?php get_footer() ?>