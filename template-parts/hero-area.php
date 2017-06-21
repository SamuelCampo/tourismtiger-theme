<?php 
/**
 * Hero area
 *
 * Here we get all nesesarily variables 
 * of Hero Area component and include Hero Area template view
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if ( have_rows( 'hero_area' ) ) : 
	while ( have_rows( 'hero_area' ) ) : 
		the_row();

		// Core classes
		$core_classes   = array(); 
		$core_classes[] = get_sub_field( 'hero_area-style' ) ? get_sub_field( 'hero_area-style' ) : 'style-default';
		$core_classes   = generate_classlist( $core_classes );

		// Layout classes
		$layout_classes   = array();
		$layout_classes[] = get_sub_field( 'hero_area_banner-width' ) ? get_sub_field( 'hero_area_banner-width' ) : '';
		$layout_classes   = generate_classlist( $layout_classes );

		// Content classes
		$container_classes   = array();
		$container_classes[] = get_sub_field( 'hero_area_size' ) ? get_sub_field( 'hero_area_size' ) : '';
		$container_classes[] = get_sub_field( 'hero_area_width' ) ? get_sub_field( 'hero_area_width' ) : '';
		$container_classes[] = get_sub_field( 'hero_area_align' ) ? get_sub_field( 'hero_area_align' ) : '';
		$container_classes[] = get_sub_field( 'hero_area_text-align' ) ? get_sub_field( 'hero_area_text-align' ) : '';
		$container_classes[] = get_sub_field( 'hero_area_vertical' ) ? get_sub_field( 'hero_area_vertical' ) : '';
		$container_classes   = generate_classlist( $container_classes );

		// Arrow
		$is_arrow   = get_sub_field( 'downward_arrow' );
		$arrow_back = get_template_directory_uri() . '/assets/img/icons/hero-area/down.svg';
		$arrow_icon = get_sub_field( 'downward_image' ) ? get_sub_field( 'downward_image' ) : $arrow_back;
		
		// Border divider
		$is_border_divider    = get_sub_field( 'is_border-divider' ) !== 'none' ? get_sub_field( 'is_border-divider' ) : false;
		$border_divider_color = get_sub_field( 'border-divider_color' );
		$border_divider_image = get_sub_field( 'border-divider_image' );

		// Overlay
		$is_overlay = get_sub_field( 'hero-area_overlay' ) !== 'none' ? get_sub_field( 'hero-area_overlay' ) : false;
		$overlay    = get_sub_field( 'hero-area_overlay_color' );

		include THEME_VIEWS . 'core/hero-area.php';

	endwhile;
endif;

?>