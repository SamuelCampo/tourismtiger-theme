<?php 
/**
 * Product: Primary Area
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows('primary-area') ) : 
	$primary_area_counter = 0;
	?>

	<div class="primary-area">

	<?php
	/**
	 * Loop sections
	 */
	while ( have_rows('primary-area') ) :
		$primary_area_counter++;

		$the_section = the_row();
		$layout      = get_row_layout();
		$classes     = array(); // classes for primary area item-wrappers

		$classes[]   = 'primary-area__section card-wrapper wysiwyg';
		$classes[]   = $primary_area_counter > 1 ? 'wow fadeInUp' : '';
		
		$classes     = generate_classlist( $classes );
		?>

		<div class="<?=$classes;?>">

		<?php
		/**
		 * Get layout's model
		 */
		get_template_part( 'template-parts/product', $layout );
		?>

		</div>

		<?php
	endwhile;
	?>

	</div>
	
	<?php
endif;
