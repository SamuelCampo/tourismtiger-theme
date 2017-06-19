<?php 
/**
 * Option page
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page( array(
    
        'page_title' => 'Template Options',
        'menu_slug' => 'acf-options',
        'menu_title' => 'Theme Options',
        'icon_url' => 'dashicons-welcome-widgets-menus',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        
    ) );
}

?>