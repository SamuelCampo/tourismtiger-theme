<?php 
/**
 * Grabbing data of Primnary content row field
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$attrs      = array();
$style      = array();
$classes    = array();
$classes[]  = 'row';

// Row options 
$width      = get_sub_field( 'width' );
$wrap       = get_sub_field( 'wrap' );
$position   = get_sub_field( 'position' ); 
$align_self = get_sub_field( 'align-self' ); 

$classes[]  = $width != 'full' ? 'row_width-' . $width : '';
$classes[]  = $wrap != 'wrap' ? 'row_wrap-' . $wrap : '';
$classes[]  = $position != 'center' ? 'row_position-' . $position : '';
$classes[]  = $align_self != 'stretch' ? 'row_align-self-' . $align_self : '';

// Columns flow Options
$col_count  = get_sub_field( 'col-count' ); 
$margin     = get_sub_field( 'margin' ); 
$alignment  = get_sub_field( 'alignment' ); 
$align_self = get_sub_field( 'align-items' ); 
$justify    = get_sub_field( 'justify-content' ); 
$ratio      = get_sub_field( 'ratio' ); 

$classes[]  = $col_count != 1 ? 'row_col-count-' . $col_count : '';
$classes[]  = $margin != 'none' ? 'row_margin-' . $margin : '';
$classes[]  = $alignment != 'auto' ? 'row_alignment-' . $alignment : '';
$classes[]  = $align_self != 'stretch' ? 'row_align-items-' . $align_self : '';
$classes[]  = $col_count == 2 ? 'row_justify-content-' . $justify : '';
$classes[]  = $col_count == 2 ? 'row_ratio-' . $ratio : '';

// Compile classes and attributes
$classes    = generate_classlist( $classes );
$attrs      = generate_classlist( $attrs );


/**
 * Get section view
 */
include THEME_VIEWS . 'core/row.php';
