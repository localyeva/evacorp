<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/MyFunctions.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize.php');
include_once(dirname(__FILE__) . '/cpt_acf_definitions.php');


@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');


// アイキャッチ画像作成
add_theme_support('post-thumbnails');

// 基本サイズ
//set_post_thumbnail_size(480, 150);
// Custom Size
add_image_size('img_re', 300, 260, true);
//Recommend
add_image_size('recommend01', 265, 187, true);
add_image_size('recommend02', 265, 68, false);
add_image_size('recommend03', 150, 150, false);
add_image_size('recommend04', 75, 75, false);
add_image_size('recommend05', 75, 20, false);
add_image_size('recommend06', 265, 999);
//Gallery
add_image_size('gallery01', 600, 400, false);
add_image_size('gallery02', 100, 100, true);

//Circle
add_image_size('circle01', 264, 184, true);

//result
add_image_size('result01', 325, 192, false);

//Staff
add_image_size('staff01', 162, 162, true);
add_image_size('staff02', 124, 124, true);
add_image_size('staff03', 224, 328, true);
add_image_size('staff04', 101, 101, true);

/* ---------------------------------------------------------------------------- */

function scripts() {
    if (is_page('contact')) {
        wp_enqueue_script('js-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.14.0', TRUE);
        wp_enqueue_script('js-contact', get_template_directory_uri() . '/js/contact.js', array('js-validate'), '1', TRUE);
    }
}

add_action('wp_print_scripts', 'scripts');

//function myStartSession() {
//    if (!session_id()) {
//        session_start();
//    }
//}
//
//add_action('init', 'myStartSession', 1);

/* ---------------------------------------------------------------------------- */
// paging
$option_posts_per_page = get_option('posts_per_page');
add_action('init', 'my_modify_posts_per_page', 0);

function my_modify_posts_per_page() {
    //add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

//login logo
function custom_login_logo() {
    echo '<style type="text/css">h1 a { background: url(' . get_bloginfo('template_directory') . '/images/logo.png) 50% 50% no-repeat !important; width:100% !important}</style>';
}

add_action('login_head', 'custom_login_logo');

// 管理画面サイドバーメニュー非表示
function remove_menus() {
    if (!current_user_can('level_9')) { //level9以下のユーザーの場合メニューをunsetする
        global $menu;
        unset($menu[2]); //ダッシュボード
        unset($menu[4]); //メニューの線1
        unset($menu[5]); //投稿
        unset($menu[15]); //リンク
        unset($menu[20]); //ページ
        unset($menu[25]); //コメント
        unset($menu[59]); //メニューの線2
        unset($menu[60]); //テーマ
        unset($menu[65]); //プラグイン
        unset($menu[70]); //プロフィール
        unset($menu[75]); //ツール
        unset($menu[80]); //設定
        unset($menu[90]); //メニューの線3
    }
}

add_action('admin_menu', 'remove_menus');

function custom_admin_footer() {
    echo ' お困りの際は<a href="mailto:nagoya@alive-web.co.jp" title="アライブ株式会社">アライブ株式会社</a>までお気軽にお問い合わせ下さい。TEL:052-201-2525';
}

add_filter('admin_footer_text', 'custom_admin_footer');

/* term drop down function */

function todo_restrict_manage_posts() {
    global $typenow;
    $args = array('public' => true, '_builtin' => false);
    $post_types = get_post_types($args);
    if (in_array($typenow, $post_types)) {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('カテゴリー '),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => @$_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}

function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow == 'edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if (isset($var)) {
                $term = get_term_by('id', $var, $tax_slug);
                $var = $term->slug;
            }
        }
    }
    return $query;
}

add_action('restrict_manage_posts', 'todo_restrict_manage_posts');
add_filter('parse_query', 'todo_convert_restrict');
/* term drop down function end */

//array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
// Custom post News
add_action('init', 'my_custom_news');

