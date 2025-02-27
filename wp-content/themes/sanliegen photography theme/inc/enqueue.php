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
  wp_enqueue_style( 'Tenor', 'https://fonts.googleapis.com/css?family=Tenor+Sans');
  wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');
  wp_enqueue_style( 'socialfonts', get_template_directory_uri() . '/assets/socialfonts/fonts.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'bootstrapGrid', get_template_directory_uri() . '/assets/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'anacatala', get_template_directory_uri() . '/assets/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'mfpcss', get_template_directory_uri() . '/assets/mfp.min.css', array(), '1.0.0', 'all');
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, '1.11.3', true);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'mfp', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0.0', true);
  wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/assets/js/mousewheel.js', array(), '1.0.0', true);
  wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true);
  wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'frontend_load_scripts' );
