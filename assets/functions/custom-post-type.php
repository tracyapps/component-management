<?php
/* start Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

*/

// let's create the function for the custom type
function start_custom_post_types() {
	
	/**
	 * CPT: Component
	 */

	$labels = array(
		'name'                => _x( 'Component', 'Post Type General Name', 'start' ),
		'singular_name'       => _x( 'Component', 'Post Type Singular Name', 'start' ),
		'menu_name'           => __( 'Components', 'start' ),
		'parent_item_colon'   => __( '', 'start' ),
		'all_items'           => __( 'All components', 'start' ),
		'view_item'           => __( 'View', 'start' ),
		'add_new_item'        => __( 'Add new component', 'start' ),
		'add_new'             => __( 'Add new component', 'start' ),
		'edit_item'           => __( 'Edit component', 'start' ),
		'update_item'         => __( 'Update component', 'start' ),
		'search_items'        => __( 'Search all components', 'start' ),
		'not_found'           => __( 'No components found', 'start' ),
		'not_found_in_trash'  => __( 'No components found in trash', 'start' ),
	);
	$args = array(
		'label'               => __( 'component', 'start' ),
		'description'         => __( 'Component', 'start' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'comments' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-schedule',
		'rewrite'             => array( 'slug' => 'component' ),
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_in_rest'		  => true, // comment to remove gutenberg
		'capability_type'     => 'post',
	);

	// NEVER USE 'action' HERE, IT'S A RESERVED WORD
	register_post_type( 'component', $args );

	/* this adds your post categories to your custom post type(s) */
	 register_taxonomy_for_object_type( 'category', 'component' );
	/* this adds your post tags to your custom post type(s) */
	 register_taxonomy_for_object_type( 'post_tag', 'component' );

}

// adding the function to the Wordpress init
add_action( 'init', 'start_custom_post_types' );


function start_custom_taxonomy_types() {
	/**
	 * custom Tax: project_type (hierarchical)
	 */

	register_taxonomy( 'status',
		array( 'component' ),
		/* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array(
			'hierarchical' => true,
			/* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Status', 'start' ),
				'singular_name' => __( 'Status', 'start' ),
				'search_items' => __( 'Search statuses', 'start' ),
				'all_items' => __( 'All statuses', 'start' ),
				'parent_item' => __( 'Parent status', 'start' ),
				'parent_item_colon' => __( 'Parent status:', 'start' ),
				'edit_item' => __( 'Edit status', 'start' ),
				'update_item' => __( 'Update status', 'start' ),
				'add_new_item' => __( 'Add New status', 'start' ),
				'new_item_name' => __( 'New status', 'start' )
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'show_in_rest' => true, // comment to remove gutenberg
			'query_var' => true,
			'rewrite' => array( 'slug' => 'status' ),
		)
	);

	/**
	 * custom Tax: project_type (hierarchical)
	 */

	register_taxonomy( 'priority',
		array( 'component' ),
		/* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array(
			'hierarchical' => true,
			/* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Priority', 'start' ),
				'singular_name' => __( 'Priority', 'start' ),
				'search_items' => __( 'Search priorities', 'start' ),
				'all_items' => __( 'All priorities', 'start' ),
				'parent_item' => __( 'Parent priority', 'start' ),
				'parent_item_colon' => __( '', 'start' ),
				'edit_item' => __( 'Edit priority', 'start' ),
				'update_item' => __( 'Update priority', 'start' ),
				'add_new_item' => __( 'Add New priority', 'start' ),
				'new_item_name' => __( 'New priority', 'start' )
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'show_in_rest' => true, // comment to remove gutenberg
			'query_var' => true,
			'rewrite' => array( 'slug' => 'priority' ),
		)
	);

}
add_action( 'init', 'start_custom_taxonomy_types' );





