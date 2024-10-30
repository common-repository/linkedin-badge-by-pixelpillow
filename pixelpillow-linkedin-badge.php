<?php
/*
Plugin Name: Linkedin Badge by Pixelpillow
Plugin URI: http://www.pixelpillow.nl/wordpress/plugins/linkedin-badges/
Description: This plugin lets you embed Linkedin badges through an easy-to-use shorcode
Version: 1.0
Author: Milan van Bruggen
Author URI: http://www.pixelpillow.nl/
*/

// Shortcode function
function linkedin_badges_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id'			=> '',
		'format'		=> 'inline',
		'related'		=> 'false',
		'text'			=> '',
		'width'			=>	364
	), $atts ) );

	return '<script type="IN/MemberProfile" data-id="' . $id . '" data-format="' . $format . '" data-related="' . $related . '" data-text="' . $text . '" data-width="' . $width . '"></script>';
	
}

// Add shortcode
add_shortcode( 'linkedinbadge', 'linkedin_badges_shortcode' );

// Enqueue JS
function linkedin_badges_scripts() {
    wp_enqueue_script(
		'linkedin-badges',
		'//platform.linkedin.com/in.js',
		'linkedin',
		'1.0.1',
		true
	);
}

add_action( 'wp_enqueue_scripts', 'linkedin_badges_scripts' );