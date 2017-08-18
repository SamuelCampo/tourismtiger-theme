<?php 
/**
 * API Keys page
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'API Keys',
		'menu_title' 	=> 'API Keys',
		'parent_slug' 	=> 'options-general.php',
		'menu_slug' => 'api-keys',
		'post_id' => 'apikey',
	));
}

?>