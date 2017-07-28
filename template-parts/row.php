<?php 
/**
 * Grabbing data of Primnary content row field
 *
 * @todo Blog settings
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); // just for keep row values
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'row';


// Row type
$type                 = get_sub_field( 'type' ); 


// Options
$d['cols_count']      = get_sub_field( 'cols-count' ); 
$d['layout']          = get_sub_field( 'layout' ); 
$d['cols_margins']    = get_sub_field( 'cols-margins' ); 
$d['width']           = get_sub_field( 'width' ); 
$d['position']        = get_sub_field( 'position' ); 
$d['vertical']        = get_sub_field( 'vertical-placement' ); 
$d['cols_placement']  = get_sub_field( 'cols-placement' ); 
$d['margin_top']      = get_sub_field( 'margin_top' ); 
$d['margin_bottom']   = get_sub_field( 'margin_bottom' ); 
$d['background']      = get_sub_field( 'background' );

$classes[]            = 'layout_' . $d['layout'];
$classes[]            = 'width_' . $d['width'];
$classes[]            = 'position_' . $d['position'];
$classes[]            = 'vertical_' . $d['vertical'];
$classes[]            = 'cols_placement_' . $d['cols_placement'];
$classes[]            = 'cols_margins_' . $d['cols_margins'];

$style[]              = $d['margin_top'] ? "margin-top:{$d['margin_top']};" : '';
$style[]              = $d['margin_bottom'] ? "margin-top:{$d['margin_bottom']};" : '';


// Row type: Grid
if ( $d['layout'] == 'grid' ) :
	$d['cols_align']      = get_sub_field( 'cols-align' ); 
	$d['cols_ratio']      = get_sub_field( 'cols-ratio' ); 

	$classes[]            = 'cols_align_' . $d['cols_align'];
	$classes[]            = 'cols_count_' . $d['cols_count'];

	if ( $d['cols_count'] == 2 ) :
		$classes[]            = 'cols_ratio_' . $d['cols_ratio'];
	endif;
endif;


// Row type: Carousel
if ( $d['layout'] == 'carousel' ) :
	$d['slides_scroll']   = get_sub_field( 'slides_scroll' ); 
	$d['show_dots']       = get_sub_field( 'show_dots' ); 
	$d['arrows_type']     = get_sub_field( 'arrows_type' ); 
	$d['arrows_size']     = get_sub_field( 'arrows_size' ); 
	$d['arrows_weight']   = get_sub_field( 'arrows_weight' ); 
	$d['arrows_position'] = get_sub_field( 'arrows_position' ); 

	$attrs[]              = "data-scroll='{$d['slides_scroll']}'";
	$attrs[]              = "data-columns='{$d['cols_count']}';";
	$attrs[]              = "data-dots='{$d['show_dots']}';";

	if ( $d['arrows_type'] == 'custom' ) :
		$classes[]            = 'arrows_size_' . $d['arrows_size'];
		$classes[]            = 'arrows_weight' . $d['arrows_weight'];
		$classes[]            = 'arrows_position' . $d['arrows_position'];
	endif;
endif;

// Background 
if ( $d['background'] != 'none' ) :
	$d['texture']     = get_sub_field( 'background_texture' ); 
	$d['color']       = get_sub_field( 'background_color' ); 

	$classes[]        = 'background_' . $d['background'];

	$style[]          = $d['background'] == 'texture' ? "background-image:url({$d['texture']});" : '';
	$style[]          = $d['background'] == 'color' ? "background-color:{$d['color']};" : '';
endif;

// Compile classes and attributes
$attrs[]              = 'style="' . generate_classlist( $style ) . '"';
$classes              = generate_classlist( $classes );
$attrs                = generate_classlist( $attrs );


/**
 * Get section view
 */
include THEME_VIEWS . 'core/row.php';
