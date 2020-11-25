<div id="services_wrapper" class="module services-wrapper">
    <div class="row">
        <div class="row-inner">

            <section class="services" aria-labelledby="services_header">              
                <div class="content-inner">        
                    <div class="content-summary">

                        <div class="content-title">
                            <h2 id="services_header" class="title title-mega">Services</h2>
                        </div>
                        <div class="content-list">
                            <ul>
                                <?php
                                $args = array(
                                    'post_type' => array( 'service' ),
                                    'posts_per_page' => 3,
                                    'order' => 'ASC'
                                );

                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) : $query->the_post(); 
                                ?>
                                <li>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <div class="content-text">
                                        <span class="first-line"><?php the_title(); ?></span>
                                        <span class="second-line"><?php the_excerpt(); ?></span>
                                    </div>
                                    <div class="content-links">
                                        <a href="<?php the_permalink(); ?>" class="action action-link"><span class="action-inner">Read More</span></a>
                                    </div>
                                </li>       
                                <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </ul>
                        </div>

                        <div class="content-text">
                            <p>Rigorous Digital is a WordPress agency. We're based in the spa town of Cheltenham, but most of the team works remotely from around the world.</p> 
                            <p>We work primarily with Third Sector & Agencies to improve online traffic, visibility and sales so that our client's see a measurable increase in their revenue.</p>
                        </div>

                        <a href="#projects_wrapper" class="action action-next-section"><span class="action-inner hidden">Next Section</span></a>

                    </div>
                </div>
            </section>        
        </div>
    </div>
</div>