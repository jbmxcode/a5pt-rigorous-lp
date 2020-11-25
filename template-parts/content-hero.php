<div id="hero_wrapper" class="module hero-wrapper">
    <div class="row">
        <div class="row-inner">
            <section class="hero content" aria-labelledby="hero_header">      
                <div class="content-inner">        
                    <div class="content-summary">
                        <div class="content-title">
                            <h2 id="hero_header" class="title title-section"><span class="hidden">Hero</span></h2>
                        </div>
                        <div class="content-links">
                            <button class="action action-play">
                                <span class="action-inner hidden">Play Button</span>
                            </button>
                        </div>
                        <div class="content-text">
                            <p>We specialise in the design, development & support of WordPress websites.</p>
                        </div>
                    </div>

                    <div class="content-image">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => array( 'slider' ),
                                    'posts_per_page' => -1
                                );

                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) : $query->the_post(); 
                                ?>

                                <div class="swiper-slide">                                
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>
                                
                                <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>  
            </section>

            <?php get_template_part( 'template-parts/content', 'quicklinks' ); ?>
        </div>
    </div>
</div>