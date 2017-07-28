<?php 
/**
 * Grabbing data of Content card Map field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array();
$d['content']         = '';
$attrs                = array();
$style                = array();

$d['image']           = get_sub_field('image');
$d['shape']           = get_sub_field('shape');
$d['width']           = get_sub_field('width');

// Url settings
$d['url']             = get_sub_field('url');
$d['target']          = get_sub_field('target') ? 'target="_blank"' : '';

// Get image view
$d['start'] = $d['url'] ? "a href='{$d['url']}' {$d['target']}" : 'div';
$d['end']   = $d['url'] ? "a" : 'div';

// Margins
$d['margin_top']      = get_sub_field( 'margin_top' ) ? get_sub_field( 'margin_top' ) / 10 : false;
$d['margin_bottom']   = get_sub_field( 'margin_bottom' ) ? get_sub_field( 'margin_bottom' ) / 10 : false;

if ( $d['margin_top'] ) 
	$style[]          = "margin-top:{$d['margin_top']}rem;";

if ( $d['margin_bottom'] ) 
	$style[]          = "margin-bottom:{$d['margin_bottom']}rem;";

$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/image.php';