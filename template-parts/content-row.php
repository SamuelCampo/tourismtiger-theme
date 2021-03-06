<?php 
/**
 * Start columns loop
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

/**
 * Check whether there are any columns.
 * Loop them.
 */
if ( have_rows( 'columns' ) ) :
	while ( have_rows( 'columns' ) ) :
		the_row();
		$layout = get_row_layout();

		// Common 
		$attrs                = array();
		$style                = array();
		$classes              = array();
		$classes[]            = "row--column";
		$classes[]            = "column-{$layout}"; 
		$classes[]            = $layout;   
		$classes[]            = "wysiwyg";        

		// Set wrapper value if it exists
		$d['wrapper']         = get_sub_field( 'wrapper' );  
		$classes[] 			  = $d['wrapper'] ? "{$d['wrapper']}-wrapper" : '';

		if ( $layout == 'flexicard' ) 
			$classes[] 		  = 'card-wrapper';

		// Compile classes and attributes
		$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
		$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
		$attrs                = generate_classlist( $attrs );


		/**
		 * Get section view
		 */
		include THEME_VIEWS . 'core/column.php';

	endwhile;
endif;