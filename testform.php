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
	the_gform( 1 );
endif;

get_footer();
