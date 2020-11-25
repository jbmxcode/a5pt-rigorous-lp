<?php
$args = array(
    'post_type' => array( 'spotlight' ),
    'posts_per_page' => 1
);

$query = new WP_Query($args);

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); 
?>
<div id="spotlight_wrapper" class="module spotlight-wrapper full-width">
    <div class="row">
        <div class="row-inner">
            <section class="spotlight content" aria-labelledby="spotlight_header">                
                <div class="content-inner">        
                    <div class="content-summary">
                        <div class="content-title">
                            <h2 id="spotlight_header" class="title title-section">
                                <span>Who</span> 
                                <span>We</span>
                                <span>Are</span>
                            </h2>
                        </div>
                        <div class="content-text">
                            <?php the_content(); ?>
                        </div>
                        <div class="content-links">
                            <a href="<?php the_permalink(); ?>" class="action action-link"><span class="action-inner">Read More</span></a>
                        </div>
                    </div>

                    <figure class="content-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                    </figure>
                </div>  
            </section>
        </div>
    </div>
</div>
<?php 
    endwhile;
    wp_reset_postdata();
endif;
