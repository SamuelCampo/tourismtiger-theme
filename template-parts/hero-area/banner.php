<?php 
/**
 * Hero area banner
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$d                     = array();
$classes               = array();
$attrs                 = array();
$style                 = array();

$classes[]             = 'banner';
$classes[]             = 'hero-area--wrapper__item';

$d['width']            = get_sub_field( 'width' );
$d['height']           = get_sub_field( 'height' );
$d['vertical-align']   = get_sub_field( 'vertical-align' );
$d['inner-width']      = get_sub_field( 'inner-width' );
$d['inner-align']      = get_sub_field( 'inner-align' );
$d['i-vertical-align'] = get_sub_field( 'inner-vertical-align' );

$classes[]             = $d['width'] ? "width_{$d['width']}" : '';
$classes[]             = $d['height'] ? "height_{$d['height']}" : '';
$classes[]             = $d['vertical-align'] ? "align-items_{$d['vertical-align']}" : '';
$classes[]             = $d['inner-width'] ? "inner-width_{$d['inner-width']}" : '';
$classes[]             = $d['inner-align'] ? "inner-align_{$d['inner-align']}" : '';
$classes[]             = $d['i-vertical-align'] ? "inner-vertical_{$d['i-vertical-align']}" : '';

$background            = get_background_attrs(); 
$attrs[]               = $background['attrs'] ? $background['attrs'] : '';
$style[]               = $background['style'] ? $background['style'] : '';

/**
 * Generate dividers
 */
$attrs[]               = get_dividers_attrs();

$attrs[]               = count( $classes ) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs[]               = count( $style ) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                 = count( $attrs ) > 0 ? generate_classlist( $attrs ) : '';

include THEME_VIEWS . 'hero-area/banner.php';