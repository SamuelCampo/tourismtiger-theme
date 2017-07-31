<?php
/**
 * Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); 

			/**
			 * Set post variables and output template
			 */
			get_template_part('template-parts/primary-content');

		endwhile;
	endif;

get_footer();
