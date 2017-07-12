<?php 
/**
 * Grabbing data of Primnary content section template field
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$section_object = get_sub_field( 'section-id' );
$section_id     = 'sec-tem';

if ( $section_object ) : 

	// override $post
	$post = $section_object;
	setup_postdata( $post );

	if ( have_rows( 'primary-content-template' ) ) :
		while ( have_rows( 'primary-content-template' ) ) :
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
			$background = get_section_background( $type, $the_section_row, $section_id ); // Set attrs and get bg videos
			$attrs[]    = $background['attrs'] ? $background['attrs'] : '';
			$style[]    = $background['style'] ? $background['style'] : '';

			// Section dividers 
			$type       = array( 'top' => get_sub_field('top-divider'), 'bottom' => get_sub_field('bottom-divider') );
			get_section_dividers( $type, $the_section_row, $section_id );

			// Compile styles
			$attr_style = 'style="' . generate_classlist( $style ) . '"';
			$attrs[]    = $attr_style;

			// Compile classes and attributes
			$classes    = generate_classlist( $classes );
			$attrs      = generate_classlist( $attrs );

			/**
			 * Get section view
			 */
			include THEME_VIEWS . 'core/section.php';
		endwhile;
	endif;

	wp_reset_postdata();
endif;


