<?php

/*

@package photography

  =====================================
    Theme Support Options
  =====================================
*/

add_theme_support('post-thumbnails');

/* REMOVE MENUS */
function edit_admin_menus() {
    global $menu;
    global $submenu;

    remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
    remove_menu_page('tools.php'); // Remove the Tools Menu
}
add_action( 'admin_menu', 'edit_admin_menus' );
// add_filter('acf/settings/show_admin', '__return_false');

function hide_editor() {

  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'page-index.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-portfolio.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
add_action( 'admin_init', 'hide_editor' );

/*
  =====================================
    Nav Menu Options
  =====================================
*/

function starter_register_nav_menu(){
	register_nav_menu( 'primary', 'Header Navigation Menu' );
  register_nav_menu( 'secondary', 'Header Navigation Left' );
}
add_action( 'after_setup_theme', 'starter_register_nav_menu' );

/* WALKER CLASSES */
require get_template_directory() . '/inc/templates/wp_bootstrap_navwalker.php';

/*
  =====================================
    General Options Page
  =====================================
*/
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'photography',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/*
  =====================================
    Allow SVG Media Uploader
  =====================================
*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
