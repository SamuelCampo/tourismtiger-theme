<?php 
/**
 * Flexi card: Layout
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$counter = 0;

while ( have_rows( 'layout' ) ) :
	$counter++;
	$the_layout       = the_row();
	$layout           = get_row_layout();
	$attrs            = array();
	$style            = array();
	$classes          = array();
	
	$classes[]        = 'flexicard--layout';
	$classes[]        = "flexicard--layout__{$layout}";
	$classes[]        = "wysiwyg";


	$d['title']       = get_sub_field( 'title' );
	$d['description'] = get_sub_field( 'description' );
	$d['price']       = get_sub_field( 'price' );
	$d['label']       = get_sub_field( 'label' );

	$d['type']        = get_sub_field( 'type' );
	$classes[]        = $d['type'] && $d['type'] != 'default' ? "type-{$d['type']}" : '';

	$attrs[]          = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
	$attrs[]          = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
	$attrs            = generate_classlist( $attrs );

	/**
	 * Get section view
	 */
	include THEME_VIEWS . 'flexicard/content.php';
endwhile;