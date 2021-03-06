<?php 
/**
 * Product: Section template
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$section_object = get_sub_field( 'product-section-id' );

if ( $section_object ) : 

	// override $post
	$post = $section_object;
	setup_postdata( $post );

	if ( have_rows( 'product-section-template', $post->ID ) ) :
		
		/**
		 * Loop components
		 */
		while ( have_rows( 'product-section-template', $post->ID ) ) :
			$the_component = the_row();
			$section_id    = 'pd-tl';
			$layout        = get_row_layout();

			get_template_part( "template-parts/common/{$layout}", 'product' );
		endwhile;

	endif;

	wp_reset_postdata();
endif;
