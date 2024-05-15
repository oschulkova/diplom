<?php 
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    function add_scripts_and_styles(){
        wp_enqueue_style('style', get_stylesheet_uri(), null);
        wp_enqueue_script('main', get_template_directory_uri() . "/js/main.js", false, null, true);
    }
?>
