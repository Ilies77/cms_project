<?php 
// Changement des Images
add_action('customize_register', function (WP_Customize_Manager $manager_img){

    $manager_img->add_section('img-changes', [
        'title' => 'Changement de l\'image', 
    ]);
    // Changement de l'image bloc1
    $manager_img->add_setting('img_add_block1', [
        'default' => 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask-1.png'
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add_block1', [
        'section' => 'img-changes',
        'label' => 'Image bloc1'
    ]));

     // Changement de l'image bloc2
     $manager_img->add_setting('img_add_block2', [
        'default' => 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask1-2.png'
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add_block2', [
        'section' => 'img-changes',
        'label' => 'Image bloc2'
    ]));

    // Changement de l'image bloc3
    $manager_img->add_setting('img_add_block3', [
        'default' => 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask2-1.png'
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add_block3', [
        'section' => 'img-changes',
        'label' => 'Image bloc3'
    ]));

    // Changement de l'image bloc4
    $manager_img->add_setting('img_add_block4', [
        'default' => 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask3-1.png'
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add_block4', [
        'section' => 'img-changes',
        'label' => 'Image bloc4'
    ]));

    // Changement de l'image bloc5
    $manager_img->add_setting('img_add_block5', [
        'default' => 'http://localhost/dev/wordpress/wp-content/uploads/2022/07/Mask4-1.png'
    ]);

    $manager_img->add_control(new WP_Customize_Image_Control($manager_img, 'img_add_block5', [
        'section' => 'img-changes',
        'label' => 'Image bloc5'
    ]));


});


// Changement des background
add_action('customize_register', function (WP_Customize_Manager $manager_background){

    $manager_background->add_section('header_apparence', [
        'title' => 'Personnalisation Couleur', 
    ]);
// Changement du background header
    $manager_background->add_setting('header_background', [
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color'
    ]);

    $manager_background->add_control('header_background', [
        'section' => 'header_apparence',
        'label' => 'Couleur du header'
    ]);
// Changement du background body
    $manager_background->add_setting('body_background', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color'

   ));

    $manager_background->add_control('body_background', [
        'section' => 'header_apparence',    
        'label' => 'Couleur du body'
    ]);
// Changement du background footer
    $manager_background->add_setting('footer_background', array(
        'default' => '#050A3A',
        'sanitize_callback' => 'sanitize_hex_color'

   ));

    $manager_background->add_control('footer_background', [
        'section' => 'header_apparence',    
        'label' => 'Couleur du footer'
    ]);


});

// Changement des texts
add_action( 'customize_register', 'text_customizer' );

    function text_customizer( $wp_customize ) {

        $wp_customize->add_panel( 'text_blocks', array(
            'title'=> __( 'Changement du text'),
        ) );
// Changement du text bloc1
        $wp_customize->add_section( 'custom_text_block1' , array(
            'title'    => __('Text du bloc1'),
            'panel'    => 'text_blocks',
        ));

        
        $wp_customize->add_setting( 'text_block1', array(
            'default'=> 'A really professional structure for all your events!',

        ) );

        $wp_customize->add_control( 
            'custom_text_block1',
                array(
                    'label'=> __( 'Champs de texte'),
                    'section'  => 'custom_text_block1',
                    'settings' => 'text_block1',
                    'type'     => 'text'
                )
            
        );
// Changement du text paragraphe2
    $wp_customize->add_section( 'custom_text_para2' , array(
    'title'    => __('Text du paragraphe2'),
    'panel'    => 'text_blocks',
    ));

    // Changement du text paragraphe2 bloc1
    $wp_customize->add_setting( 'text_para2_block1', array(
    'default'=> 'About Us',
    ) );

    $wp_customize->add_control( 
    'custom_text_para2',
        array(
            'label'=> __( 'Champs de texte'),
            'section'  => 'custom_text_para2',
            'settings' => 'text_para2_block1',
            'type'     => 'text'
        )
    );


      // Changement du text paragraphe2 bloc2
      $wp_customize->add_setting( 'text_para2_block2', array(
        'default'=> 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.',

    ) );
    
    $wp_customize->add_control( 
        'custom_text_para2',
            array(
                'label'=> __( 'Champs de texte bloc2'),
                'section'  => 'custom_text_para2',
                'settings' => 'text_para2_block2',
                'type'     => 'text'
            )
    );




        

}





?>
