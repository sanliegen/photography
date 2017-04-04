<?php

/*

@package photography

	========================
		THEME CUSTOM POST TYPES
	========================
*/
/* SHOWS CPT */
function work_custom_post_type() {
	$labels = array(
		'name' 				=> 'Work',
		'singular_name' 	=> 'Work',
    'add_new' 	=> 'Add Item',
    'all_item' 	=> 'All Items',
    'add_new_item' 	=> 'Add Item',
    'edit_item' 	=> 'Edit Item',
    'new_item' 	=> 'New Item',
    'view_item' 	=> 'View Item',
	);
	$args = array(
		'labels'			=> $labels,
		'public'			=> true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 20,
		'menu_icon'			=> get_template_directory_uri() . '/img/admin-icon.png',
		'supports'			=> array( 'title', 'thumbnail' ),
    'exclude_from_search'		=> false,
	);

	register_post_type( 'work', $args );

}
add_action( 'init', 'work_custom_post_type' );

/* BLOG POST CPT */
function blog_custom_post_type() {
	$labels = array(
		'name' 				=> 'Blog',
		'singular_name' 	=> 'Blog',
    'add_new' 	=> 'Add Item',
    'all_item' 	=> 'All Items',
    'add_new_item' 	=> 'Add Item',
    'edit_item' 	=> 'Edit Item',
    'new_item' 	=> 'New Item',
    'view_item' 	=> 'View Item',
	);
	$args = array(
		'labels'			=> $labels,
		'public'			=> true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 20,
		'menu_icon'			=> get_template_directory_uri() . '/img/admin-icon.png',
		'supports'			=> array( 'title', 'thumbnail' ),
    'exclude_from_search'		=> false,
	);

	register_post_type( 'blog_post', $args );

}
add_action( 'init', 'blog_custom_post_type' );
