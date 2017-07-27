<?php
/**
 * Single page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

	if ( have_posts() ) : 

		while ( have_posts() ) : the_post(); 

			// get_template_part( 'template-parts/product', 'primary-area' );
			// get_template_part( 'template-parts/product', 'sidebar' );

		endwhile;

	endif;

get_footer();
