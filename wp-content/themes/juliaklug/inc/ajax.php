<?php

/*

@package photography

  =====================================
    AJAX FUNCTIONS
  =====================================
*/

add_action('wp_ajax_noprive_ajax_save_user_contact_form', 'ajax_send_contact');
add_action('wp_ajax_ajax_save_user_contact_form', 'ajax_send_contact');

function ajax_send_contact(){
  $name = wp_strip_all_tags($_POST['name']);
  $email = wp_strip_all_tags($_POST['email']);
  $message = wp_strip_all_tags($_POST['message']);

  //SEND EMAIL

  // $to = get_bloginfo('admin_email');
  $to = 'dennis.zyche@gmail.com';
  $subject = 'Contact Form Message - '.$name;

  $headers[] = 'From: '.get_bloginfo('name').' <'. $to .'>';
  $headers[] = 'Reply-To: '. $name .'<'. $email .'>';
  $headers[] = 'Content-Type: text/html: charset=UTF-8';

  wp_mail( $to, $subject, $message, $headers );

  die();
}
