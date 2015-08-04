<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function theme_customize_register($wp_customize) {

    /* ADD SECTION */
    /* CONTACT */
    $wp_customize->add_section('contact', array(
        'title' => __('CONTACT'),
        'priority' => 20,
    ));
    
    /* GREETING */
    $wp_customize->add_section('greeting', array(
        'title' => __('GREETING'),
        'priority' => 21,
    ));
    

    /* ADD SETTING & CONTROL */
    /* CONTACT */
    $contact_text = array();
    $contact_text[] = array(
        'slug' => 'contact_text_1',
        'default' => '',
        'label' => __('Top Line 1'),
    );
    $contact_text[] = array(
        'slug' => 'contact_text_2',
        'default' => '',
        'label' => __('Top Line 2'),
    );
    foreach($contact_text as $text){
        $wp_customize->add_setting($text['slug'], array(
            'default' => $text['default'],
            'capability' => 'edit_theme_options',
        ));
        $wp_customize->add_control($text['slug'] . '_c', array(
            'label' => $text['label'],
            'section' => 'contact',
            'settings' => $text['slug'],
            'type' => 'text',
            'priority' => 1,
        ));
    }
    
    $wp_customize->add_setting('contact_top_pc_bg', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_top_pc_bg_c', array(
        'label' => __('[PC] Top Image Background'),
        'section' => 'contact',
        'settings' => 'contact_top_pc_bg',
        'priority' => 1,
    )));
    
    /* GREETING */
    $wp_customize->add_setting('greeting_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'greeting_image_c', array(
        'label' => __('Greeting Image'),
        'section' => 'greeting',
        'settings' => 'greeting_image',
        'priority' => 1,
    )));
    
    
}

add_action('customize_register', 'theme_customize_register');

//css generate
function generate_css() {
    ?>
    <style>
        .keyvisual-contact{
            background: url("<?php echo get_contact_top_pc_bg() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'generate_css');

/* CONTACT */

function get_contact_text_1(){
    return get_theme_mod('contact_text_1');
}

function get_contact_text_2(){
    return get_theme_mod('contact_text_2');
}

function get_contact_top_pc_bg() {
    if (esc_url(get_theme_mod('contact_top_pc_bg')) != '') {
        return esc_url(get_theme_mod('contact_top_pc_bg'));
    } else {
        return get_template_directory_uri() . '/img/keyvisual_contact_pc.jpg';
    }
}

/* GREETING */

function get_greeting_image(){
    return esc_url(get_theme_mod('greeting_image'));
}