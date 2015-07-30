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
        "name" => "FAQs",
        "singular_name" => "FAQ",
    );

    $args = array(
        "labels" => $labels,
        "description" => "FAQ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "faq", "with_front" => true),
        "query_var" => true,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/faqx16.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("faq", $args);

    $labels = array(
        "name" => "Company",
        "singular_name" => "Company",
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
        "rewrite" => array("slug" => "company", "with_front" => true),
        "query_var" => true,
    );
    register_post_type("company", $args);

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
        'id' => 'acf_company',
        'title' => 'Company',
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
                    'value' => 'company',
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
}
