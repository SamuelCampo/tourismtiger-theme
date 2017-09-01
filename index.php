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

	/**
	 * Template for undefined singular templates
	 */
	if ( is_singular() ) :
		if ( have_posts() ) : 
			while ( have_posts() ) : 
				the_post(); 

				/**
				 * Set post variables and output template
				 */
				$title   = the_title( '<h1>', '</h1>', false );
				$content = get_the_content();

				include THEME_VIEWS . 'loop/content.php';
			endwhile;
		endif;

	/**
	 * Template for undefined archive pages
	 */
	elseif ( is_archive() ) :
		if ( have_posts() ) : 
			?>

			<div class="wysiwyg">
				<h1>Archive page</h1>

				<?php
				/**
				 * Loop items of current archive
				 */
				while ( have_posts() ) : 
					the_post(); 

					/**
					 * Set post variables and output template
					 */
					$title   = the_title( '<h2>', '</h2>', false );
					$content = get_the_content();

					include THEME_VIEWS . 'loop/content.php';
				endwhile;
				?>

			</div>

			<?php
		endif;
	endif;

get_footer();
