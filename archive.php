<?php
/**
 * Archive page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

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

get_footer();
