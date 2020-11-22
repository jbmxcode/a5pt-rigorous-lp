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

    <header id="site_header" class="site-header">
        <div class="site-header__row">
            <div class="site-header__row--inner">

                <div class="site-title">
                    <div class="site-title__inner">
                        <h1 class="logo">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56.592" height="124.241"><defs><clipPath id="a"><path data-name="Path 322" d="M130.809 96.96l35.783-14.367-.155-23.52L110 20.616v22.425L146.519 68.6 110 84.56z" transform="translate(-110 -20.616)" fill="#fff"/></clipPath><filter id="b" x="-4.5" y="-4.5" width="65.549" height="70.999" filterUnits="userSpaceOnUse"><feOffset/><feGaussianBlur stdDeviation="1.5" result="blur"/><feFlood flood-opacity=".439"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic" in2="blur"/></filter></defs><g data-name="Header Logo"><path data-name="Path 321" d="M37.1 47.654L0 64.189v20.907l56.549 39.144v-22.368l-36.47-25.529 36.47-14.345z" fill="#77cc6d"/><g data-name="Mask Group 2" clip-path="url(#a)"><g filter="url(#b)"><path data-name="Path 320" d="M0-.004v22.611l56.549 39.388V38.411z" fill="#77cc6d"/></g></g></g></svg>
                                <span class="logo__name">
                                    <span class="first-line">Rigorous Digital</span>
                                    <span class="second-line">Wordpress Agency</span>
                                </span>
                            </a>
                        </h1>
                        <a href="" class="action action-link"><span class="action-inner">Hire Us</span></a>
                    </div>
                </div>
                <div class="site-menu">
                    <?php get_template_part( 'template-parts/header/nav' ); ?>
                </div>

            </div>
        </div>
    </header>

    <main id="site_content" class="site-content" aria-label="Main Site Content" tabindex="-1">
        <div class="site-content__row">
            <div class="site-content__row--inner">