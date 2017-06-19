<?php 
/**
 * Option page: Primary Styles
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_options_sub_page') ) :

	$primary_content = acf_add_options_page(array(
		'page_title'   => 'Primary Styles',
		'menu_title'   => 'Primary Styles',
		'menu_slug'    => 'acf-options-primary-area-styles',
		'icon_url'     => 'dashicons-align-left',
	));

endif;