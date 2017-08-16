<?php 
/**
 * Grabbing data of Content card Button field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); // just for keep row values
$attrs                = array(); // Regarding to button
$style                = array(); // Regarding to button
$classes              = array(); // Regarding to button
$classes[]            = 'button';
$classes[]            = 'width_box';

$d['label']           = get_sub_field( 'label' ) ? get_sub_field( 'label' ) : 'Book now';
$d['type']            = get_sub_field( 'type' ) ? get_sub_field( 'type' ) : 'link';
$d['action']          = get_sub_field( 'action' ) ? get_sub_field( 'action' ) : '#.';
$d['counter']         = 0;
$d['href']            = '#.';

// Set parameters accordion button type
if ( $d['type'] == 'link' ) :
	$d['href']        = $d['action'];

elseif ( $d['type'] == 'dropdown' && have_rows( 'dropdown' ) ) :
	while ( have_rows( 'dropdown' ) ) :
		the_row();
		$c = $d['counter'];

		$d['action'][$c]['label']  = get_sub_field( 'label' );
		$d['action'][$c]['type']   = get_sub_field( 'type' );
		$d['action'][$c]['action'] = get_sub_field( 'action' );
	endwhile;
endif;

$d['href']            = "href='{$d['href']}'";

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
include THEME_VIEWS . 'common/button.php';
