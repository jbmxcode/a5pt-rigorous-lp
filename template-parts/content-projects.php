<div id="projects_wrapper" class="module projects-wrapper">
    <div class="row">
        <div class="row-inner">

            <section class="projects" aria-labelledby="projects_header">              
                <div class="content-inner">        
                    <div class="content-summary">
                        <div class="content-tabs">
                            <ul>
                                <li><a class="active">All</a></li>
                                <li><a>Graphic</a></li>
                                <li><a>Videos</a></li>
                                <li><a>Webdesign</a></li>
                                <li><a>Branding</a></li>
                            </ul> 
                        </div>

                        <div class="content-title">
                            <h2 id="projects_header" class="title title-mega">Projects</h2>
                        </div>

                        <div class="content-list">
                            <?php
                            $args = array(
                                'post_type' => array( 'project' ),
                                'posts_per_page' => 4,
                                'order' => 'ASC'
                            );

                            $query = new WP_Query($args);

                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); 
                            ?>

                            <article class="item">
                                <figure class="item-img">                                
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                </figure>
                                <div class="item-summary">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="item-tags">
                                    <ul>
                                        <li><a href="" class="c-orange">Design</a></li>
                                        <li><a href="" class="c-pure-blue">Mobile</a></li>
                                    </ul>
                                </div>
                            </article>
                                
                            <?php 
                                endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </div>

                        <div class="content-links">
                            <a href="" class="action action-link"><span class="action-inner">More Projects</span></a>
                        </div>

                    </div>
                </div>
            </section>        
        </div>
    </div>
</div>