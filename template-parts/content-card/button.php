<?php 
/**
 * Grabbing data of Content card Button field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); // just for keep row values
$attrs                = array(); // Regarding to button
$attrs_wrap           = array(); // Regarding to wrapper
$style                = array(); // Regarding to button
$style_wrap           = array(); // Regarding to wrapper
$classes              = array(); // Regarding to button
$classes[]            = 'button';

// Common
$d['align']           = get_sub_field('align');

$classes[]            = "align_{$d['align']}";

// Button values
$d['label']           = get_sub_field('label');
$d['url']             = get_sub_field('url');

$attrs[]              = $d['url'] ? "href='{$d['url']}'" : 'href="javascript:"';

// Text fields
$d['first']           = get_sub_field('first');
$d['secound']         = get_sub_field('secound');

$d['before']         = '';

// Titles
if ( $d['first'] || $d['secound'] ) :
	$d['before'] .= '<div class="button-group--title">';
	$d['before'] .= $d['first'] ? "<p class='button-group--title_1'>{$d['first']}</p>" : '';
	$d['before'] .= $d['secound'] ? "<p class='button-group--title_2'>{$d['secound']}</p>" : '';
	$d['before'] .= '</div>';
endif;

// Margins
$d['margin_top']      = get_sub_field( 'margin_top' ) ? get_sub_field( 'margin_top' ) / 10 : false;
$d['margin_bottom']   = get_sub_field( 'margin_bottom' ) ? get_sub_field( 'margin_bottom' ) / 10 : false;

if ( $d['margin_top'] ) 
	$style[]          = "margin-top:{$d['margin_top']}rem;";

if ( $d['margin_bottom'] ) 
	$style[]          = "margin-bottom:{$d['margin_bottom']}rem;";

// Compile classes and attributes to wrapper
$attrs_wrap[]         = count($style_wrap) > 0 ? 'style="' . generate_classlist( $style_wrap ) . '"' : '';
$attrs_wrap           = generate_classlist( $attrs_wrap );

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/button-group.php';
