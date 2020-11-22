<?php
/**
 * Functions File
 * 
 * @package Rigorous
 */

if ( ! defined( 'RIGOROUS_DIR_PATH' ) ) {
	define( 'RIGOROUS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

 require_once RIGOROUS_DIR_PATH . '/inc/helpers/autoloader.php';

function rigorous_get_theme_instance() {
    \RIGOROUS_THEME\Inc\RIGOROUS_THEME::get_instance();
}

rigorous_get_theme_instance();

function rigorous_enqueue_scripts() {

    // Register Styles
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory(). '/style.css' ), 'all' );

    // Register Scrips
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true);

    // Enqueue Styles
    wp_enqueue_style( 'style-css' );

    // Enqueue Scripts
    wp_enqueue_script( 'main-js' );

}

add_action( 'wp_enqueue_scripts', 'rigorous_enqueue_scripts' );