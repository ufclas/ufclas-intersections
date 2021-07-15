<?php
/*
Plugin Name: UFCLAS Intersections
Plugin URI: https://mediaservices.clas.ufl.edu/
Description: Custom functionality for Intersesctions.
Version: 1.0.0
Author: Efren Vasquez (CLAS Media Services)
Author URI: https://mediaservices.clas.ufl.edu/
Build Date: 20210715
License: GPL2

*/

/**
* CUSTOM POST TYPES
*/
function create_posttype() {
	register_post_type( 'news',
	  array(
	    'labels' => array(
	      'name' => __( 'News' ),
	      'singular_name' => __( 'News' )
	    ),
			// 'taxonomies' => array('category'),
	    'public' => true,
			'supports' => array('editor', 'thumbnail', 'title'),
			'menu_icon'	=> 'dashicons-media-spreadsheet',
	    // 'has_archive' => true,
	    'rewrite' => array('slug' => 'news'),
	  )
	);
	register_post_type( 'events',
	  array(
	    'labels' => array(
	      'name' => __( 'Events' ),
	      'singular_name' => __( 'Event' )
	    ),
			'taxonomies' => array('category', 'event-categories'),
	    'public' => true,
			'supports' => array('editor', 'thumbnail', 'title'),
			'menu_icon'	=> 'dashicons-calendar-alt',
	    // 'has_archive' => true,
	    'rewrite' => array('slug' => 'events'),
	  )
	);
}
add_action( 'init', 'create_posttype' );