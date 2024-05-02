<?php
/**
 * Solo Eco Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Solo Eco Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SOLO_ECO_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'solo-eco-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SOLO_ECO_THEME_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );








function astra_child_theme_fonts() {
    wp_enqueue_style( 'astra-child-theme-fonts', get_stylesheet_directory_uri() . './assets/css/styles.css', false );
}
add_action( 'wp_enqueue_scripts', 'astra_child_theme_fonts' );