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

// margins
$style[]              = get_margins_attrs();

// Grab icons data
while ( have_rows( 'icons-list' ) ) :
	the_row();
	$c                   = $d['counter']++;
	$d['i']              = array(); // temporarily icon array
	$d['i']['attrs']     = array(); // here will be kept some attributes
	// Grab data from sub fields
	$d['i']['type']      = get_sub_field( 'icon-type' );
	$d['i']['text']      = get_sub_field( 'textarea' );
	$d['i']['url']       = get_sub_field( 'url' );
	$d['i']['font-size'] = get_sub_field( 'font-size' ) ? get_sub_field( 'font-size' ) / 10 : '';
	// set attributes
	$d['i']['attrs'][]   = $d['i']['font-size'] ? "font-size:{$d['i']['font-size']}rem;" : '';

	$d['i']['attrs']     = count( $d['i']['attrs'] ) ? 'style="' . generate_classlist( $d['i']['attrs'] ) . '"' : '';

	/**
	 * Checklist icon type
	 */
	if ( $d['i']['type'] == 'checklist' ) :
		$d['i']['icon'] = '<i class="fa icons-list--icon_default"></i>';

	/**
	 * Custom icon type
	 */
	elseif ( $d['i']['type'] == 'custom' ) :
		// Icon's atteibutes
		$d['size']      = get_sub_field( 'size' ) ? get_sub_field( 'size' )  / 10 : '';
		$d['style']     = $d['size'] ? "style='font-size:{$d['size']}rem;'" : '';
		// Icons's html
		$d['icon']      = get_sub_field( 'icon' );
		$d['i']['icon'] = "<i class='fa {$d['icon']}' {$d['style']}></i>";
	endif;

	$d['icons'][$c] = $d['i'];
endwhile;

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/icons-list.php';