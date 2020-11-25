<?php
/**
 * Header Logo template
 * 
 * @package Rigorous
 */
?>

<div class="site-title">
    <div class="site-title__inner">
        <h1 class="logo">
        <?php
        if ( has_custom_logo() ) :
            $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );                    
            echo 
                '<a href="' . get_site_url() . '" >
                    <img src="' . esc_url( $logo[0] ) . '" width="' . $logo[1] . '" height="' . $logo[2] . '" alt="' . get_bloginfo( 'name' ) . '">
                    <span class="logo__name">
                        <span class="first-line">' . get_bloginfo( 'name' ) . '</span>
                        <span class="second-line">' . get_bloginfo( 'description' ) . '</span>
                    </span>
                </a>';                    
        else :                    
            echo
                '<a href="' . get_site_url() . '" >
                    <span class="logo__name">
                        <span class="first-line">' . get_bloginfo( 'name' ) . '</span>
                        <span class="second-line">' . get_bloginfo( 'description' ) . '</span>
                    </span>
                </a>';                        
        endif;
        ?>
        </h1>
        <?php if ( is_front_page() ) : ?>
            <a href="" class="action action-link"><span class="action-inner"><?php esc_attr_e( 'Hire Us', 'rigorous' ); ?></span></a>
        <?php endif; ?>
    </div>
</div>