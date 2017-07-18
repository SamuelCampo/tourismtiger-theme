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
$style                = array(); // Regarding to button
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

// First title
if ( $d['first'] ) :
	$d['before'] .= "<p class='button-group__first-title'>{$d['first']}</p>";
endif;

// Decont title
if ( $d['secound'] ) :
	$d['before'] .= "<p class='button-group__second-title'>{$d['secound']}</p>";
endif;

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/button-group.php';
