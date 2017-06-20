<?php 
/**
 * Seo data
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function include_seo_metadata() {
	global $post;

	/**
	 * Common variables
	 */
	$title       = get_the_title() . ' | ' . get_bloginfo( 'name' );
	?>

	<!-- Schema.org markup (Google) -->
	<meta itemprop="name" content="<?=$title;?>" />
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/fav/primary.png" />

	<!-- Open Graph markup (Facebook, Pinterest) -->
	<meta property="og:title" content="<?=$title;?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/fav/primary.png" />
	<meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>" />

	<!-- Include favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/safari-pinned-tab.svg" color="#c48f07">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/fav/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/img/fav/browserconfig.xml">
	<meta name="theme-color" content="#fefbe1">

	<?php
	return null;
}
add_action( 'wp_head', 'include_seo_metadata' );

?>