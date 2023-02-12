<?php
/**
 * Functions.
 *
 * @package WP-TEST
 */

if ( ! function_exists( 'my_wp_enqueue_scripts' ) ) {
	/**
	 * Enqueue scripts
	 */
	function my_wp_enqueue_scripts() {
		// css.
		wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', '', '2.0.4', 'all' );
		wp_enqueue_style( 'style', get_theme_file_uri( 'style.css' ), '', filemtime( get_theme_file_path( 'style.css' ) ), 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_wp_enqueue_scripts', 10 );
