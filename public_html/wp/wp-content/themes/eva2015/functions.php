<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/MyTheme_Customize.php');

function scripts() {
    if (is_page('contact')) {
        wp_enqueue_script('js-contact', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.14.0', TRUE);
    }
}

add_action('wp_print_scripts', 'scripts');
