<?php
/**
 * Enqueue assets.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * Enqueue scripts and styles.
 */
function wordpress_kit_scripts() {
	wp_enqueue_style( 'wordpress-kit-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), null, 'all' );
	wp_enqueue_style( 'wordpress-kit-responsive', get_template_directory_uri() . '/assets/css/main.min.responsive.css', array(), null, '(max-width:1230px)' );
	wp_enqueue_style( 'theme-styling', get_styling_stylesheet_uri() . '/styling.css' );
	wp_enqueue_script( 'tourismtiger-js', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'wordpress_kit_scripts' );

/**
 * Include AJAX
 */
function global_js_variables(){
	global $post;

	wp_localize_script('tourismtiger-js', 'global_var', 
		array(
			'url'             => admin_url('admin-ajax.php'),
			'post_id'         => $post->ID,
			'ajaxnonce'       => json_encode( wp_create_nonce( "ajax_nonce" ) ),
			'google_maps_key' => '1'
		)
	);  
}
add_action( 'wp_enqueue_scripts', 'global_js_variables', 99 );

?>