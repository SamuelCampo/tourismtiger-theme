<?php 
/**
 * Grabbing data of Content card HR Line field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'line';

$d['width']           = get_sub_field('width');
$classes[]            = "width_{$d['width']}";

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
echo "<hr class='{$classes}' {$attrs} />";
