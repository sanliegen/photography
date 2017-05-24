<?php

/*

@package sanliegen photo template

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
  global $pagenow;
  if( !( 'post.php' == $pagenow ) ) return;

  global $post;
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'page-index.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-portfolio.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
add_action( 'admin_head', 'hide_editor' );


/*
  =====================================
    Nav Menu Options
  =====================================
*/

function starter_register_nav_menu(){
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'starter_register_nav_menu' );


/*
  =====================================
    General Options Page
  =====================================
*/
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Admin Dont Touch',
		'menu_title'	=> 'Admin',
		'parent_slug'	=> 'theme-general-settings',
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

/*
  =====================================
    Load Template Parts
  =====================================
*/
require get_template_directory() . '/inc/template-parts/walker.php';


/*
  =====================================
    REMOVE 'P'-TAG
  =====================================
*/
function filter_ptags_on_images($content) {
  $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
  return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images', 9999);
add_filter('the_content', 'filter_ptags_on_images', 9999);
