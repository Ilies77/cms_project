<?php 

add_action("wp_enqueue_scripts", "add_script_css");
function add_script_css() {
    wp_enqueue_style("main_css", get_stylesheet_uri());
}

?>