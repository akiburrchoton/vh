<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		//import slider css
		wp_register_style( 'Slick_css', get_template_directory_uri() . '/css/library/slick.min.css' );
		wp_enqueue_style('Slick_css');

		// wp_register_style( 'aos_css', get_template_directory_uri() . '/css/library/aos.min.css' );
		// wp_enqueue_style('aos_css');

		wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
		wp_enqueue_script('jQuery');
		
		//import animation js
		// wp_register_script( 'Aos', get_template_directory_uri() . '/js/library/aos.min.js', null, null, true );
		// wp_enqueue_script('Aos');

		//import Slider js
		wp_register_script( 'Slick', get_template_directory_uri() . '/js/library/slick.min.js', null, null, true );
		wp_enqueue_script('Slick');

		wp_register_script( 'Parallax', get_template_directory_uri() . '/js/library/parallax.min.js', null, null, true );
		wp_enqueue_script('Parallax');


		wp_register_script( 'slider_js', get_template_directory_uri() . '/js/slider.js', null, null, true );
		wp_enqueue_script('slider_js');

		wp_register_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', null, null, true );
		wp_enqueue_script('custom_js');

	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

