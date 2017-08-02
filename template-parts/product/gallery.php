<?php 
/**
 * Grabbing data of Product Gallery field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'gallery-slider';

// Common
$d['gallery']         = get_sub_field('gallery');
$d['type']            = get_sub_field('type');
$d['width']           = get_sub_field('width');
$d['additional']      = false; // whether to print additional slider. 
$d['cover']           = 'default'; // cover type

// additional settings 
if ( $d['type'] == 'full-screen' ) :
	$d['additional'] = $d['type'];
	$d['cover']      = $d['type'];
	$d['label']      = get_sub_field('label');

endif;

$classes[]            = "type_{$d['type']}";
$classes[]            = "width_{$d['width']}";
$classes[]            = "cover_{$d['cover']}";

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
include THEME_VIEWS . 'common/gallery.php';
