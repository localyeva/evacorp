<?php

/*
 * This file is custom post type, custom taxonomy and custom fields
 * definition file.
 * 
 * Exported from CPT UI & Advanced Custom Fields
 */

/* ---------------------------------------------------------------------------- */
/* post type definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_cpts() {
    $labels = array(
        "name" => "FAQ",
        "singular_name" => "FAQ",
        "menu_name" => "FAQs",
    );

    $args = array(
        "labels" => $labels,
        "description" => "FAQ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "faq", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h1.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("faq", $args);

    $labels = array(
        "name" => "Company General",
        "singular_name" => "Company General",
        "menu_name" => "会社全般",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company-general", "with_front" => true),
        "query_var" => true,
        "menu_position" => 27,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h2.png',
    );
    register_post_type("company-general", $args);

    $labels = array(
        "name" => "Company Profile",
        "singular_name" => "Company Profile",
        "menu_name" => "会社概要",
        "add_new_item" => "会社概要記事を書く",
        "edit_item" => "会社概要記事を編集",
        "new_item" => "新しい会社概要記事",
        "view_item" => "会社概要記事を見る",
        "search_items" => "会社概要記事を探す",
        "not_found" => "会社概要記事はありません",
        "not_found_in_trash" => "ゴミ箱に会社概要記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company-profile", "with_front" => true),
        "query_var" => true,
        "menu_position" => 28,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h3.png',
    );
    register_post_type("company-profile", $args);

    $labels = array(
        "name" => "Company Staff",
        "singular_name" => "Company Staff",
        "menu_name" => "スタッフ紹介",
        "add_new" => "スタッフ紹介を追加",
        "add_new_item" => "スタッフ紹介記事を書く",
        "edit_item" => "スタッフ紹介記事を編集",
        "new_item" => "新しいスタッフ紹介記事",
        "view_item" => "スタッフ紹介記事を見る",
        "search_items" => "スタッフ紹介記事を探す",
        "not_found" => "スタッフ紹介記事はありません",
        "not_found_in_trash" => "ゴミ箱にスタッフ紹介記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company/staff", "with_front" => true),
        "query_var" => true,
        "menu_position" => 29,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h4.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("company-staff", $args);

    $labels = array(
        "name" => "Company Circle",
        "singular_name" => "Company Circle",
        "menu_name" => "社内取り組み",
        "add_new" => "社内取り組みを追加",
        "add_new_item" => "社内取り組み記事を書く",
        "edit_item" => "社内取り組み記事を編集",
        "new_item" => "新しい社内取り組み記事",
        "view_item" => "社内取り組み記事を見る",
        "search_items" => "社内取り組み記事を探す",
        "not_found" => "社内取り組み記事はありません",
        "not_found_in_trash" => "ゴミ箱に社内取り組み記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company/circle", "with_front" => true),
        "query_var" => true,
        "menu_position" => 30,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h5.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("company-circle", $args);

    $labels = array(
        "name" => "Labo Result",
        "singular_name" => "Labo Result",
        "menu_name" => "開発実績",
        "add_new" => "開発実績を追加",
        "add_new_item" => "開発実績記事を書く",
        "edit_item" => "開発実績記事を編集",
        "new_item" => "新しい開発実績記事",
        "view_item" => "開発実績記事を見る",
        "search_items" => "開発実績記事を探す",
        "not_found" => "開発実績記事はありません",
        "not_found_in_trash" => "ゴミ箱に開発実績記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service/labo-result", "with_front" => true),
        "query_var" => true,
        "menu_position" => 31,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h6.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("labo-result", $args);

    $labels = array(
        "name" => "BPO result",
        "singular_name" => "BPO result",
        "menu_name" => "BPO実績",
        "add_new" => "BPO実績を追加",
        "add_new_item" => "BPO実績記事を書く",
        "edit_item" => "BPO実績記事を編集",
        "new_item" => "新しいBPO実績記事",
        "view_item" => "BPO実績記事を見る",
        "search_items" => "BPO実績記事を探す",
        "not_found" => "BPO実績記事はありません",
        "not_found_in_trash" => "ゴミ箱にBPO実績記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service/bpo-result", "with_front" => true),
        "query_var" => true,
        "menu_position" => 32,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h7.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("bpo-result", $args);

    $labels = array(
        "name" => "Recommend",
        "singular_name" => "Recommend",
        "menu_name" => "参加企業の声",
        "add_new" => "参加企業の声を追加",
        "add_new_item" => "参加企業の声を書く",
        "edit_item" => "参加企業の声の記事を編集",
        "new_item" => "新しい参加企業の声記事",
        "view_item" => "参加企業の声の記事を見る",
        "search_items" => "参加企業の声の記事を探す",
        "not_found" => "参加企業の声記事はありません",
        "not_found_in_trash" => "ゴミ箱に参加企業の声の記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "recommend", "with_front" => true),
        "query_var" => true,
        "menu_position" => 33,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h8.png',
        "supports" => array("title"),
    );
    register_post_type("recommend", $args);

    $labels = array(
        "name" => "News",
        "singular_name" => "News",
        "menu_name" => "ニュース",
        "add_new" => "ニュースを追加",
        "add_new_item" => "ニュース記事を書く",
        "edit_item" => "ニュース記事を編集",
        "new_item" => "新しいニュース記事",
        "view_item" => "ニュース記事を見る",
        "search_items" => "ニュース記事を探す",
        "not_found" => "ニュース記事はありません",
        "not_found_in_trash" => "ゴミ箱にニュース記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "news", "with_front" => true),
        "query_var" => true,
        "menu_position" => 34,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h9.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("news", $args);

// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* taxonomy definitions */
/* ---------------------------------------------------------------------------- */

