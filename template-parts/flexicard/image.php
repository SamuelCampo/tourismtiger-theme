<?php 
/**
 * Flexi card: Image
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'flexicard--image width_full';

$d['image']           = get_sub_field( 'image' ) ? get_sub_field( 'image' ) : '';
$d['image']           = $d['image'] ? "<img data-aload='{$d['image']['sizes']['1450-size']}' src='data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' alt='' />" : '';
$d['height']          = get_sub_field( 'height' );
$d['layouts']         = have_rows( 'layout' );

$classes[]            = $d['height'] ? "height_{$d['height']}" : '';

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
include THEME_VIEWS . 'flexicard/image.php';
