<?php 

add_action('customize_register', function (WP_Customize_Manager $manager_img){

    $manager_img->add_section('img-changes', [
        'title' => 'Changement de l\'image', 
    ]);

    $manager_img->add_setting('img_add', [
        'capability'=> 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add', [
        'section' => 'img-changes',
        'setting' => 'img_add',
        'label' => 'Nouvelle image'
    ]));

});


add_action('customize_register', function (WP_Customize_Manager $manager_hearder){

    $manager_hearder->add_section('header_apparence', [
        'title' => 'Personnalisation du header', 
    ]);

    $manager_hearder->add_setting('header_background', [
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color'
    ]);

    $manager_hearder->add_control(new WP_Customize_Color_Control($manager_hearder, 'header_background', [
        'section' => 'header_apparence',
        'setting' => 'header_background',
        'label' => 'Couleur du header'
    ]));

});

add_action('customize_register', function (WP_Customize_Manager $manager_body){

    $manager_body->add_section('body_apparence', [
        'title' => 'Personnalisation du body', 
    ]);

    $manager_body->add_setting('body_background', [
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color'
    ]);

    $manager_body->add_control(new WP_Customize_Color_Control($manager_body, 'body_background', [
        'section' => 'body_apparence',
        'setting' => 'body_background',
        'label' => 'Couleur du body'
    ]));

});

add_action('customize_register', function (WP_Customize_Manager $manager_footer){

    $manager_footer->add_section('footer_apparence', [
        'title' => 'Personnalisation du footer', 
    ]);

    $manager_footer->add_setting('footer_background', [
        'default' => '#050A3A',
        'sanitize_callback' => 'sanitize_hex_color'
    ]);

    $manager_footer->add_control(new WP_Customize_Color_Control($manager_footer, 'footer_background', [
        'section' => 'footer_apparence',
        'setting' => 'footer_background',
        'label' => 'Couleur du footer'
    ]));

});

// add_action('customize_preview_init', function (){
//     wp_enqueue_script('montheme_apparence', get_template_directory_uri() .'/assets/apparances.js', ['jquery', 'customize-preview'], '', true);
// })



?>
