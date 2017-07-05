<?php 
/**
 * Themplate Plugins
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_template_directory() . '/plugins/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_template_directory_uri() . '/plugins/acf/';
    
    // return
    return $dir;
    
}

// 3. customize ACF Accordion and RGBA field dirs
add_filter( 'acf/accordion/dir', 'acf_accordion_dir' );
function acf_accordion_dir( $dir ) {
    $dir = get_template_directory_uri() . '/plugins/acf-accordion/';
    return $dir;
}

add_filter( 'acf/rgba_color/dir', 'acf_rgba_color_dir' );
function acf_rgba_color_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/plugins/acf-rgba-color/';

    return $dir;
}

add_filter( 'acf/typography/dir', 'acf_typography_dir' );
function acf_typography_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/includes/plugins/acf-typography/';

    return $dir;
}
 

// 4. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( THEME_PATH . '/plugins/acf/acf.php' );
include_once( THEME_PATH . '/plugins/acf-accordion/acf-accordion.php' );
include_once( THEME_PATH . '/plugins/acf-rgba-color/acf-rgba-color.php' );
include_once( THEME_PATH . '/plugins/acf-typography/acf-typography.php' );
include_once( THEME_PATH . '/plugins/acf-styling-manager-field/acf-styling-manager.php' );

?>