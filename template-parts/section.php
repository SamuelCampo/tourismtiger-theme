<?php 
/**
 * Grabbing data of Primnary content section field
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$attrs      = array();
$style      = array();
$classes    = array();
$classes[]  = 'primary-content';

$classes[]  = defined( 'GET_SECTION_AJAX' ) ? 'slide-out' : '';

// Rows' holder variables
$row_id     = "{$section_id}--" . generate_random_string(5);
$row_attrs  = array();

/**
 * Paddings
 */
$paddings   = get_sub_field( 'paddings' );
$classes[]  = is_array( $paddings ) ? 'padding_' . implode( ' padding_', $paddings ) : '';

/**
 * Background options
 */
$type       = get_sub_field( 'background' );
$background = get_section_background( $type, $the_section_row, $section_id ); // Set attrs and get bg videos
$attrs[]    = $background['attrs'] ? $background['attrs'] : '';
$style[]    = $background['style'] ? $background['style'] : '';

/**
 * Generate dividers
 */
$type       = array( 'top' => get_sub_field('top-divider'), 'bottom' => get_sub_field('bottom-divider') );
get_section_dividers( $type, $the_section_row, $section_id );

/**
 * AJAX rows-loading core variables
 */
$type                   = get_sub_field('ajax_type');
$the_section_rows_limit = -1; // how many rows to show

// Conditional in case of 
// ajax is activated to these rows
if ( $type !== 'false' && $type ) :
	$row_attrs[]            = get_section_ajax_attrs( $type, $the_section_row, $section_id, $section_number );

	$d['ajax_at_once']      = get_sub_field('ajax_at_once');
	$the_section_rows_limit = intval($d['ajax_at_once']);
endif;

// Section attributes
$attrs[]    = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$classes    = generate_classlist( $classes );
$attrs      = generate_classlist( $attrs );
$row_attrs  = generate_classlist( $row_attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'core/section.php';
