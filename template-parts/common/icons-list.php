<?php 
/**
 * Icons list component
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'icons-list';

$d['counter']         = 0;
$d['layout']          = get_sub_field( 'layout' );
$d['vertical']        = get_sub_field( 'vertical' ) ? get_sub_field( 'vertical' ) : 'baseline';
$d['align']           = get_sub_field( 'align' ) ? get_sub_field( 'align' ) : 'auto';

$classes[]            = "layout_{$d['layout']}";
$classes[]            = "align-items_{$d['vertical']}";
$classes[]            = "justify-content_{$d['align']}";

// Grab icons data
while ( have_rows( 'icons-list' ) ) :
	the_row();
	$c = $d['counter']++;
	
	$d['icons'][$c]['type'] = get_sub_field( 'icon-type' );
	$d['icons'][$c]['text'] = get_sub_field( 'textarea' );

	if ( $d['icons'][$c]['type'] == 'checklist' ) :
		$d['icons'][$c]['size'] = 'inherit';
		$d['icons'][$c]['icon'] = 'fa-check-circle';
	elseif ( $d['icons'][$c]['type'] == 'custom' ) :
		$d['icons'][$c]['size'] = get_sub_field( 'size' ) ? get_sub_field( 'size' )  / 10 : '';
		$d['icons'][$c]['size'] = $d['icons'][$c]['size'] ? "style='font-size:{$d['icons'][$c]['size']}rem;'" : '';
		$d['icons'][$c]['icon'] = get_sub_field( 'icon' );
	endif;
endwhile;

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

/**
 * Get section view
 */
include THEME_VIEWS . 'common/icons-list.php';