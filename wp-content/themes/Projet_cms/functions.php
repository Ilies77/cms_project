<?php 
add_theme_support('custom-logo');

// Support d'image mise en avant

add_theme_support( 'post-thumbnails' );

add_theme_support( 'widgets' );
require_once('apparences.php');

add_action("wp_enqueue_scripts", "add_script_css");
function add_script_css() {
    wp_enqueue_style("main_css", get_stylesheet_uri());
}


function setup_theme(){

    add_theme_support( 'post-thumbnails' );

}
add_action('wp_enqueue_scripts', 'setup_theme');


?>