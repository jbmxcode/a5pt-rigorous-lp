<?php
/**
 * Register Menus
 * 
 * @package Rigorous
 */

 namespace RIGOROUS_THEME\Inc;

use RIGOROUS_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct() {      
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action( 'init', [ $this, 'register_menus' ] );
    }

    public function register_menus() {
        register_nav_menus([
            'rigorous-header-menu'      => esc_attr__( 'Primary Menu', 'rigorous' ),
            'rigorous-footer-menu'      => esc_attr__( 'Secondary Menu', 'rigorous' ),
            'rigorous-tertiary-menu'    => esc_attr__( 'Tertiary Menu', 'rigorous' ),
            'rigorous-social-menu'      => esc_attr__( 'Social Menu', 'rigorous' ),
        ]);
    }

    public function get_menu_id( $location ) {
        // Get All the location
        $locations = get_nav_menu_locations();

        // Get object id by location
        $menu_id = $locations[$location];

        return ! empty( $menu_id ) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menus = [];

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}
}

