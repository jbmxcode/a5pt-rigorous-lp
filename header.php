<?php
/**
 * Header template
 * 
 * @package Rigorous
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php 
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open(); 
    }
    ?>

    <header id="site_header" class="site-header" aria-label="<?php esc_attr_e( 'Main Site Header', 'rigorous' ); ?>">
        <div class="site-header__row">
            <div class="site-header__row--inner">

                <?php get_template_part( 'template-parts/header/logo' ); ?>
                <?php get_template_part( 'template-parts/header/nav' ); ?>

            </div>
        </div>
    </header>

    <main id="site_content" class="site-content"  aria-label="<?php esc_attr_e( 'Main Site Content', 'rigorous' ); ?>" tabindex="-1">
        <div class="site-content__row">
            <div class="site-content__row--inner">