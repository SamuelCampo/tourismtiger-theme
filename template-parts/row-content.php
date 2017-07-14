<?php 
/**
 * Start columns loop
 *
 * @todo Blog settings
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


// Common 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'row--column';

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );


/**
 * Get section view
 */
include THEME_VIEWS . 'core/column.php';