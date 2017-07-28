<?php 
/**
 * Grabbing data of Content card Accordion field
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
$d['open']            = get_sub_field('open');
$d['close']           = get_sub_field('close');
$d['wysiwyg']         = get_sub_field('wysiwyg');

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/accordion.php';

