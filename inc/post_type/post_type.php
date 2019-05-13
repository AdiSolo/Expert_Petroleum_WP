<?php

/*
* Change 'post' name to 'News'
*/

	 function dev_edit_admin_menus() {
	     global $menu;
	     global $submenu;

	     $menu[5][0] = 'News'; // Change Posts to Houses
	     $submenu['edit.php'][5][0] = 'News';
	     $submenu['edit.php'][10][0] = 'Add News';
	     $submenu['edit.php'][16][0] = 'News Tags';
	 }

	 function dev_change_post_object() {
	     global $wp_post_types;

	     $labels = &$wp_post_types['post']->labels;
	     $labels->name = 'News';
	     $labels->singular_name = 'News';
	     $labels->add_new = 'Add News';
	     $labels->add_new_item = 'Add News';
	     $labels->edit_item = 'Edit News';
	     $labels->new_item = 'News';
	     $labels->view_item = 'View News';
	     $labels->search_items = 'Search News';
	     $labels->not_found = 'No Houses found';
	     $labels->not_found_in_trash = 'No News found in Trash';
	     $labels->all_items = 'All News';
	     $labels->menu_name = 'News';
	     $labels->name_admin_bar = 'News';
	 }

	 add_action( 'admin_menu', 'dev_edit_admin_menus' );
	 add_action( 'init', 'dev_change_post_object' );

/**
* Register a story post type.
*
*/
	add_action( 'init', 'story_post_type' );
	function story_post_type() {
		$labels = array(
			'name'               => _x( 'Stories', 'post type general name' ),
			'singular_name'      => _x( 'Story', 'post type singular name' ),
			'menu_name'          => _x( 'Stories', 'admin menu' ),
			'name_admin_bar'     => _x( 'Story', 'add new on admin bar' ),
			'add_new'            => _x( 'Add New Story', 'story' ),
			'add_new_item'       => __( 'Add New Story' ),
			'new_item'           => __( 'New Story' ),
			'edit_item'          => __( 'Edit ' ),
			'view_item'          => __( 'View Story'),
			'all_items'          => __( 'All Stories' ),
			'search_items'       => __( 'Search Stories' ),
			'parent_item_colon'  => __( 'Parent Stories:' ),
			'not_found'          => __( 'No Stories found.' ),
			'not_found_in_trash' => __( 'No Stories found in Trash.' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'story' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
	        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	        'menu_icon'          => 'dashicons-book',
			'taxonomies'          => array( 'category' ),
		);

		register_post_type( 'story', $args );
	}



/**
* Register a Services post type.
*
*/

	add_action( 'init', 'services_post_type' );

	function services_post_type() {
	   $labels = array(
		   'name'               => _x( 'Services', 'post type general name' ),
		   'singular_name'      => _x( 'Service', 'post type singular name' ),
		   'menu_name'          => _x( 'Services', 'admin menu' ),
		   'name_admin_bar'     => _x( 'Service', 'add new on admin bar' ),
		   'add_new'            => _x( 'Add New Service', 'service' ),
		   'add_new_item'       => __( 'Add New Service' ),
		   'new_item'           => __( 'New Service' ),
		   'edit_item'          => __( 'Edit ' ),
		   'view_item'          => __( 'View Service'),
		   'all_items'          => __( 'All Services' ),
		   'search_items'       => __( 'Search Services' ),
		   'parent_item_colon'  => __( 'Parent Services:' ),
		   'not_found'          => __( 'No Services found.' ),
		   'not_found_in_trash' => __( 'No Services found in Trash.' )
	   );

	   $args = array(
		   'labels'             => $labels,
		   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		   'public'             => true,
		   'publicly_queryable' => true,
		   'show_ui'            => true,
		   'show_in_menu'       => true,
		   'query_var'          => true,
		   'rewrite'            => array( 'slug' => 'service' ),
		   'capability_type'    => 'post',
		   'has_archive'        => true,
		   'hierarchical'       => false,
		   'menu_position'      => 6,
		   'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		   'menu_icon'          => 'dashicons-chart-line',
		   'taxonomies'          => array( 'category' ),
	   );

	   register_post_type( 'service', $args );
	}

	/**
	* Register a Services post type.
	*
	*/

		add_action( 'init', 'organization_post_type' );

		function organization_post_type() {
		   $labels = array(
			   'name'               => _x( 'Organizations', 'post type general name' ),
			   'singular_name'      => _x( 'Organization', 'post type singular name' ),
			   'menu_name'          => _x( 'Organization', 'admin menu' ),
			   'name_admin_bar'     => _x( 'Organization', 'add new on admin bar' ),
			   'add_new'            => _x( 'Add New Organization', 'service' ),
			   'add_new_item'       => __( 'Add New Organization' ),
			   'new_item'           => __( 'New Organization' ),
			   'edit_item'          => __( 'Edit ' ),
			   'view_item'          => __( 'View Organization'),
			   'all_items'          => __( 'All Organizations' ),
			   'search_items'       => __( 'Search Organization' ),
			   'parent_item_colon'  => __( 'Parent Organization:' ),
			   'not_found'          => __( 'No Organizations found.' ),
			   'not_found_in_trash' => __( 'No Organizations found in Trash.' )
		   );

		   $args = array(
			   'labels'             => $labels,
			   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			   'public'             => true,
			   'publicly_queryable' => true,
			   'show_ui'            => true,
			   'show_in_menu'       => true,
			   'query_var'          => true,
			   'rewrite'            => array( 'slug' => 'organization' ),
			   'capability_type'    => 'post',
			   'has_archive'        => true,
			   'hierarchical'       => false,
			   'menu_position'      => 7,
			   'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			   'menu_icon'          => 'dashicons-groups',
			   'taxonomies'          => array( 'category' ),
		   );

		   register_post_type( 'organization', $args );
		}
