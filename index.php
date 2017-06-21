<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

	if ( is_singular() ) :

		if ( have_posts() ) : 

			while ( have_posts() ) : the_post(); 

				/**
				 * Set post variables and output template
				 */
				$title   = get_the_title();
				$content = get_the_content();
				$wysiwyg = "
					<h1>$title</h1>
					<div class='wysiwyg'>$content</div>
				";
				$classes = '';

				include THEME_VIEWS . 'common/wysiwyg.php';

			endwhile;

		endif;

	elseif ( is_archive() ) :

		if ( have_posts() ) : 

			while ( have_posts() ) : the_post(); 

			endwhile;

		endif;
		
	endif;

get_footer();
