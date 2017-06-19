<?php 
/**
 * Themplate Plugins
 *
 * @package Dev_Theme
 * @author  team-name
 */

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/plugins/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/plugins/acf/';
    
    // return
    return $dir;
    
}

// 3. customize ACF Accordion dir
add_filter( 'acf/accordion/dir', 'acf_accordion_dir' );
function acf_accordion_dir( $dir ) {
    $dir = get_template_directory_uri() . '/plugins/acf-accordion/acf-accordion/';
    return $dir;
}
 

// 4. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_template_directory() . '/plugins/acf/acf.php' );
include_once( get_template_directory() . '/plugins/acf-accordion/acf-accordion.php' );

?>