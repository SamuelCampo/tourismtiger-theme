<?php 
/**
 * Accordion component
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'accordion';

// Text
$d['label']           = get_sub_field('label');
$d['open']            = get_sub_field('open') ? get_sub_field('open') : 'Show more';
$d['close']           = get_sub_field('close') ? get_sub_field('close') : 'Show less';
$d['wysiwyg']         = get_sub_field('wysiwyg');

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
if ( $d['label'] && $d['wysiwyg'] )
	include THEME_VIEWS . 'common/accordion.php';

