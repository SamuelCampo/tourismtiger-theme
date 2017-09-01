<?php 
/**
 * Grabbing data of Content card Map field
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

if ( $iframe ) :
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

	// margins
	$style[]              = get_margins_attrs();

	// Compile classes and attributes
	$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
	$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
	$attrs                = generate_classlist( $attrs );

	echo "<div {$attrs}>{$iframe}</div>";
endif;
