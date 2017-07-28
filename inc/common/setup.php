<?php
/**
 * Setup theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( ! function_exists( 'wordpress_kit_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function wordpress_kit_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordpress Kit, use a find and replace
	 * to change 'wordpress-kit' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wordpress-kit', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
endif;

add_action( 'after_setup_theme', 'wordpress_kit_setup' );


/*
 * Custom log in logo
 */
function loginLogo() {
    echo '<style type="text/css">
        h1 a { background-image:url(' . get_bloginfo('template_directory') . '/assets/img/logo.png) !important; }
    </style>';
}
 
add_action('login_head', 'loginLogo');


/*
 * Copyrate in footer
 */
function true_change_admin_footer () {
	$footer_text = array(
		'Thanks you for сooperation with <a href="javascript:" target="_blank">Tourism Tiger</a>'
	);
	return implode( ' &bull; ', $footer_text);
}
 
add_filter('admin_footer_text', 'true_change_admin_footer');


/*
 * If user mistakes in login.
 */
function true_change_default_login_errors(){
	return '<strong>Sory</strong>: You have mistaken.';
}

/*
 * Hide version
 */
function true_remove_wp_version_wp_head_feed() {
	return '';
}
 
add_filter('the_generator', 'true_remove_wp_version_wp_head_feed');


/*
 * Fuck off bed responces
 */
if (strpos($_SERVER['REQUEST_URI'], "eval(") ||	strpos($_SERVER['REQUEST_URI'], "CONCAT") || strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||	strpos($_SERVER['REQUEST_URI'], "base64")) {
	@header("HTTP/1.1 400 Bad Request");
	@header("Status: 400 Bad Request");
	@header("Connection: Close");
	@exit;
}

/**
 * Forbid to edit theme's and plug-ins' code
 */
define( 'DISALLOW_FILE_EDIT', true );

?>