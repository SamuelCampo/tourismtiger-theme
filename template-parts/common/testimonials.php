<?php 
/**
 * Grabbing data of Testimonial field
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
	$classes[]            = 'testimonials-carousel';
	$classes[]            = 'width_full';

	// margins
	$style[]              = get_margins_attrs();

	// Compile classes and attributes
	$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
	$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
	$attrs                = generate_classlist( $attrs );
	?>

	<div <?=$attrs;?>>
		
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
			$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
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