<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package senalbape
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function senalbape_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'senalbape_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function senalbape_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'senalbape_pingback_header' );

/**
 * To avoid markup being printed and scripts being enqueued when they are not needed,
 * we can define a function to help us make these decisions. 
 * This function should return a Boolean value and accept a single parameter.
 * The parameter is used to declare the minimum number of featured posts required
 * to return a true value.
 */