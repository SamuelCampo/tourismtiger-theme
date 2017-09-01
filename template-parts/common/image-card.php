<?php 
/**
 * Grabbing data of Image card
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'image-card';

// Content
$d['image']           = get_sub_field( 'image' ) ? wp_get_attachment_image( get_sub_field( 'image' ), '850-size' ) : '';
$d['content']         = get_sub_field( 'content' );

// Layout
$d['layout']          = get_sub_field( 'layout' );
$classes[]            = "layout_{$d['layout']}";

// margins
$style[]              = get_margins_attrs();

// Compile attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
if ( $d['image'] )
	include THEME_VIEWS . 'common/image-card.php';

