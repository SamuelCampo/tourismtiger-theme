<?php 
/**
 * Grabbing data of Product Map field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'oembed';

$iframe               = get_sub_field( 'video' );
preg_match('/src="(.+?)"/', $iframe, $matches);

$src                  = $matches[1];
$params               = array(
    'controls'        => 1,
    'hd'              => 1,
    'autohide'        => 1
);
$new_src              = add_query_arg($params, $src);
$iframe               = str_replace($src, $new_src, $iframe);
$attributes           = 'frameborder="0"';
$iframe               = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

$d['width']           = get_sub_field('width');
$classes[]            = "width_{$d['width']}";

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
include THEME_VIEWS . 'common/oembed.php';
