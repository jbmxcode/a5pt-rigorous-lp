<?php
/**
 * Functions File
 * 
 * @package Rigorous
 */

if ( ! defined( 'RIGOROUS_DIR_PATH' ) ) {
	define( 'RIGOROUS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'RIGOROUS_DIR_URI' ) ) {
	define( 'RIGOROUS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once RIGOROUS_DIR_PATH . '/inc/helpers/autoloader.php';

function rigorous_get_theme_instance() {
    \RIGOROUS_THEME\Inc\RIGOROUS_THEME::get_instance();
}

rigorous_get_theme_instance();