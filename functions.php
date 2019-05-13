<?php

include('inc/post_type/post_type.php');
add_theme_support( 'post-thumbnails' );


function petroleum_style() {
    wp_enqueue_style( 'bootsrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'accordion-style', get_template_directory_uri() . '/assets/css/accordion.css' );
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets//js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'petroleum_style' );


// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style( 'accordion-style', get_template_directory_uri() . '/assets/css/accordion.css' );
  wp_enqueue_style( 'dahsboard-style', get_template_directory_uri() . '/assets/css/dashboard.css' );
}
add_action('admin_enqueue_scripts', 'admin_style');
