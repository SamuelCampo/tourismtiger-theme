<?php
/**
 * Template name: Testform
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

get_header();

if ( class_exists( 'GFAPI' ) ) :
	$form = GFAPI::get_form( 1 );

	$html = the_gform( $form );

	print_r_html($form);
endif;

get_footer();
