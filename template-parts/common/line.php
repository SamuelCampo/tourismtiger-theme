<?php 
/**
 * HR line
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

$d['style']           = get_sub_field('style');
$classes[]            = $d['style'] != 'solid' ? "border-style_{$d['style']}" : '';

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
echo "<hr class='{$classes}' {$attrs} />";
