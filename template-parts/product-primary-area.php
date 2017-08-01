<?php 
/**
 * Product: Primary Area
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows('primary-area') ) : 
	?>

	<div class="primary-area">

		<?php
		/**
		 * Loop sections
		 */
		while ( have_rows('primary-area') ) :
			$the_section = the_row();
			$layout      = get_row_layout();
			
			get_template_part( 'template-parts/product', $layout );
		endwhile;
		?>

	</div>
	
	<?php
endif;
