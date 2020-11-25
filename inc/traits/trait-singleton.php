<?php

namespace RIGOROUS_THEME\Inc\Traits;

trait Singleton {
    public function __construct() {

    }

    public function __clone() {

    }

    final public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {

			$instance[ $called_class ] = new $called_class();
			do_action( sprintf( 'aquila_theme_singleton_init_%s', $called_class ) );

		}

		return $instance[ $called_class ];
    }

    public function get_child_menu_items( $menu_array, $parent_id ) {
        $child_menu = [];

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