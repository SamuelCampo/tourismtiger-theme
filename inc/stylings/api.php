<?php
/**
 * Functions which generate css code
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * Gets font's rules
 * 
 * @param  string $field acf field : get_sub_field() || get_field() 
 * @return string
 */
function get_font_rules( $field = '' ) {

	if ( !$field ) 
		return '';

	$backup  = $field['backup-font'] ? $field['backup-font'] : 'sans-serif';

	// Write rules
	$output  = '';
	$output .= $field['font-family'] ? "font-family:{$field['font-family']},{$backup};" : "font-family:{$backup};";
	$output .= $field['font-weight'] ? "font-weight:{$field['font-weight']};" : '';
	$output .= $field['font_size'] ? "font-size:{$field['font_size']}px;" : '';
	$output .= $field['line_height'] ? "line-height:{$field['line_height']}px;" : '';
	$output .= $field['font_style'] ? "font-style:{$field['font_style']};" : '';
	$output .= $field['text_align'] ? "text-align:{$field['text_align']};" : '';
	$output .= $field['letter_spacing'] ? "letter-spacing:{$field['letter_spacing']}px;" : '';

	return $output;
}


/**
 * Generates button styles
 * 
 * @param  string $repeater Repeater field name
 * @param  string $repeater Class name or css cascade rule
 * 
 * @return string
 */
function get_button_css( $repeater = '', $class = 'button' ) {

	$output = '';
	$css    = array( 0 => '', 1 => '' ); # [0] - static, [1] - hover 

	if ( have_rows( $repeater, 'styles' ) ) :
		while ( have_rows( $repeater, 'styles' ) ) : 
			the_row();

			/* Repeater subfields */
			$style        = get_sub_field( 'style' );
			$hover        = get_sub_field( 'hover' );
			$background   = get_sub_field( 'background' );
			$font         = get_font_rules( get_sub_field( 'font' ) );
			$color        = get_sub_field( 'color' );
			$shadow       = get_sub_field( 'shadow' );
			$border       = get_sub_field( 'border' );
			$border_width = get_sub_field( 'border_width' );

			/* Style */
			switch ($style) : 
				case 'text':
					$css[0] .= 'border-radius:0;';
					$css[0] .= 'background:none;';
					break;

				case 'square':
					$css[0] .= 'border-radius:0;';
					break;

				case 'round':
					$css[0] .= 'border-radius:50%;';
					break;

				case 'corner':
					$css[0] .= 'border-radius:50%;';
					break;
			endswitch;

			/* Background */
			$css[0] .= $background ? "background-color:{$background};" : '';

			/* Background */
			$css[0] .= $color ? "color:{$color};" : '';

			/* Font */
			$css[0] .= $font;

			/* Hover effects */
			if ( is_array( $hover ) ) :

				/* Color invert effect */
				if ( in_array( 'color', $hover ) ) :
					$css[1] .= "background-color:{$color};";
					$css[1] .= "color:{$background};";
				endif;

				/* Underline hover effect */
				if ( in_array( 'text', $hover ) )
					$css[0] .= 'text-decoration:underline;';

			endif;

			/* Border */
			if ( $border == 'yes' || $border == 'hover' ) :
				$css[1] .= "border:{$border_width}px solid {$color};";

				if ( $border == 'yes' ) :
			        $css[0] .= "border:{$border_width}px solid {$color};";

				elseif ( $border == 'hover' ) :
			        $css[0] .= "border: {border_width}px solid transparent;";
				endif;
			else :
		        $css[0] .= "border: none;";
			endif;

			/* Shadow */
			if ( $shadow ) 
			    $css[0] .= 'text-shadow: 1px 1px 3px rgba(0,0,0,.3), 1px 1px 3px rgba(0,0,0,.3);';

		endwhile;
	endif;

	$output .= $css[0] ? "{$class}{{$css[0]}}" : '';
	$output .= $css[1] ? "{$class}:hover{{$css[1]}}" : '';

	return $output;

}

?>