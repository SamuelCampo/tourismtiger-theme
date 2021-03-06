<?php 
/**
 * Flexi card: Content
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'flexicard--content';

$d['title']           = get_sub_field( 'title' );
$d['description']     = get_sub_field( 'description' );
$d['price']           = get_sub_field( 'price' );
$d['label']           = get_sub_field( 'label' );

$d['type']            = get_sub_field( 'type' );
$classes[]            = $d['type'] && $d['type'] != 'default' ? "type-{$d['type']}" : 'wysiwyg';

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'flexicard/content.php';
