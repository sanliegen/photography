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
  wp_enqueue_style( 'Lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900');
  wp_enqueue_style( 'bootstrapGrid', get_template_directory_uri() . '/assets/bootstrap.min.css', array(), '3.3.5', 'all');
  wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/fancybox.min.css', array(), '3.3.5', 'all');
  wp_enqueue_style( 'photography', get_template_directory_uri() . '/assets/style.css', array(), '1.0.0', 'all');
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, '1.11.3', true);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/assets/js/mousewheel.js', array(), '1.0.0', true);
  wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array(), '1.0.0', true);
  wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'frontend_load_scripts' );
