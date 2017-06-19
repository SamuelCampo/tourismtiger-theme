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
	wp_enqueue_style( 'wordpress-kit-responsive', get_template_directory_uri() . '/assets/css/main.min.responsive.css', array(), null, 'all (max-width:1230px)' );
	wp_enqueue_script( 'wordpress-kit', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'wordpress_kit_scripts' );

/**
 * Include AJAX
 */
function global_js_variables(){
	global $post;

	wp_localize_script('wordpress-kit-js', 'global', 
		array(
			'url'       => admin_url('admin-ajax.php'),
			'post_id'   => $post->ID,
			'ajaxnonce' => json_encode( wp_create_nonce( "ajax_nonce" ) );
		)
	);  
}
add_action( 'wp_enqueue_scripts', 'global_js_variables', 99 );

?>