add_action('init', 'cptui_register_my_taxes');

function cptui_register_my_taxes() {

    $labels = array(
        "name" => "FAQ Category",
        "label" => "FAQ Category",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
//        'has_archive' => true,
        "label" => "FAQ Category",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'faqcat', 'with_front' => true),
        "show_admin_column" => false,
    );
    register_taxonomy("faqcat", array("faq"), $args);

    $labels = array(
        "name" => "staffcat",
        "label" => "Staff Category",
        "menu_name" => "カテゴリー",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "label" => "Staff Category",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'staffcat', 'with_front' => true),
        "show_admin_column" => false,
    );
    register_taxonomy("staffcat", array("company-staff"), $args);

// End cptui_register_my_taxes
}

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */

if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_faq',
        'title' => 'FAQ',
        'fields' => array(
            array(
                'key' => 'field_55b8829ab0834',
                'label' => 'Question',
                'name' => 'question',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55b8833bb0835',
                'label' => 'Answer',
                'name' => 'answer',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'faq',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-general',
        'title' => 'Company General',
        'fields' => array(
            array(
                'key' => 'field_55b9d2928b020',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55b9d2b18b021',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55b9d34c8b022',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-general',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-profile',
        'title' => 'Company Profile',
        'fields' => array(
            array(
                'key' => 'field_55c0283510150',
                'label' => '社名',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '社名をいれてください',
                'required' => 1,
                'default_value' => 'EVOLABLE ASIA Co., Ltd',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02a5d361f8',
                'label' => '所在地',
                'name' => 'location',
                'type' => 'textarea',
                'instructions' => '所在地をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：4F Saigon Finance Center, 9 Dinh Tien Hoang Street, District 1, HCMC
	ホーチミン支店：14F GOLDEN TOWER, 6 Nguyen Thi Minh Khai Street,District1, HCMC
	ハ　ノ　イ支店：9F Viet A Building, Duy Tan Street, Cau Giay District, Ha Noi',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02a83361f9',
                'label' => '電話番号',
                'name' => 'phone_number',
                'type' => 'textarea',
                'instructions' => '電話番号をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：+84-8(39111489)
	ハ　ノ　イ支店：+84-4(37957577), +84-4(37957578), +84-4(37957579)',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02aa6361fa',
                'label' => 'FAX',
                'name' => 'fax',
                'type' => 'textarea',
                'instructions' => 'FAX番号をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：+84-8(39118767)
	ハ　ノ　イ支店：+84-4(37957580)',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02ad2361fb',
                'label' => '役員',
                'name' => 'officer',
                'type' => 'textarea',
                'instructions' => '役員をいれてください',
                'required' => 1,
                'default_value' => '代表取締役社長　薛 悠司',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02ba4361fc',
                'label' => '設立',
                'name' => 'establishment',
                'type' => 'text',
                'instructions' => '設立年月日をいれてください',
                'required' => 1,
                'default_value' => '2012年3月15日',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02be63b6ca',
                'label' => '資本金',
                'name' => 'Capital',
                'type' => 'text',
                'instructions' => '資本金をいれてください',
                'required' => 1,
                'default_value' => '20万米ドル',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02c063b6cb',
                'label' => '事業内容',
                'name' => 'desc',
                'type' => 'text',
                'instructions' => '事業内容をいれてください',
                'required' => 1,
                'default_value' => 'ITオフショア開発事業・BPO（ビジネスプロセスアウトソーシング）事業',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02c303b6cc',
                'label' => 'ライセンスNo.',
                'name' => 'licence',
                'type' => 'textarea',
                'instructions' => 'ライセンスナンバーをいれてください',
                'required' => 1,
                'default_value' => 412023000388,
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02f0478ff5',
                'label' => '従業員数',
                'name' => 'staff',
                'type' => 'text',
                'instructions' => '従業員数をいれてください',
                'required' => 1,
                'default_value' => '496名（ホーチミン450名+ハノイ46名　※2015年05月04日現在）',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02f3278ff6',
                'label' => '主要取引銀行',
                'name' => 'bank',
                'type' => 'textarea',
                'instructions' => '主要取引銀行を入力してください',
                'required' => 1,
                'default_value' => 'みずほ銀行
	Bangkok bank',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02f5778ff7',
                'label' => '経営理念',
                'name' => 'principles',
                'type' => 'text',
                'instructions' => '経営理念をいれてください',
                'required' => 1,
                'default_value' => 'アジアを代表する開発・運用チームをつくる',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-profile',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-staff',
        'title' => 'Company Staff',
        'fields' => array(
            array(
                'key' => 'field_55c042da61d5b',
                'label' => 'スタッフ役職',
                'name' => 'staff_role',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c0539061d5c',
                'label' => 'スタッフ画像',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'スタッフ画像をアップロードしてください',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c0541861d5d',
                'label' => 'スタッフ画像 02',
                'name' => 'image02',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c0543161d5e',
                'label' => '社員番号',
                'name' => 'staff_number',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-staff',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'excerpt',
                1 => 'custom_fields',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'slug',
                6 => 'author',
                7 => 'format',
                8 => 'featured_image',
                9 => 'categories',
                10 => 'tags',
                11 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-circle',
        'title' => 'Company Circle',
        'fields' => array(
            array(
                'key' => 'field_55c181bd9aaed',
                'label' => '画像',
                'name' => 'img',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-circle',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_recommend',
        'title' => 'Recommend',
        'fields' => array(
            array(
                'key' => 'field_55c2daeb6523b',
                'label' => 'サブタイトル',
                'name' => 'comp_slogan',
                'type' => 'textarea',
                'instructions' => 'サブタイトル、コピーをいれてください',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c2db056523c',
                'label' => '画像',
                'name' => 'comp_img',
                'type' => 'image',
                'instructions' => '画像をアップロードしてください',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c2db1c6523d',
                'label' => '企業ロゴ',
                'name' => 'comp_logo',
                'type' => 'image',
                'instructions' => '企業ロゴをいれてください',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c2db346523e',
                'label' => '企業リンク',
                'name' => 'comLink',
                'type' => 'text',
                'instructions' => '参加企業へのリンクをいれてください',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c2db4b6523f',
                'label' => 'FAQ',
                'name' => 'faq',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_55c2db5c65240',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_55c2db7765241',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'wysiwyg',
                        'column_width' => '',
                        'default_value' => '',
                        'toolbar' => 'full',
                        'media_upload' => 'yes',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'faqを追加',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'recommend',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}
