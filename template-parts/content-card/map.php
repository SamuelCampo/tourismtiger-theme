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
$classes[]            = 'acf-map';
$classes[]            = 'map';

$d['width']           = get_sub_field('width');
$classes[]            = "width_{$d['width']}";

$location             = get_sub_field('location');
$d['content']         = "<div class='marker' data-lat='{$location['lat']}' data-lng='{$location['lng']}'></div>";

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/map.php';
