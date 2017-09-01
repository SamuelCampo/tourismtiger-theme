<?php 
/**
 * Flexi card: Image
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'flexicard--image';
$classes[]            = 'width_full';

$size                 = set_image_width();

$d['image']           = get_sub_field( 'image' ) ? get_sub_field( 'image' ) : '';
$d['image']           = $d['image'] ? "<img data-aload='{$d['image']['sizes'][$size]}' src='data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' alt='' />" : '';

$d['height']          = get_sub_field( 'height' );
$d['layouts']         = have_rows( 'layout' );

$classes[]            = $d['height'] ? "height_{$d['height']}" : '';

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );


/**
 * Get section view
 */
include THEME_VIEWS . 'flexicard/image.php';
