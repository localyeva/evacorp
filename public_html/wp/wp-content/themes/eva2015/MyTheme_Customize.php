<?php

/*
 * Author: KhangLe
 * 
 * 
 */

function theme_customize_register($wp_customize) {
    
}

add_action('customize_register', 'theme_customize_register');

//css generate
function generate_css() {
    ?>
    <style>

    </style>
<?php

}

add_action('wp_head', 'generate_css');

?>