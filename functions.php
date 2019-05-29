<?php

/*
    ================================
    Include Post Types file
    ================================
*/

include('inc/post_type/post_type.php');

/*
    ================================
    Add Theme Supports
    ================================
*/

add_theme_support( 'post-thumbnails' );

/*
    ================================
    Register Menu
    ================================
*/

require_once('inc/nav_walker/wp_nav_walker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*
    ================================
    Connect Style and Sripts
    ================================
*/

function petroleum_style() {
    wp_enqueue_style( 'bootsrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'accordion-style', get_template_directory_uri() . '/assets/css/accordion.css' );

    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js', array(), null, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets//js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'petroleum_style' );


/*
    ================================
    Update CSS within in Admin
    ================================
*/

function admin_style() {
  wp_enqueue_style( 'accordion-style', get_template_directory_uri() . '/assets/css/accordion.css' );
  wp_enqueue_style( 'dahsboard-style', get_template_directory_uri() . '/assets/css/dashboard.css' );
}
add_action('admin_enqueue_scripts', 'admin_style');


/*
    ================================
    Allow to upload SVG in MEDIA
    ================================
*/

function my_custom_mime_types( $mimes ) {

// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
$mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
unset( $mimes['exe'] );

return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );



/*
    ================================
    Allow specific blocks in Gutemberg
    ================================
*/
add_filter( 'allowed_block_types', 'gutemberg_allowed_block_types' );
function gutemberg_allowed_block_types( $allowed_blocks ) {

	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
        'core/video',
        'core/columns',
        'core/group',
        'lazyblock/history-widget',
        'lazyblock/ordered-list',
        'lazyblock/cover-image',
        'lazyblock/icon-widget',
        'lazyblock/read-more',
        'lazyblock/acccordion',
        'lazyblock/team-board',

	);
}
