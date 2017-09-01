<?php 
/**
 * Grabbing data of Gallery field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'gallery-slider';

// Common
$d['gallery']         = get_sub_field('gallery');
$d['type']            = get_sub_field('type');
$d['width']           = get_sub_field('width');
$d['additional']      = false; // whether to print additional slider. 
$d['cover']           = 'default'; // cover type

// additional settings 
if ( $d['type'] == 'full-screen' ) :
	$d['additional'] = $d['type'];
	$d['cover']      = $d['type'];
	$d['label']      = get_sub_field('label') ? get_sub_field('label') : 'SEE FULL GALLERY';
endif;

$classes[]            = "type_{$d['type']}";
$classes[]            = "width_{$d['width']}";
$classes[]            = "cover_{$d['cover']}";

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
if ( $d['gallery'] )
	include THEME_VIEWS . 'common/gallery.php';
