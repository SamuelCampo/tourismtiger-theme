<?php 
/**
 * Grabbing data of Product Image card field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'trip-details';

// Core content
$d['label']           = get_sub_field( 'label' );
$d['detail']          = get_sub_field( 'detail' );
$d['is-accordion']    = get_sub_field( 'is-accorion' );
$d['is-icon']         = get_sub_field( 'is-icon' );
$d['link-label']      = '';
$d['icon']            = '';
$d['hidden-content']  = '';

// Accordion
if ( $d['is-accordion'] ) :
	$d['link-label']     = get_sub_field( 'link-label' ) ? get_sub_field( 'link-label' ) : 'Show more';
    $d['link-label']     = "<nobr><a href='javascript:' class='trip-details__trigger js-trigger'>{$d['link-label']}</a></nobr>";
	$d['hidden-content'] = get_sub_field( 'hidden-content' );
endif;

// Icon
if ( $d['is-icon'] ) :
	$d['icon']        = get_sub_field( 'icon' ) ? get_sub_field( 'icon' ) : '';
	$d['icon']        = $d['icon'] ? "<i class='fa {$d['icon']}'></i>" : '';
endif;

// Margins
$d['margin_top']      = get_sub_field( 'margin_top' ) ? get_sub_field( 'margin_top' ) / 10 : false;
$d['margin_bottom']   = get_sub_field( 'margin_bottom' ) ? get_sub_field( 'margin_bottom' ) / 10 : false;

if ( $d['margin_top'] ) 
	$style[]          = "margin-top:{$d['margin_top']}rem;";

if ( $d['margin_bottom'] ) 
	$style[]          = "margin-bottom:{$d['margin_bottom']}rem;";

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
include THEME_VIEWS . 'common/trip-details.php';