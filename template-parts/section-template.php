<?php 
/**
 * Grabbing data of Primnary content section template field
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$section_object = get_sub_field( 'section-id' );

if ( $section_object ) : 

	// override $post
	$post = $section_object;
	setup_postdata( $post );

	if ( have_rows( 'primary-content-template' ) ) :
		while ( have_rows( 'primary-content-template' ) ) :
			$the_section_row = the_row();
			$section_id      = 'sec-tem';

			include get_template_directory() . '/template-parts/section.php';
		endwhile;
	endif;

	wp_reset_postdata();
endif;


