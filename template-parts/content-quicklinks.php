<nav id="quicklinks_hero" class="quicklinks-hero" aria-labelledby="quicklinks_hero_header">
    <h2 id="quicklinks_hero_header"><span class="hidden">Quicklinks Hero</span></h2>
    
    <ul class="items-list">    
        <?php
        $args = array(
            'post_type' => array( 'feature' ),
            'posts_per_page' => 3
        );

        $query = new WP_Query($args);

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); 
        ?>

        <li>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <span class="content-text">Development</span>
            </a>
        </li>
        
        <?php 
            endwhile;
            wp_reset_postdata();
        endif; ?>
    </ul>
</nav>