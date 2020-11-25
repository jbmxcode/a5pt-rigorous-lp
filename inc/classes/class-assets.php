<?php
/**
 * Enqueue theme assets
 * 
 * @package Rigorous
 */

 namespace RIGOROUS_THEME\Inc;

use RIGOROUS_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {      
        $this->setup_hooks();
    }

    protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles() {
        // Register Styles
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( RIGOROUS_DIR_PATH. '/style.css' ), 'all' );
        wp_register_style( 'app-css', RIGOROUS_DIR_URI. '/assets/dist/app.css', [], false, 'all' );

        // Enqueue Styles
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'app-css' );
    }

    public function register_scripts() {
        // Register Scrips
        wp_register_script( 'main-js', RIGOROUS_DIR_URI . '/assets/dist/app.js', [], false, true );

        // Enqueue Scripts
        wp_enqueue_script( 'main-js' );
    }
}