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
