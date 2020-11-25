<?php
/**
 * Front Page template
 * 
 * @package Rigorous
 */
get_header();

get_template_part( 'template-parts/content', 'hero' );
get_template_part( 'template-parts/content', 'spotlight' );
get_template_part( 'template-parts/content', 'services' );
get_template_part( 'template-parts/content', 'projects' );
get_template_part( 'template-parts/content', 'infographics' );

get_footer();