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

$iframe = '<iframe src="' . get_sub_field( 'video' ) . '"></iframe>';

preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];
$params = array(
    'controls'    => 1,
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);
$attributes = 'frameborder="0"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/oembed.php';