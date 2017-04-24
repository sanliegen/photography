<?php

/*

@package sanliegen photo template

  =====================================
    Shortcodes
  =====================================
*/

// Contact Form shortcode
function photography_contact_form( $atts, $content = null ) {

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact'
	);
	//return HTML
	ob_start();
	include 'template-parts/contact-form.php';
	return ob_get_clean();

}
add_shortcode( 'contact', 'photography_contact_form' );
