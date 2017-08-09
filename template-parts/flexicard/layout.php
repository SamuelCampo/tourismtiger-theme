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
	$classes          = array();
	$classes[]        = 'flexicard--layout';
	$classes[]        = "flexicard--layout__{$layout}";


	$d['title']       = get_sub_field( 'title' );
	$d['description'] = get_sub_field( 'description' );
	$d['price']       = get_sub_field( 'price' );
	$d['label']       = get_sub_field( 'label' );

	$classes          = generate_classlist( $classes );

	/**
	 * Get section view
	 */
	include THEME_VIEWS . 'flexicard/content.php';
endwhile;