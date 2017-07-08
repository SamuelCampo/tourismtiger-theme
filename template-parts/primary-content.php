<?php 
/**
 * Primnary content
 *
 * Here we get all nesesarily variables 
 * of Primary Content component and include Primary Content template view
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows( 'primary-content' ) ) :
	while ( have_rows( 'primary-content' ) ) :
		$the_section_row = the_row();

		// Common 
		$attrs      = array();
		$style      = array();
		$classes    = array();
		$classes[]  = 'primary-content';

		// Paddings 
		$paddings   = get_sub_field( 'paddings' );
		$classes[]  = is_array( $paddings ) ? 'padding_' . implode( ' padding_', $paddings ) : '';

		// Background
		$type       = get_sub_field( 'background' );
		$background = get_section_background( $type, $the_section_row ); // Set attrs and get bg videos
		$attrs[]    = $background['attrs'] ? $background['attrs'] : '';
		$style[]    = $background['style'] ? $background['style'] : '';

		// Compile styles
		$attr_style = 'style="' . generate_classlist( $style ) . '"';
		$attrs[]    = $attr_style;

		// Compile classes and attributes
		$classes    = generate_classlist( $classes );
		$attrs      = generate_classlist( $attrs );

		include THEME_VIEWS . 'core/section.php';
	endwhile;
endif;

?>