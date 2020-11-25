<?php

$menu_class     = \RIGOROUS_THEME\Inc\Menus::get_instance();
$menu_id = $menu_class->get_menu_id( 'rigorous-header-menu' );
$menus   = wp_get_nav_menu_items( $menu_id );

?>
<nav class="secondary-menu" aria-labelledby="secondary_menu_footer">
    <div id="secondary_menu_footer" class="title hidden">Secondary Menu</div>
    
        <?php if ( ! empty( $menus ) && is_array( $menus ) ) {   
            echo '<ul class="secondary-menu__list">';
                foreach ( $menus as $menu_item ) {
                    if ( ! $menu_item->menu_item_parent ) {

                        $child_menu_items = $menu_class->get_child_menu_items( $menus, $menu_item->ID );
                        $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
                        $has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : ''; 

                        if ( ! $has_children ) {                              
                            echo '<li>';
                            echo '<a href="'. esc_url( $menu_item->url ) . '">'. esc_html( $menu_item->title ) . '</a>'; 
                            echo '</li>'; 
                        }
                    }       
                } 
            echo '</ul>';
        } ?>
</nav>
