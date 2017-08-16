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
				?>

				<section class="wysiwyg">
					<h1><?=$title;?></h1>
					<p class="wysiwyg"><?=$title;?></p>
				</section>

				<?php
			endwhile;

		endif;

	elseif ( is_archive() ) :

		if ( have_posts() ) : 
			?>

			<div class="wysiwyg">
				<h1>Aerchive page</h1>

				<?php
				/**
				 * Loop items of current archive
				 */
				while ( have_posts() ) : the_post(); 
					/**
					 * Set post variables and output template
					 */
					$title   = get_the_title();
					$content = get_the_content();
					?>

					<section class="wysiwyg">
						<h2><?=$title;?></h2>
						<p class="wysiwyg"><?=$title;?></p>
					</section>

					<?php
				endwhile;
				?>

			</div>

			<?php
		endif;
		
	endif;

get_footer();
