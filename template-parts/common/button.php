<?php 
/**
 * Grabbing data of Content card Button field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array();
$attrs                = array(); 
$style                = array(); 
$classes              = array(); // Regarding to button
$classes_wrap         = array(); // Regarding to wrapper
$classes[]            = 'button';
$classes_wrap[]       = 'button--wrapper';
$classes_wrap[]       = 'width_inline';


$d['btn'] = get_sub_field( 'button' );
$d['btn'] = get_button( $d['btn'], $classes );

// Margins
$d['margin_top']      = get_sub_field( 'margin_top' ) ? get_sub_field( 'margin_top' ) / 10 : false;
$d['margin_bottom']   = get_sub_field( 'margin_bottom' ) ? get_sub_field( 'margin_bottom' ) / 10 : false;

if ( $d['margin_top'] ) 
	$style[]          = "margin-top:{$d['margin_top']}rem;";

if ( $d['margin_bottom'] ) 
	$style[]          = "margin-bottom:{$d['margin_bottom']}rem;";

// Compile classes and attributes
$attrs[]              = count($classes_wrap) > 0 ? 'class="' . generate_classlist( $classes_wrap ) . '"' : '';
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . "common/button.php";
