<?php 
/**
 * ACF local fields: Hero area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(array (
		'key' => 'pc_hero_area_root',
		'title' => 'Hero Area',
		'fields' => array (
			array (
				'key' => 'pc_ha',
				'label' => 'Hero Area',
				'name' => 'hero_area',
				'type' => 'flexible_content',
				'required' => 0,
				'button_label' => 'Add Hero Area',
				'max' => 1,
				'layouts' => array (
					array (
						'key' => 'pc_ha_la',
						'name' => 'pc_hero',
						'label' => 'Hero',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'key' => 'pc_ha_tab_2',
								'label' => 'General',
								'name' => 'pc_ha_tab_2',
								'type' => 'tab',
								'required' => 0,
								'placement' => 'top',
							),
							array (
								'key' => 'field_hero-style',
								'label' => 'Hero Area Style',
								'name' => 'hero_area-style',
								'type' => 'select',
								'required' => 0,
								'choices' => get_available_styles_list( 'hero_area' ),
								'default_value' => 'Style 1',
							),
							array (
								'key' => 'pc_ha_003-width',
								'label' => 'Hero Width',
								'name' => 'hero_area_banner-width',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33',
								),
								'choices' => array (
									'width_box' => 'Fit in site grid',
									'width_full' => 'Full width'
								),
								'default_value' => 'width_full',
							),
							array (
								'key' => 'pc_ha_003',
								'label' => 'Hero Height',
								'name' => 'hero_area_size',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33',
								),
								'choices' => array (
									'height_short' => 'Short',
									'height_medium' => 'Medium',
									'height_tall' => 'Tall',
								),
								'default_value' => 'height_short',
							),
							array (
								'key' => 'pc_ha_009',
								'label' => 'Content Alignment',
								'name' => 'hero_area_align',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33',
								),
								'choices' => array (
									'align_left' => 'Left',
									'align_center' => 'Center',
									'align_right' => 'Right',
								),
								'default_value' => 'align_center',
							),
							array (
								'key' => 'pc_ha_009_3290',
								'label' => 'Text Alignment',
								'name' => 'hero_area_text-align',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33'
								),
								'choices' => array (
									'align-text_left' => 'Left',
									'align-text_center' => 'Center',
									'align-text_right' => 'Right',
								),
								'default_value' => 'align-text_center',
							),
							array (
								'key' => 'pc_ha_009-1',
								'label' => 'Content Width',
								'name' => 'hero_area_width',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33',
								),
								'choices' => array (
									'width_half' => '½',
									'width_third' => '¾',
									'width_full' => 'Full',
								),
								'default_value' => 'width_half',
							),
							array (
								'key' => 'pc_ha_009-2',
								'label' => 'Vertical Alignment',
								'name' => 'hero_area_vertical',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '33.33'
								),
								'choices' => array (
									'vertical-align_bottom' => 'Bottom',
									'vertical-align_middle' => 'Middle',
									'vertical-align_top' => 'Top',
								),
								'default_value' => 'vertical-align_middle',
							),
							array (
								'key' => 'pc_ha_010-1',
								'label' => 'Downward Arrow',
								'name' => 'downward_arrow',
								'type' => 'true_false',
								'required' => 0,
								'wrapper' => array (
									'width' => '50'
								),
								'message' => 'Enable',
							),
							array (
								'key' => 'pc_ha_010-1-10-33',
								'label' => 'Arrow image',
								'name' => 'downward_image',
								'type' => 'image',
								'required' => 0,
								'wrapper' => array (
									'width' => '50',
								),
								'preview_size' => 'medium',
								'return_format' => 'url'
							),
							array (
								'key' => 'pc_ha_010-2',
								'label' => 'Type of bottom divider',
								'name' => 'is_border-divider',
								'type' => 'radio',
								'required' => 0,
								'wrapper' => array (
									'width' => '50'
								),
								'choices' => array (
									'none' => 'None',
									'repeater' => 'Repeater',
									'image' => 'Image',
									'gradient' => 'Gradient'
								),
								'default_value' => 'none',
								'layout' => 'horizontal',
							),
							array (
								'key' => 'pc_ha_010-2-2',
								'label' => 'Bottom Divider',
								'name' => 'border-divider_image',
								'type' => 'image',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_010-2',
											'operator' => '==',
											'value' => 'image',
										),
									),
									array (
										array (
											'field' => 'pc_ha_010-2',
											'operator' => '==',
											'value' => 'repeater',
										),
									),
								),
								'wrapper' => array (
									'width' => '50',
								),
								'preview_size' => 'medium',
								'library' => 'uploadedTo',
								'return_format' => 'url',
							), 
							array (
								'key' => 'pc_ha_010-2-3-1',
								'label' => 'Bottom divider',
								'name' => 'border-divider_color',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_010-2',
											'operator' => '==',
											'value' => 'gradient',
										),
									),
								),
								'wrapper' => array (
									'width' => '50'
								),
								'rgba' => '',
								'return_value' => 0,
								'ext_value' => array (
								),
							),
							array (
								'key' => 'pc_ha_010-3',
								'label' => 'Overlay',
								'name' => 'hero-area_overlay',
								'type' => 'radio',
								'required' => 0,
								'wrapper' => array (
									'width' => '50',
								),
								'choices' => array (
									'none' => 'None',
									'color' => 'Color'
								),
								'default_value' => 'none',
								'layout' => 'horizontal',
							),
							array (
								'key' => 'pc_ha_010-3-1',
								'label' => 'Color',
								'name' => 'hero-area_overlay_color',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_010-3',
											'operator' => '==',
											'value' => 'color',
										),
									),
								),
								'wrapper' => array (
									'width' => '50'
								)
							),
							array (
								'key' => 'pc_ha_tab_1',
								'label' => 'Background',
								'name' => 'pc_ha_tab_1',
								'type' => 'tab',
								'required' => 0,
							),
							array (
								'key' => 'pc_ha_001',
								'label' => 'Image type',
								'name' => 'pc_image_type',
								'type' => 'radio',
								'required' => 0,
								'choices' => array (
									'single' => 'Single image',
									'slider' => 'Slider images',
									'video'  => 'Background video',
								),
								'layout' => 'horizontal',
							),
							array (
								'key' => 'pc_ha_002',
								'label' => 'Hero Image',
								'name' => 'pc_hero_image',
								'type' => 'image',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'single',
										),
									),
								),
								'wrapper' => array (
									'width' => '80'
								),
								'preview_size' => 'large',
								'library' => 'uploadedTo',
								'return_format' => 'array'
							),
							array (
								'key' => 'pc_ha_002-1',
								'label' => 'Fixed',
								'name' => 'pc_ha_image-fixed',
								'type' => 'radio',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'Single image',
										),
									),
								),
								'wrapper' => array (
									'width' => '20',
								),
								'choices' => array (
									'no' => 'No',
									'yes' => 'Yes',
								),
								'default_value' => 'hero-area_image_fixed-no',
								'layout' => 'vertical',
							),
							array (
								'key' => 'pc_ha_004',
								'label' => 'Hero Slides',
								'name' => 'pc_hero_slides',
								'type' => 'gallery',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'slider',
										),
									),
								),
								'preview_size' => 'thumbnail',
								'library' => 'uploadedTo',
								'insert' => 'append',
							),
							array (
								'key' => 'pc_ha_005',
								'label' => 'Hero Video mp4',
								'name' => 'pc_hero_video',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'placeholder' => 'https://',
							),
							array (
								'key' => 'pc_ha_006',
								'label' => 'Hero Video webm',
								'name' => 'pc_hero_video_webm',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'placeholder' => 'https://',
							),
							array (
								'key' => 'pc_ha_007',
								'label' => 'Hero Video ogv',
								'name' => 'pc_hero_video_ogv',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'placeholder' => 'http://',
							),
							array (
								'key' => 'pc_ha_008',
								'label' => 'Video Poster',
								'name' => 'pc_video_poster',
								'type' => 'image',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_001',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'return_format' => 'id',
								'preview_size' => 'full',
								'library' => 'uploadedTo'
							),
							array (
								'key' => 'pc_ha_tab_3',
								'label' => 'Titles',
								'name' => 'pc_ha_tab_3',
								'type' => 'tab',
								'required' => 0,
							),

							array (
								'key' => 'pc_ha_013-1-1',
								'label' => 'First title',
								'name' => 'pc_ha_1-tit',
								'type' => 'text',
								'required' => 0,
								'formatting' => 'none',
								'wrapper' => array (
									'width' => '50'
								),
							),
							array (
								'key' => 'pc_ha_013-1-3',
								'label' => 'SEO Tag',
								'name' => 'pc_ha_1-tit_seo',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'choices' => array (
									'h1' => 'H1',
									'h2' => 'H2',
									'h3' => 'H3',
									'h4' => 'H4',
									'h5' => 'H5',
									'h6' => 'H6',
									'p'  => 'paragraph'
								),
								'default_value' => 'h2'
							),
							array (
								'key' => 'pc_ha_013-1-2',
								'label' => 'HR line',
								'name' => 'pc_ha_1-tit_hr',
								'type' => 'true_false',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'message' => 'Just add that',
								'default_value' => 0,
							),
							array (
								'key' => 'pc_ha_013-2-3-1',
								'label' => 'HR Color',
								'name' => 'pc_ha_1-tit_hr-c',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_013-1-2',
											'operator' => '==',
											'value' => 1,
										)
									)
								),
								'wrapper' => array (
									'width' => '33.33',
								)
							),
							array (
								'key' => 'pc_ha_013-2-3-2',
								'label' => 'HR Width',
								'name' => 'pc_ha_1-tit_hr-w',
								'type' => 'radio',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_013-1-2',
											'operator' => '==',
											'value' => 1,
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'choices' => array (
									'0.25' => '¼',
									'0.5' => '½',
									'0.66' => '¾',
									'1' => 'Full',
								),
								'default_value' => '0.25',
								'layout' => 'horizontal',
							),

							array (
								'key' => 'field_594905dcbef94',
								'label' => '',
								'name' => 'separator_1',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '<hr />',
								'new_lines' => '',
								'esc_html' => 0,
							),

							array (
								'key' => 'pc_ha_014-1-1',
								'label' => 'Second title',
								'name' => 'pc_ha_2-tit',
								'type' => 'text',
								'required' => 0,
								'formatting' => 'none',
								'wrapper' => array (
									'width' => '50'
								)
							),
							array (
								'key' => 'pc_ha_014-1-3',
								'label' => 'SEO Tag',
								'name' => 'pc_ha_2-tit_seo',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'choices' => array (
									'h1' => 'H1',
									'h2' => 'H2',
									'h3' => 'H3',
									'h4' => 'H4',
									'h5' => 'H5',
									'h6' => 'H6',
									'p'  => 'paragraph'
								),
								'default_value' => 'h2',
							),
							array (
								'key' => 'pc_ha_014-1-2',
								'label' => 'HR line',
								'name' => 'pc_ha_2-tit_hr',
								'type' => 'true_false',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'message' => 'Just add that'
							),
							array (
								'key' => 'pc_ha_014-2-3-1',
								'label' => 'HR Color',
								'name' => 'pc_ha_2-tit_hr-c',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014-1-2',
											'operator' => '==',
											'value' => 1,
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
							),
							array (
								'key' => 'pc_ha_014-2-3-2',
								'label' => 'HR Width',
								'name' => 'pc_ha_2-tit_hr-w',
								'type' => 'radio',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014-1-2',
											'operator' => '==',
											'value' => 1,
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'choices' => array (
									'0.25' => '¼',
									'0.5' => '½',
									'0.66' => '¾',
									'1' => 'Full',
								),
								'default_value' => '0.25',
								'layout' => 'horizontal'
							),

							array (
								'key' => 'field_594905dcbef92',
								'label' => '',
								'name' => 'separator_2',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '<hr />',
								'new_lines' => '',
								'esc_html' => 0,
							),

							array (
								'key' => 'pc_ha_015-1-1',
								'label' => 'Third title',
								'name' => 'pc_ha_3-tit',
								'type' => 'text',
								'required' => 0,
								'formatting' => 'none',
								'wrapper' => array (
									'width' => '50'
								),
							),
							array (
								'key' => 'pc_ha_015-1-3',
								'label' => 'SEO Tag',
								'name' => 'pc_ha_3-tit_seo',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'choices' => array (
									'h1' => 'H1',
									'h2' => 'H2',
									'h3' => 'H3',
									'h4' => 'H4',
									'h5' => 'H5',
									'h6' => 'H6',
									'p'  => 'paragraph'
								),
								'default_value' => 'h2',
							),
							array (
								'key' => 'pc_ha_015-1-2',
								'label' => 'HR line',
								'name' => 'pc_ha_3-tit_hr',
								'type' => 'true_false',
								'required' => 0,
								'wrapper' => array (
									'width' => '25'
								),
								'message' => 'Just add that'
							),
							array (
								'key' => 'pc_ha_015-2-3-1',
								'label' => 'HR Color',
								'name' => 'pc_ha_3-tit_hr-c',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_015-1-2',
											'operator' => '==',
											'value' => 1,
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								)
							),
							array (
								'key' => 'pc_ha_015-2-3-2',
								'label' => 'HR Width',
								'name' => 'pc_ha_3-tit_hr-w',
								'type' => 'radio',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_015-1-2',
											'operator' => '==',
											'value' => 1,
										),
									),
								),
								'wrapper' => array (
									'width' => '33.33'
								),
								'choices' => array (
									'0.25' => '¼',
									'0.5' => '½',
									'0.66' => '¾',
									'1' => 'Full',
								),
								'default_value' => '0.25',
								'layout' => 'horizontal',
							),
							
							array (
								'key' => 'pc_ha_tab_6',
								'label' => 'Button',
								'name' => 'pc_ha_tab_6',
								'type' => 'tab',
								'required' => 0
							),
							array (
								'key' => 'pc_ha_013',
								'label' => 'CTA Button text',
								'name' => 'cta_button_text',
								'type' => 'text',
								'required' => 0,
								'wrapper' => array (
									'width' => '50'
								),
							),
							array (
								'key' => 'pc_ha_014',
								'label' => 'Button link type',
								'name' => 'button_link_type',
								'type' => 'radio',
								'required' => 0,
								'choices' => array (
									'custom' => 'Custom',
									'searchbox' => 'Search Box',
								),
								'layout' => 'horizontal',
								'wrapper' => array (
									'width' => '50'
								),
							),
							array (
								'key' => 'pc2131012133',
								'label' => 'Link',
								'name' => 'pc_cta_button_url',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'custom' 
										)
									)
								),
								'placeholder' => 'https://example.com',
								'formatting' => 'none',
								'wrapper' => array(
									'width' => 70
								)
							),
							array (
								'key' => 'pc2lohacal10121-group3btn3',
								'label' => 'Where open',
								'name' => 'pc_cta_button_open',
								'type' => 'select',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'custom' 
										)
									)
								),
								'choices' => array(
									'current'    => 'Current window',
									'new-window' => 'New window',
									'popup'      => 'iFrame popup',
								),
								'default_value' => 'current',
								'wrapper' => array(
									'width' => 30
								)
							),

							array (
								'key' => 'field_594905dcbef98',
								'label' => '',
								'name' => 'separator_5',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '<hr />',
								'new_lines' => '',
								'esc_html' => 0,
							),

							array (
								'key' => 'pc_ha_014_1',
								'label' => 'Search settings',
								'name' => 'search_settings_type',
								'type' => 'radio',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'searchbox',
										),
									),
								),
								'wrapper' => array (
									'width' => '20'
								),
								'choices' => array (
									'range' => 'Search by date range',
									'single' => 'Search by one date',
								),
								'default_value' => 'single',
							),
							array (
								'key' => 'pc_ha_014_2',
								'label' => 'Search by categories',
								'name' => 'search_settings_type_category',
								'type' => 'true_false',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'searchbox',
										),
									),
								),
								'wrapper' => array (
									'width' => '20'
								),
								'message' => 'Just do it',
								'default_value' => 0,
							),
							array (
								'key' => 'field_54e613c087d24_special_message_pc',
								'label' => 'Special message above search results',
								'name' => 'search_settings_type_special_message',
								'type' => 'textarea',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'searchbox',
										)
									)
								),
								'wrapper' => array (
									'width' => '60'
								),
								'rows' => 2,
								'new_lines' => '',
							),
							array (
								'key' => 'pc_ha_014_3',
								'label' => 'Select categories',
								'name' => 'search_settings_type_category_select',
								'type' => 'advanced_taxonomy_selector',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
												'field' => 'pc_ha_014_2',
												'operator' => '==',
												'value' => '1',
											),
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'searchbox',
										),
									),
								),
								'data_type' => 'terms',
								'taxonomies' => array (
									0 => 'rezdy_cat',
								),
								'post_type' => array (
									0 => 'product',
								),
								'field_type' => 'select',
								'allow_null' => 1,
								'return_value' => 'object',
								'wrapper' => array (
									'width' => '50'
								),
							),
							array (
								'key' => 'field_552061311b125_settings_type_category_hide_option_pc',
								'label' => 'Hide categories option in search result page',
								'name' => 'search_settings_type_category_hide_option',
								'type' => 'true_false',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
												'field' => 'pc_ha_014_2',
												'operator' => '==',
												'value' => '1',
											),
										array (
											'field' => 'pc_ha_014',
											'operator' => '==',
											'value' => 'searchbox',
										),
									),
								),
								'message' => 'Just do it',
								'default_value' => 0,
								'wrapper' => array (
									'width' => '50'
								),
							),
							
							array (
								'key' => 'pc_ha_tab_7',
								'label' => 'Mobile devices',
								'name' => 'pc_ha_tab_7',
								'type' => 'tab'
							),
							array (
								'key' => 'pc_ha_015-a',
								'label' => 'Action button',
								'name' => 'ha_action_button',
								'type' => 'true_false',
								'required' => 0,
								'wrapper' => array (
									'width' => '30',
								),
								'message' => 'Show button underneath Hero Area',
								'default_value' => 0,
							),
							array (
								'key' => 'pc_ha_015-b',
								'label' => 'Label',
								'name' => 'action_button_label',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'ha_015-a',
											'operator' => '==',
											'value' => 1,
										)
									),
								),
								'wrapper' => array (
									'width' => '35',
								),
								'placeholder' => 'Book now',
							),
							array (
								'key' => 'pc_ha_015-c',
								'label' => 'Destination',
								'name' => 'action_button_url',
								'type' => 'text',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'pc_ha_015-a',
											'operator' => '==',
											'value' => 1,
										)
									)
								),
								'wrapper' => array (
									'width' => '35',
								),
								'placeholder' => 'https://example.com',
							)
						)
					)
				)
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'acf_after_title',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'active' => 1,
	)); 

endif;