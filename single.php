<?php
/**
 * Single page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Dev_Theme
 */

get_header();

	if ( have_posts() ) : 

		while ( have_posts() ) : the_post(); 

		endwhile;

	endif;

get_footer();
