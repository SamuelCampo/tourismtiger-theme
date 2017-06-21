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

get_footer();
