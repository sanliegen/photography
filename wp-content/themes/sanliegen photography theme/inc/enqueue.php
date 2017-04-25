<?php

/*
  ==================================
    ADMIN ENQUEUE FUNCTIONS
  ==================================
*/

/*
  =====================================
    FRONT-END Enqueue Functions
  =====================================
*/


function frontend_load_scripts() {
  wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');
  wp_enqueue_style( 'socialfonts', get_template_directory_uri() . '/assets/socialfonts/fonts.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'mickirosirichter', get_template_directory_uri() . '/assets/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'mfpcss', get_template_directory_uri() . '/assets/mfp.css', array(), '1.0.0', 'all');
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, '1.11.3', true);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'mfp', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0.0', true);
  wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'frontend_load_scripts' );
