<?php 
/**
 * Grabbing data of Content card Button field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array();
$attrs                = array(); 
$style                = array(); 
$classes              = array(); // Regarding to button
$classes_wrap         = array(); // Regarding to wrapper

$classes[]            = 'button';
$classes_wrap[]       = 'button--wrapper';
$classes_wrap[]       = 'width_inline'; # todo add another width layouts


$d['btn'] = get_sub_field( 'button' );
$d['btn'] = get_button( $d['btn'], $classes );

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($classes_wrap) > 0 ? 'class="' . generate_classlist( $classes_wrap ) . '"' : '';
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                = generate_classlist( $attrs );

echo $d['btn'] ? "<div {$attrs}>{$d['btn']}</div>" : '';
