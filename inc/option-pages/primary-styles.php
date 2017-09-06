<?php 
/**
 * Option page: Primary Styles
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_options_sub_page') ) :

	$primary_content = acf_add_options_page(array(
		'page_title'   => 'Theme Styles',
		'menu_title'   => 'Theme Styles',
		'menu_slug'    => 'acf-theme-styles',
		'icon_url'     => 'dashicons-align-left',
		'post_id'      => 'styles',
		'redirect'     => true,
	));

endif;