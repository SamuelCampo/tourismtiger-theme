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
		$the_row = the_row();

		// Core classes
		$core_classes        = array(); 
		$core_classes[]      = get_sub_field( 'hero_area-style' ) ? get_sub_field( 'hero_area-style' ) : 'style-default';
		$core_classes        = generate_classlist( $core_classes );


		// Layout classes
		$layout_classes       = array();
		$layout_classes[]     = get_sub_field( 'hero_area_banner-width' ) ? get_sub_field( 'hero_area_banner-width' ) : '';
		$layout_classes       = generate_classlist( $layout_classes );


		// Content classes
		$container_classes    = array();
		$container_classes[]  = get_sub_field( 'hero_area_size' ) ? get_sub_field( 'hero_area_size' ) : '';
		$container_classes[]  = get_sub_field( 'hero_area_width' ) ? get_sub_field( 'hero_area_width' ) : '';
		$container_classes[]  = get_sub_field( 'hero_area_align' ) ? get_sub_field( 'hero_area_align' ) : '';
		$container_classes[]  = get_sub_field( 'hero_area_text-align' ) ? get_sub_field( 'hero_area_text-align' ) : '';
		$container_classes[]  = get_sub_field( 'hero_area_vertical' ) ? get_sub_field( 'hero_area_vertical' ) : '';
		$container_classes    = generate_classlist( $container_classes );


		// Arrow
		$is_arrow             = get_sub_field( 'downward_arrow' );
		$arrow_back           = get_template_directory_uri() . '/assets/img/icons/hero-area/down.svg';
		$arrow_icon           = get_sub_field( 'downward_image' ) ? get_sub_field( 'downward_image' ) : $arrow_back;
		

		// Border divider
		$is_border_divider    = get_sub_field( 'is_border-divider' ) !== 'none' ? get_sub_field( 'is_border-divider' ) : false;
		$border_divider_color = get_sub_field( 'border-divider_color' );
		$border_divider_image = get_sub_field( 'border-divider_image' );


		// Overlay
		$is_overlay           = get_sub_field( 'hero-area_overlay' ) !== 'none' ? get_sub_field( 'hero-area_overlay' ) : false;
		$overlay              = get_sub_field( 'hero-area_overlay_color' );


		// Array of Content parameters
		$is_content           = get_heroarea_title_from_acf( $the_row ); 


		// Background variables
		$is_background        = get_heroarea_bg_from_acf( $the_row ); 


		// Components order
		$hero_order           = array(
			'background' => $is_background ? 'background' : false,
			'content'    => $is_content ? 'content' : false,
			'overlay'    => $is_overlay ? 'overlay' : false,
			'divider'    => $is_border_divider ? 'divider' : false,
			'arrow'      => $is_arrow ? 'arrow' : false
		);


		// Bottom panel variables
		$is_panel             = ( wp_is_mobile() && get_sub_field( 'ha_action_button' ) ); 
		$panel_button_label   = get_sub_field( 'action_button_label' ) ? get_sub_field( 'action_button_label' ) : 'Book now'; 
		$panel_button_url     = get_sub_field( 'action_button_url' ) ? get_sub_field( 'action_button_url' ) : '#.'; 


		// searchbox variables
		$is_searchbox         = get_sub_field( 'button_link_type' ) === 'searchbox'; 
		$type_searchbox       = get_sub_field( 'search_settings_type' );
		$classes_searchbox    = "hero-area--search__form hero-area--search__$type_searchbox";
		$content_searchbox    = $is_searchbox ? get_heroarea_searchbox_from_acf( $the_row ) : '';


		//button variables   
		$hero_button_label    = get_sub_field( 'cta_button_text' ) ? get_sub_field( 'cta_button_text' ) : 'Book now';

		include THEME_VIEWS . 'core/hero-area.php';

	endwhile;
endif;

?>