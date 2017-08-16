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
	
	$d['icons'][$c]['type']      = get_sub_field( 'icon-type' );
	$d['icons'][$c]['text']      = get_sub_field( 'textarea' );
	$d['icons'][$c]['url']       = get_sub_field( 'url' );
	$d['icons'][$c]['font-size'] = get_sub_field( 'font-size' ) ? get_sub_field( 'font-size' ) / 10 : '';
	$d['icons'][$c]['font-size'] = $d['icons'][$c]['font-size'] ? "style='font-size:{$d['icons'][$c]['font-size']}rem;'" : '';

	if ( $d['icons'][$c]['type'] == 'checklist' ) :
		$d['icons'][$c]['icon'] = '<i class="fa icons-list--icon_default"></i>';
	elseif ( $d['icons'][$c]['type'] == 'custom' ) :
		// Icon's atteibutes
		$d['size'] = get_sub_field( 'size' ) ? get_sub_field( 'size' )  / 10 : '';
		$d['size'] = $d['size'] ? "style='font-size:{$d['size']}rem;'" : '';
		// Icons's html
		$d['icon'] = get_sub_field( 'icon' );
		$d['icons'][$c]['icon'] = "<i class='fa {$d['icon']}' {$d['size']}></i>";
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