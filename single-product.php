<?php
/**
 * Single product page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

	if ( have_posts() ) : 

		while ( have_posts() ) : 
			the_post(); 
			?>

			<div class="product-content box">

				<?php
				/**
				 * Include Primary Area 
				 */
				get_template_part( 'template-parts/product', 'primary-area' );
				?>
			</div>

			<?php
		endwhile;

	endif;

get_footer();
