<?php 
/**
 * Hero area banner
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$d           = array();
$classes     = array();
$attrs       = array();
$style       = array();

// background
$background  = get_sub_field( 'background' );
$background  = get_background_attrs( $background );
$attrs[]     = $background['attrs'] ? $background['attrs'] : '';
$style[]     = $background['style'] ? $background['style'] : '';

// background
$dividers    = get_sub_field( 'dividers' );
$dividers    = get_dividers_attrs( $dividers );
$attrs[]     = $dividers ? $dividers : '';

$classes     = count( $classes ) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs       = count( $attrs ) > 0 ? generate_classlist( $attrs ) : '';