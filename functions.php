<?php
function radost_theme_support(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'radost_theme_support');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function radost_theme_styles(){
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
}