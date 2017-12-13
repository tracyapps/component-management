<?php
// SIDEBARS AND WIDGETIZED AREAS
function start_register_sidebars() {
	register_sidebar( array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'start' ),
		'description' => __( 'The first (primary) sidebar.', 'start' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'id' => 'footer-widgets-1',
		'name' => __( 'Footer Widget Area, column 1', 'start' ),
		'description' => __( 'An area for widgets in the footer.', 'start' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'id' => 'footer-widgets-2',
		'name' => __( 'Footer Widget Area, column 2', 'start' ),
		'description' => __( 'An area for widgets in the footer.', 'start' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'id' => 'footer-widgets-3',
		'name' => __( 'Footer Widget Area, column 3', 'start' ),
		'description' => __( 'An area for widgets in the footer.', 'start' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'start'),
		'description' => __('The second (secondary) sidebar.', 'start'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!