function my_custom_news() {
    $labels = array(
        'name' => _x('ニュース', 'post type general name'),
        'singular_name' => _x('ニュース', 'post type singular name'),
        'add_new' => _x('ニュースを追加', 'news'),
        'add_new_item' => __('ニュース記事を書く'),
        'edit_item' => __('ニュース記事を編集'),
        'new_item' => __('新しいニュース記事'),
        'view_item' => __('ニュース記事を見る'),
        'search_items' => __('ニュース記事を探す'),
        'not_found' => __('ニュース記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にニュース記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor'),
        'has_archive' => true
    );
    register_post_type('news', $args);
}

// Custom post Recommend
add_action('init', 'my_custom_recommend');

function my_custom_recommend() {
    $labels = array(
        'name' => _x('参加企業の声', 'post type general name'),
        'singular_name' => _x('参加企業の声', 'post type singular name'),
        'add_new' => _x('参加企業の声を追加', 'recommend'),
        'add_new_item' => __('参加企業の声を書く'),
        'edit_item' => __('参加企業の声の記事を編集'),
        'new_item' => __('新しい参加企業の声記事'),
        'view_item' => __('参加企業の声の記事を見る'),
        'search_items' => __('参加企業の声の記事を探す'),
        'not_found' => __('参加企業の声記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に参加企業の声の記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 7,
        'supports' => array('title'),
        'has_archive' => true
    );
    register_post_type('recommend', $args);
}

// Custom post Company/Staff
add_action('init', 'my_custom_staff');

function my_custom_staff() {
    $labels = array(
        'name' => _x('スタッフ紹介', 'post type general name'),
        'singular_name' => _x('スタッフ紹介', 'post type singular name'),
        'add_new' => _x('スタッフ紹介を追加', 'staff'),
        'add_new_item' => __('スタッフ紹介記事を書く'),
        'edit_item' => __('スタッフ紹介記事を編集'),
        'new_item' => __('新しいスタッフ紹介記事'),
        'view_item' => __('スタッフ紹介記事を見る'),
        'search_items' => __('スタッフ紹介記事を探す'),
        'not_found' => __('スタッフ紹介記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にスタッフ紹介記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'company/staff')
    );
    register_post_type('staff', $args);
}

// Staff category
add_action('init', 'create_staff_taxonomy', '0');

function create_staff_taxonomy() {
    $taxonomylabels = array(
        'name' => _x('staffcat', 'post type general name'),
        'singular_name' => _x('staffcat', 'post type singular name'),
        'search_items' => __('staffcat'),
        'all_items' => __('staffcat'),
        'parent_item' => __('Parent staffcat'),
        'parent_item_colon' => __('Parent staffcat:'),
        'edit_item' => __('staffcat記事を編集'),
        'menu_name' => __('カテゴリー'),
    );
    $args = array(
        'labels' => $taxonomylabels,
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'staff/cat')
    );
    register_taxonomy('staffcat', 'staff', $args);
}

// Custom post Company/Gallery
add_action('init', 'my_custom_gallery');

function my_custom_gallery() {
    $labels = array(
        'name' => _x('ギャラリー', 'post type general name'),
        'singular_name' => _x('ギャラリー', 'post type singular name'),
        'add_new' => _x('ギャラリーを追加', 'gallery'),
        'add_new_item' => __('ギャラリー記事を書く'),
        'edit_item' => __('ギャラリー記事を編集'),
        'new_item' => __('新しいギャラリー記事'),
        'view_item' => __('ギャラリー記事を見る'),
        'search_items' => __('ギャラリー記事を探す'),
        'not_found' => __('ギャラリー記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にギャラリー記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 9,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'company/gallery')
    );
    register_post_type('gallery', $args);
}

// Custom post Company/Movie
add_action('init', 'my_custom_movie');

function my_custom_movie() {
    $labels = array(
        'name' => _x('動画紹介', 'post type general name'),
        'singular_name' => _x('動画紹介', 'post type singular name'),
        'add_new' => _x('動画を追加', 'movie'),
        'add_new_item' => __('動画紹介記事を書く'),
        'edit_item' => __('動画紹介記事を編集'),
        'new_item' => __('新しい動画紹介記事'),
        'view_item' => __('動画紹介記事を見る'),
        'search_items' => __('動画紹介記事を探す'),
        'not_found' => __('動画紹介記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に動画紹介記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'company/movie')
    );
    register_post_type('movie', $args);
}

// Custom post Company/Circle
add_action('init', 'my_custom_circle');

function my_custom_circle() {
    $labels = array(
        'name' => _x('社内取り組み', 'post type general name'),
        'singular_name' => _x('社内取り組み', 'post type singular name'),
        'add_new' => _x('社内取り組みを追加', 'circle'),
        'add_new_item' => __('社内取り組み記事を書く'),
        'edit_item' => __('社内取り組み記事を編集'),
        'new_item' => __('新しい社内取り組み記事'),
        'view_item' => __('社内取り組み記事を見る'),
        'search_items' => __('社内取り組み記事を探す'),
        'not_found' => __('社内取り組み記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に社内取り組み記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 11,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'company/circle')
    );
    register_post_type('circle', $args);
}

// Custom post Service/labo_result
add_action('init', 'my_custom_labo_result');

function my_custom_labo_result() {
    $labels = array(
        'name' => _x('開発実績', 'post type general name'),
        'singular_name' => _x('開発実績', 'post type singular name'),
        'add_new' => _x('開発実績を追加', 'labo_result'),
        'add_new_item' => __('開発実績記事を書く'),
        'edit_item' => __('開発実績記事を編集'),
        'new_item' => __('新しい開発実績記事'),
        'view_item' => __('開発実績記事を見る'),
        'search_items' => __('開発実績記事を探す'),
        'not_found' => __('開発実績記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に開発実績記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 12,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'service/labo_result')
    );
    register_post_type('labo_result', $args);
}

// Custom post Service/bpo_result
add_action('init', 'my_custom_bpo_result');

function my_custom_bpo_result() {
    $labels = array(
        'name' => _x('BPO実績', 'post type general name'),
        'singular_name' => _x('BPO実績', 'post type singular name'),
        'add_new' => _x('BPO実績を追加', 'bpo_result'),
        'add_new_item' => __('BPO実績記事を書く'),
        'edit_item' => __('BPO実績記事を編集'),
        'new_item' => __('新しいBPO実績記事'),
        'view_item' => __('BPO実績記事を見る'),
        'search_items' => __('BPO実績記事を探す'),
        'not_found' => __('BPO実績記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にBPO実績記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 12,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'service/bpo_result')
    );
    register_post_type('bpo_result', $args);
}

// Custom post About_vietnam
add_action('init', 'my_custom_about_vietnam');

function my_custom_about_vietnam() {
    $labels = array(
        'name' => _x('ベトナムについて', 'post type general name'),
        'singular_name' => _x('ベトナムについて', 'post type singular name'),
        'add_new' => _x('ベトナムについてを追加', 'about_vietnam'),
        'add_new_item' => __('ベトナムについて記事を書く'),
        'edit_item' => __('ベトナムについての記事を編集'),
        'new_item' => __('新しいベトナムについて記事'),
        'view_item' => __('ベトナムについて記事を見る'),
        'search_items' => __('ベトナムについて記事を探す'),
        'not_found' => __('ベトナムについて記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にベトナムについて記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 13,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'about_vietnam')
    );
    register_post_type('about_vietnam', $args);
}

// About Viet Name  category
add_action('init', 'create_about_vietnamcat_taxonomy', '0');

function create_about_vietnamcat_taxonomy() {
    $taxonomylabels = array(
        'name' => _x('about_vietnamcat', 'post type general name'),
        'singular_name' => _x('about_vietnamcat', 'post type singular name'),
        'search_items' => __('about_vietnamcat'),
        'all_items' => __('about_vietnamcat'),
        'parent_item' => __('Parent about_vietnamcat'),
        'parent_item_colon' => __('Parent about_vietnamcat:'),
        'edit_item' => __('about_vietnamcat記事を編集'),
        'add_new_item' => __('カテゴリーを追加'),
        'menu_name' => __('カテゴリー'),
    );
    $args = array(
        'labels' => $taxonomylabels,
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'about_vietnam/cat')
    );
    register_taxonomy('about_vietnamcat', 'about_vietnam', $args);
}

// Custom post Recruit
add_action('init', 'my_custom_recruit');

function my_custom_recruit() {
    $labels = array(
        'name' => _x('求人情報', 'post type general name'),
        'singular_name' => _x('求人情報', 'post type singular name'),
        'add_new' => _x('求人情報を追加', 'about_vietnam'),
        'add_new_item' => __('求人情報記事を書く'),
        'edit_item' => __('求人情報の記事を編集'),
        'new_item' => __('新しい求人情報記事'),
        'view_item' => __('求人情報記事を見る'),
        'search_items' => __('求人情報記事を探す'),
        'not_found' => __('求人情報記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に求人情報記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 14,
        'supports' => array('title'),
        'has_archive' => true
    );
    register_post_type('recruit', $args);
}

// Custom post company/company_profile
add_action('init', 'my_custom_company_profile');

function my_custom_company_profile() {
    $labels = array(
        'name' => _x('会社概要', 'post type general name'),
        'singular_name' => _x('会社概要', 'post type singular name'),
        'add_new_item' => __('会社概要記事を書く'),
        'edit_item' => __('会社概要記事を編集'),
        'new_item' => __('新しい会社概要記事'),
        'view_item' => __('会社概要記事を見る'),
        'search_items' => __('会社概要記事を探す'),
        'not_found' => __('会社概要記事はありません'),
        'not_found_in_trash' => __('ゴミ箱に会社概要記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 12,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'company/company_profile')
    );
    register_post_type('company_profile', $args);
}

add_action('init', 'my_custom_requirements');

function my_custom_requirements() {
    $labels = array(
        'name' => _x('Requirements', 'post type general name'),
        'singular_name' => _x('Requirements', 'post type singular name'),
        'add_new' => _x('新しくrequirementsを書く', 'news'),
        'add_new_item' => __('requirements記事を書く'),
        'edit_item' => __('requirements記事を編集'),
        'new_item' => __('新しいrequirements記事'),
        'view_item' => __('requirements記事を見る'),
        'search_staff' => __('requirements記事を探す'),
        'not_found' => __('requirements記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にrequirements記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'has_archive' => true
    );
    register_post_type('requirements', $args);
}

/* ------------  Blog Staff page ------------ */

add_action('init', 'my_custom_faqrecruit');

function my_custom_faqrecruit() {
    $labels = array(
        'name' => _x('Faqrecruit', 'post type general name'),
        'singular_name' => _x('faqrecruit', 'post type singular name'),
        'add_new' => _x('新しくfaqrecruitを書く', 'news'),
        'add_new_item' => __('faqrecruit記事を書く'),
        'edit_item' => __('faqrecruit記事を編集'),
        'new_item' => __('新しいfaqrecruit記事'),
        'view_item' => __('faqrecruit記事を見る'),
        'search_staff' => __('faqrecruit記事を探す'),
        'not_found' => __('faqrecruit記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にfaqrecruit記事はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'has_archive' => true
    );
    register_post_type('faqrecruit', $args);
}

// make taxonomy
add_action('init', 'create_cat_taxonomy2', '0');

function create_cat_taxonomy2() {
    $taxonomylabels = array(
        'name' => _x('newscat', 'post type general name'),
        'singular_name' => _x('newscat', 'post type singular name'),
        'search_items' => __('newscat'),
        'all_items' => __('newscat'),
        'parent_item' => __('Parent Cat'),
        'parent_item_colon' => __('Parent Cat:'),
        'edit_item' => __('Cat記事を編集'),
        'add_new_item' => __('Cat記事を書く'),
        'menu_name' => __('categories'),
    );
    $args = array(
        'labels' => $taxonomylabels,
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faqcat2')
    );
    register_taxonomy('faqcat2', 'faqrecruit', $args);
}

/* ------------  End */
