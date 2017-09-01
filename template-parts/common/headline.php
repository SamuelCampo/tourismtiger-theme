<?php 
/**
 * Headline
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); // just for keep row values
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'headline';
$d['content']         = get_sub_field('text');
$d['tag']             = get_sub_field('tag');
$d['align']           = get_sub_field('align');

if ( $d['align'] ) 
	$classes[]       = "text-align_{$d['align']}";

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

echo $d['content'] ? "<{$d['tag']} {$attrs}>{$d['content']}</{$d['tag']}>" : '';
