<?php 
/**
 * Image Sizes 
 *
 * @package Dev_Theme
 * @author  team-name
 */


/** 
 * In loop:
 * 
 * if ( has_post_thumbnail() ) {
 *     the_post_thumbnail( 'category-thumb' ); // category-thumb - название размера
 * }
 */

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( '1450-size', 1450, 1450 ); 
	add_image_size( '1150-size', 1150, 1150 ); 
	add_image_size( '1000-size', 1000, 1000 ); 
	add_image_size( '850-size', 850, 850 ); 
	add_image_size( '700-size', 700, 700 ); 
	add_image_size( '500-size', 500, 500 );  
	add_image_size( '350-size', 350, 350 );  
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'1450-size' => 'Size 1400',
		'1150-size' => 'Size 1150',
		'1000-size' => 'Size 1000',
		'850-size'  => 'Size 850',
		'700-size'  => 'Size 700',
		'500-size'  => 'Size 500',
		'350-size'  => 'Size 350',
	) );
}

?>