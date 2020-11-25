<?php
/**
 * Header Navigation template
 * 
 * @package Rigorous
 */

$menu_class     = \RIGOROUS_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'rigorous-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>

<div class="site-menu">
    <nav class="primary-menu" aria-labelledby="primary_menu_header">
        <div id="primary_menu_header" class="title hidden"><?php esc_attr_e( 'Primary Menu', 'rigorous' ); ?></div>

        <nav class="primary-menu" aria-labelledby="primary_menu_header">
            <div id="primary_menu_header" class="title hidden">Primary Menu</div>
            <?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {   
                echo '<ul class="primary-menu__list">';
                    foreach ( $header_menus as $menu_item ) {
                        if ( ! $menu_item->menu_item_parent ) {

                            $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                            $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
                            $has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : ''; 

                            if ( ! $has_children ) {                              
                                echo '<li>';
                                echo '<a href="'. esc_url( $menu_item->url ) . '">'. esc_html( $menu_item->title ) . '</a>'; 
                                echo '</li>'; 
                            } else {
                                echo '<li class="dropdown-menu">'; 
                                echo '<a href="'. esc_url( $menu_item->url ) . '">'. esc_html( $menu_item->title ) . '</a>'; 
                                echo '<ul>'; 
                                    foreach ( $child_menu_items as $child_menu_item ) { 
                                        echo '<li>'; 
                                        echo '<a href="'. esc_html( $child_menu_item->url ) . '" class="dropdown-item">'. esc_html( $child_menu_item->title ) . '</a>'; 
                                        echo '</li>';  
                                    }
                                echo '</ul>';
                                echo '</li>';
                            }
                        }       
                    } 
                echo '</ul>';
            } ?>
        </nav>
    </nav>
</div>