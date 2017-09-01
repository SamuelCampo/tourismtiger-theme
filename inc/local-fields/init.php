<?php 
/**
 * Includes all local fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
if( function_exists('acf_add_local_field_group') ) :
	include get_template_directory() . '/inc/local-fields/clones.php';
	include get_template_directory() . '/inc/local-fields/api.php';
	include get_template_directory() . '/inc/local-fields/hero-area.php';
	include get_template_directory() . '/inc/local-fields/primary-content.php';
	include get_template_directory() . '/inc/local-fields/product.php';
	include get_template_directory() . '/inc/local-fields/testimonials-page.php';
	include get_template_directory() . '/inc/local-fields/api-keys.php';
endif;
?>
