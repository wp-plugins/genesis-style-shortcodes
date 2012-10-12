<?php
/*
Plugin Name: Genesis Style Shortcodes
Plugin URI: http://twerdy.net/genesis-style-shortcodes
Description: Enables button, content box, and column shortcodes for Genesis child themes.
Version: 1.0
Author: Justin Twerdy
Author URI: http://twerdy.net
License: GPL2
*/

function gss_shortcodes() {
        wp_enqueue_style( 'gss shortcodes', plugin_dir_url( __FILE__ ) . 'shortcodes.css', array(), '0.1', 'screen' );
}
add_action( 'wp_enqueue_scripts', 'gss_shortcodes' );


/** Add button shortcodes */

	function gss_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => '_self',
			'color' => 'gray'
	    ), $atts));
		
	   return '<a target="'.$target.'" class="gss-button '.$color.'" href="'.$url.'">' . do_shortcode($content) . '</a>';
	}
	add_shortcode('gss-button', 'gss_button');


/** Add content box shortcodes */

	function gss_content_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'color' => 'blue'
	    ), $atts));
		
	   return '<div class="gss-content-box '.$color.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('gss-content-box', 'gss_content_box');

	
/** Add column shortcodes */

	function one_half_first() {
	return '<div class="one-half first">';
	}
	add_shortcode("one-half first","one_half_first");

	function one_half() {
	return '<div class="one-half">';
	}
	add_shortcode('one-half','one_half');

	function one_third_first() {
	return '<div class="one-third first">';
	}
	add_shortcode("one-third first","one_third_first");

	function one_third() {
	return '<div class="one-third">';
		}
	add_shortcode('one-third','one_third');

	function one_fourth_first() {
	return '<div class="one-fourth first">';
	}
	add_shortcode("one-fourth first","one_fourth_first");

	function one_fourth() {
	return '<div class="one-fourth">';
	}
	add_shortcode('one-fourth','one_fourth');

	function one_fifth_first() {
	return '<div class="one-fifth first">';
	}
	add_shortcode("one-fifth first","one_fifth_first");

	function one_fifth() {
	return '<div class="one-fifth">';
	}
	add_shortcode('one-fifth','one_fifth');

	function one_sixth_first() {
	return '<div class="one-sixth first">';
	}
	add_shortcode("one-sixth first","one_sixth_first");

	function one_sixth() {
	return '<div class="one-sixth">';
	}
	add_shortcode('one-sixth','one_sixth');

	function end_column() {
	return '</div>';
	}
	add_shortcode('end-column','end_column');