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
$attrs_wrap           = array(); // Regarding to wrapper
$style                = array(); // Regarding to button
$style_wrap           = array(); // Regarding to wrapper
$classes              = array(); // Regarding to button
$classes_wrap         = array(); // Regarding to wrapper
$d['before']          = '';

$classes[]            = 'button';
$classes_wrap[]       = 'button-group';

// Common
$d['align']           = get_sub_field('align');
$classes_wrap[]       = $d['align'] ? "align_{$d['align']}" : '';

// Button values
$d['btn']           = get_sub_field('button');
$d['btn']           = get_button( $d['btn'], $classes );

// Text fields
$d['content']         = get_sub_field('content');

// Titles
$d['before']         .= $d['content'] ? "<div class='button-group--content wysiwyg'>{$d['content']}</div>" : '';

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes to wrapper
$attrs_wrap[]         = count($style_wrap) > 0 ? 'style="' . generate_classlist( $style_wrap ) . '"' : '';
$attrs_wrap[]         = count($classes_wrap) > 0 ? 'class="' . generate_classlist( $classes_wrap ) . '"' : '';
$attrs_wrap           = generate_classlist( $attrs_wrap );

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                = generate_classlist( $attrs );

echo $d['btn'] ? "<div {$attrs_wrap}>{$d['before']}{$d['btn']}</div>" : '';