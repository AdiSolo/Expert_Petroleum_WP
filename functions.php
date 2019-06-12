<?php

/*
    ================================
    Include Post Types file
    ================================
*/

include('inc/post_type/post_type.php');
/*
    ================================
    Include Ajax Functions file
    ================================
*/
include('inc/ajax.php');

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
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'accordion-style', get_template_directory_uri() . '/assets/css/accordion.css' );

    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js', array(), null, true);
    //wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), null, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );

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
    Wordpress Customizer
    ================================
*/
//
// function mytheme_customize_register( $wp_customize ) {
//     $wp_customize->add_setting( 'header_textcolor' , array(
//      'default'   => '#000000',
//      'transport' => 'refresh',
//  ) );
//  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
//  	'label'      => __( 'Header Color', 'mytheme' ),
//  	'section'    => 'header_textcolor',
//  	'settings'   => '
//
//
//
//        ',
//  ) ) );
// }
// add_action( 'customize_register', 'mytheme_customize_register' );

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
// add_filter( 'allowed_block_types', 'gutemberg_allowed_block_types' );
// function gutemberg_allowed_block_types( $allowed_blocks ) {
//
// 	return array(
// 		'core/image',
// 		'core/paragraph',
// 		'core/heading',
// 		'core/list',
//         'core/video',
//         'core/columns',
//         'core/group',
//         'core/gallery',
//         'lazyblock/history-widget',
//         'lazyblock/ordered-list',
//         'lazyblock/cover-image',
//         'lazyblock/icon-widget',
//         'lazyblock/read-more',
//         'lazyblock/acccordion',
//         'lazyblock/team-board',
//
// 	);
// }

/*
    ================================
    Get Custom Taxonomies Name in List
    ================================
*/

function  print_the_taxonomies_name($taxonomy)
{
    $all_terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ]);
    $output = "";
    foreach ($all_terms as $term) {
        // $output.= '<li> <a href="'. get_term_link( $term) .'">' . $term->name . '</a></li>';
        $output.= '<li>' . $term->name . '</li>';
    }

    echo $output;
}

/*
    ================================
    Limit String Output Words
    ================================
*/


function limit_words($words, $limit) {
       // Add 1 to the specified limit becuase arrays start at 0
       $limit = $limit+1;
       // Store each individual word as an array element
       // Up to the limit
       $words = explode(' ', $words, $limit);
       // Shorten the array by 1 because that final element will be the sum of all the words after the limit
       array_pop($words);
       // Implode the array for output, and append an ellipse
       $words = implode(' ', $words);
       // Return the result
       return $words. '...';
}

/*
    ================================
    Get Post By Post Type and Category
    ================================
*/
function get_media_post($type, $cat_name, $number){
    global $post; // required
    $output = "";
    $args= array('post_type'  => $type,   'category_name' =>  $cat_name , 'posts_per_page' => $number);
    $media_posts = new WP_Query( $args );

   if($media_posts->have_posts()){
       while ($media_posts->have_posts()) {
              $media_posts->the_post();
              switch ( $cat_name ) {
                  case 'news':
                         $output.= get_template_part( 'templates/post_size/news');
              break;
              case 'reports':
                          $output.= get_template_part( 'templates/post_size/report' );
                  break;
              case 'media':
                           $output.= get_template_part( 'templates/post_size/news' );
                          break;
              }
       }
   } else {
       $output.= "No posts";
 }
        return $output;
}
/*
    ================================
    Convert Byte to another Type
    ================================
*/
function formatBytes($size, $precision = 0){
    $unit = ['Byte','KB','MB','GB','TB','PB','EB','ZB','YB'];

    for($i = 0; $size >= 1024 && $i < count($unit)-1; $i++){
        $size /= 1024;
    }

    return round($size, $precision).' '.$unit[$i];
}
