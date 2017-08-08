<?php 
/**
 * Grabbing data of Product Testimonials field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$testimonials = get_sub_field( 'testimonials' );

if ( $testimonials ) :

	// Common 
	$d                    = array(); 
	$attrs                = array();
	$style                = array();
	$classes              = array();
	$classes[]            = 'testimonials-carousel width_full';


	// Margins
	$d['margin_top']      = get_sub_field( 'margin_top' ) ? get_sub_field( 'margin_top' ) / 10 : false;
	$d['margin_bottom']   = get_sub_field( 'margin_bottom' ) ? get_sub_field( 'margin_bottom' ) / 10 : false;

	if ( $d['margin_top'] ) 
		$style[]          = "margin-top:{$d['margin_top']}rem;";

	if ( $d['margin_bottom'] ) 
		$style[]          = "margin-bottom:{$d['margin_bottom']}rem;";

	// Compile classes and attributes
	$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
	$classes              = generate_classlist( $classes );
	$attrs                = generate_classlist( $attrs );
	?>

	<div class="<?=$classes;?>" <?=$attrs;?>>
		
		<?php
		/**
		 * Loop each testimonial
		 */
		foreach ( $testimonials as $t ) : 

			// Common 
			$d                    = array(); 
			$attrs                = array();
			$style                = array();
			$classes              = array();
			$classes[]            = 'testimonials--item';

			// Fields
			$d['photo']           = get_field('photo', $t->ID) ? wp_get_attachment_image( get_field('photo', $t->ID) ) : '';
			$d['name']            = get_field('name', $t->ID) ? get_field('name', $t->ID) : get_the_title($t->ID);
			$d['additional']      = get_field('additional', $t->ID);
			$d['testimonial']     = get_field('testimonial', $t->ID);
			$d['shortly']         = get_field('shortly', $t->ID) ? get_field('shortly', $t->ID) : $d['testimonial'];

			// Compile classes and attributes
			$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
			$classes              = generate_classlist( $classes );
			$attrs                = generate_classlist( $attrs );

			/**
			 * Get testimonial's view
			 */
			include THEME_VIEWS . 'loop/testimonial.php';
		endforeach;
		?>

	</div>

	<?php
endif;