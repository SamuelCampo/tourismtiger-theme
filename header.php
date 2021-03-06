<?php
/**
 * Header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */
?>

<!doctype html>
<html itemscope itemtype="http://schema.org/WebPage">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

		<?php wp_head(); ?>

	</head>

	<body>
		<div id="wrapper">
			<div id="body-class" <?php body_class(); ?>>

			<?php
			/**
			 * Get hero area
			 */
			get_template_part( 'template-parts/hero-area' );
			?>





