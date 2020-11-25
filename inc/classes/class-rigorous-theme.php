<?php
/**
 * Bootstraps the theme
 * 
 * @package Rigorous
 */

 namespace RIGOROUS_THEME\Inc;

 use RIGOROUS_THEME\Inc\Traits\Singleton;

 class Rigorous_Theme {
     use Singleton;

    protected function __construct() {        
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-logo', [
            'header-text'       => [ 'site-title', 'site-description' ],
            'width'             => 124,
            'height'            => 56,
            'flex-width'        => true,
            'flex-height'       => true,
        ] );

        add_theme_support( 'custom-background', [
            'default-color'     => 'rgb(119, 204, 109)',
            'default-image'     => '',
            'default-repeat'    => 'no-repeat',
        ] );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
        );
        
        add_editor_style();

        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1422;
		}
    }
}
