<div id="infographics_wrapper" class="module infographics-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/dist/images/bg-infographics.jpg)">
    <div class="row">
        <div class="row-inner">
            <section class="infographics content" aria-labelledby="infographics_header">      
                <div class="content-inner">        
                    <div class="content-summary">
                        <div class="content-title">
                            <h2 id="infographics_header" class="title title-section"><span class="hidden">Infographics</span></h2>
                        </div>
                        <div class="content-list">
                            <ul>
                                <?php
                                $args = array(
                                    'post_type' => array( 'infographic' ),
                                    'posts_per_page' => 3,
                                    'order' => 'ASC'
                                );

                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) : $query->the_post(); 
                                ?>

                                <li>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">                                    
                                    <div class="info-num"><?php the_field('info_number'); ?></div>
                                    <div class="info-name"><?php the_title(); ?></div>
                                </li>
                                
                                <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </div>
</div>