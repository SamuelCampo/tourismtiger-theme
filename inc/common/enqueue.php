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
function tourismtiger_assets() {
	wp_enqueue_style( 'tourismtiger-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), false, 'all' );
	wp_enqueue_style( 'tourismtiger-responsive', get_template_directory_uri() . '/assets/css/main.min.responsive.css', array(), false, '(max-width:1364px)' );
	wp_enqueue_style( 'theme-styling', get_styling_stylesheet_uri() . '/styling.css', array(), null, 'all' );
	wp_enqueue_script( 'googme-maps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRJz_DMLCdqsfRwyysbIaWvzDxIIKzmaU', array(), false, true );
	wp_enqueue_script( 'tourismtiger-js', get_template_directory_uri() . '/assets/js/main.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'tourismtiger_assets' );


/**
 * Defer attribute to scripts
 */
function add_defer_attribute($tag, $handle) {

   // add script handles to the array below
   $scripts_to_defer = array( 'wp-embed', 'tourismtiger-js', 'googme-maps-js' );
   
   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


/**
 * Global JAvascript values
 * Can be used through javascript
 * 
 * @example global_var.ajax - will return direct link to admin-ajax.php
 * @example global_var.post_id - will return ID of the current post
 */
function global_js_variables(){
	global $post;

	// API Keys
	$gf_public   = get_field('gf_public_key','apikey') ? get_field('gf_public_key','apikey') : 0;
	$gf_private  = get_field('gf_private_key','apikey') ? get_field('gf_private_key','apikey') : 0;
	$google_maps = get_field('google_maps','apikey') ? get_field('google_maps','apikey') : 0;
	$re_captcha  = get_field('re_captcha','apikey') ? get_field('re_captcha','apikey') : 0;

	// Creates variables and past them 
	//after tourismtiger-js script
	wp_localize_script('tourismtiger-js', 'global_var', 
		array(
			'ajax'            => admin_url('admin-ajax.php'),
			'post_id'         => $post->ID,
			'ajaxnonce'       => wp_create_nonce( "ajax_nonce" ),
			'gf_public_key'   => $gf_public,
			'gf_private_key'  => $gf_private,
			'google_maps_key' => $google_maps,
			're_captcha_key'  => $re_captcha,
			'url'             => get_bloginfo( 'url' ),
			'theme_url'       => get_template_directory_uri()
		)
	);  
}
add_action( 'wp_enqueue_scripts', 'global_js_variables', 99 );

?>