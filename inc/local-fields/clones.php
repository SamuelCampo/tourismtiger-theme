<?php 
/**
 * ACF local fields: Clones which used in another fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

acf_add_local_field_group(array (
	'key'    => 'bgrd_59930ca194830',
	'title'  => 'Background',
	'fields' => array (
		array (
			'key'      => 'bgrd_5821d316e18e2',
			'label'    => 'Background Type',
			'name'     => 'type',
			'type'     => 'select',
			'required' => 0,
			'choices'  => array (
				'color'       => 'Just color',
				'image'       => 'Image',
				'texture'     => 'Texture',
				'map'         => 'Map',
				'video'       => 'Video',
				'video-embed' => 'Video Embed',
			),
			'wrapper'   => array(
				'width' => 33
			),
			'default_value' => 'color'
		),
		array (
			'key' => 'bgrd_5821d89ecaee3',
			'label' => 'Color',
			'name' => 'color',
			'type' => 'rgba_color',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'rgba' => 'rgba(255,255,255,0)'
		),
		array (
			'key' => 'bgrd_5821d7db6de3b',
			'label' => 'Displaying',
			'name' => 'display',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'choices' => array (
				'auto' => 'Auto',
				'fixed' => 'Fixed image',
				'expand' => 'Section takes the height of that image',
			),
			'default_values' => array ( 'auto' ),
			'layout' => 'horizontal',
			'wrapper' => array(
				'width' => 33
			)
		),
		array (
			'key' => 'bgrd_5821d6db6de3a',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'image',
					),
				),
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'texture',
					),
				),
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
		),
		array (
			'key' => 'bgrd_5821d8c5caee4',
			'label' => 'Input location',
			'name' => 'map',
			'type' => 'google_map',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'map',
					)
				)
			)
		),
		array (
			'key' => 'bgrd_5821d944caee7',
			'label' => 'Webm Type',
			'name' => 'webm',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => 'bgrd_5821d972caee8',
			'label' => 'OGV Type',
			'name' => 'ogv',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => 'bgrd_5821d983caee9',
			'label' => 'MP4 Type',
			'name' => 'mp4',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => 'bgrd_5821d9b6caeea',
			'label' => 'Video Embed',
			'name' => 'embed',
			'type' => 'oembed',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bgrd_5821d316e18e2',
						'operator' => '==',
						'value' => 'video-embed',
					)
				)
			)
		),

		array (
			'key' => 'bgov_584905dcbef94',
			'label' => '',
			'name' => 'separator_1',
			'type' => 'message',
			'required' => 0,
			'conditional_logic' => 0,
			'message' => '<hr />',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array (
			'key'      => 'bgov_qdc13of93st56',
			'label'    => 'Overlay',
			'name'     => 'overlay',
			'type'     => 'select',
			'required' => '',
			'choices'  => array (
				'none'     => 'None',
				'color'    => 'Color',
				'texture'  => 'Texture',
			),
			'default_values' => array('none'),
			'wrapper'        => array(
				'width'      => 33
			)
		),
		array(
			'key'       => 'bgov_qdc13of93st47',
			'label'     => 'Color',
			'name'      => 'overlay-color',
			'type'      => 'rgba_color',
			'required'  => '',
			'wrapper'   => array(
				'width' => 64
			),
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'bgov_qdc13of93st56',
						'operator' => '==',
						'value'    => 'color'
					)
				),
			),
		),
		array(
			'key'               => 'bgov_qdc13of93st38',
			'label'             => 'Image',
			'name'              => 'overlay-image',
			'type'              => 'image',
			'required'          => '',
			'return_format'     => 'url',
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'bgov_qdc13of93st56',
						'operator' => '==',
						'value'    => 'texture'
					)
				),
			),
			'wrapper'   => array (
				'width' => 33
			)
		),
		array(
			'key'               => 'bgov_qdc13of93st29',
			'label'             => 'Overlay opacity',
			'name'              => 'overlay-opacity',
			'type'              => 'number',
			'required'          => '',
			'min'               => 0,
			'max'               => 100,
			'append' 			=> '%',
			'default_value'     => '50',
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'bgov_qdc13of93st56',
						'operator' => '==',
						'value'    => 'texture'
					)
				),
			),
			'wrapper'   => array (
				'width' => 33
			)
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

acf_add_local_field_group(array (
	'key'    => 'dibo_59930ca194830',
	'title'  => 'Dividers',
	'fields' => array (		
		array (
			'key'       => 'dito_5821e14dd0f11',
			'label'     => 'Top Divider Type',
			'name'      => 'top-divider',
			'type'      => 'select',
			'required'  => '',
			'wrapper'   => array (
				'width' => '33'
			),
			'choices'       => array (
				'none'      => 'None',
				'repeater'  => 'Repeater',
				'image'     => 'Image',
				'line'      => 'Line',
				'gradient'  => 'Gradient',
			),
			'default_value' => array (
				0           => 'none',
			)
		),
		array (
			'key'               => 'dito_5821e14dd0f00',
			'label'             => 'Top divider color',
			'name'              => 'top-divider--color',
			'type'              => 'rgba_color',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'line',
					),
				),
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'gradient',
					),
				),
			),
			'wrapper'   => array (
				'width' => '33'
			),
			'rgba'      => 'rgba(194, 194, 194, 1)',
		),						
		array(
			'key'         => 'dito_5821e14dd0f73',
			'label'       => 'Gradioent duration',
			'name'        => 'top-divider--duration',
			'type'        => 'text',
			'required'    => '',
			'placeholder' => '25px, 10% or 5vh',
			'wrapper'     => array(
				'width'   => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'gradient'
					)
				),
			),
		),
		array (
			'key'               => 'dito_5821e14dd0f91',
			'label'             => 'Top divider thickness',
			'name'              => 'top-divider--width',
			'type'              => 'number',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'line',
					),
				),
			),
			'wrapper'   => array (
				'width' => '33'
			),
			'default_value' => 1,
			'append'        => 'px',
			'min'           => 1,
			'max'           => 15,
			'step'          => 1,
		),
		array (
			'key'               => 'dito_5821e14dd0f82',
			'label'             => 'Image Repeater',
			'name'              => 'top-divider--image',
			'type'              => 'image',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'repeater',
					),
				),
				array (
					array (
						'field'    => 'dito_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'image',
					),
				),
			),
			'return_format' => 'url',
			'preview_size'  => 'rpwe-thumbnail',
			'library'       => 'all',
			'wrapper'       => array (
				'width'     => '33'
			),
		),
		array (
			'key' => 'dibo_5sep9ca194830',
			'label' => '',
			'name' => 'separator_divider_1',
			'type' => 'message',
			'required' => 0,
			'conditional_logic' => 0,
			'message' => '<hr />',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array (
			'key'       => 'dibo_5821e14dd0f11',
			'label'     => 'Bottom Divider Type',
			'name'      => 'bottom-divider',
			'type'      => 'select',
			'required'  => '',
			'wrapper'   => array (
				'width' => '33'
			),
			'choices'       => array (
				'none'      => 'None',
				'repeater'  => 'Repeater',
				'image'     => 'Image',
				'line'      => 'Line',
				'gradient'  => 'Gradient',
			),
			'default_value' => array (
				0           => 'none',
			)
		),
		array (
			'key'               => 'dibo_5821e14dd0f00',
			'label'             => 'Bottom divider color',
			'name'              => 'bottom-divider--color',
			'type'              => 'rgba_color',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'line',
					),
				),
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'gradient',
					),
				),
			),
			'wrapper'   => array (
				'width' => '33'
			),
			'rgba'      => 'rgba(194, 194, 194, 1)',
		),						
		array(
			'key'         => 'dibo_5821e14dd0f73',
			'label'       => 'Gradioent duration',
			'name'        => 'bottom-divider--duration',
			'type'        => 'text',
			'required'    => '',
			'placeholder' => '25px, 10% or 5vh',
			'wrapper'     => array(
				'width'   => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'gradient'
					)
				),
			),
		),
		array (
			'key'               => 'dibo_5821e14dd0f91',
			'label'             => 'Bottom divider thickness',
			'name'              => 'bottom-divider--width',
			'type'              => 'number',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'line',
					),
				),
			),
			'wrapper'   => array (
				'width' => '33'
			),
			'default_value' => 1,
			'append'        => 'px',
			'min'           => 1,
			'max'           => 15,
			'step'          => 1,
		),
		array (
			'key'               => 'dibo_5821e14dd0f82',
			'label'             => 'Image Repeater',
			'name'              => 'bottom-divider--image',
			'type'              => 'image',
			'required'          => 0,
			'conditional_logic' => array (
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'repeater',
					),
				),
				array (
					array (
						'field'    => 'dibo_5821e14dd0f11',
						'operator' => '==',
						'value'    => 'image',
					),
				),
			),
			'return_format' => 'url',
			'preview_size'  => 'rpwe-thumbnail',
			'library'       => 'all',
			'wrapper'       => array (
				'width'     => '33'
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'marg_59930ca194830',
	'title' => 'Button',
	'fields' => array (
		array (
			'key' => 'marg_Imc2zN61u48f7',
			'label' => 'Top',
			'name' => 'top',
			'type' => 'number',
			'required' => '',
			'wrapper' => array (
				'width' => '50',
			),
			'placeholder' => '0',
			'append' => 'px',
			'min' => '0',
			'max' => '100'
		),
		array (
			'key' => 'marg_Imc1zN11u47f8',
			'label' => 'Bottom',
			'name' => 'bottom',
			'type' => 'number',
			'required' => '',
			'wrapper' => array (
				'width' => '25',
			),
			'placeholder' => '0',
			'append' => 'px',
			'min' => '0',
			'max' => '100',
			'wrapper' => array (
				'width' => '50',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'bttn_59930ca194830',
	'title' => 'Button',
	'fields' => array (
		array (
			'key' => 'bttn_59930cb0de1e9',
			'label' => 'Label',
			'name' => 'label',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Book now',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'bttn_59930da2de1ea',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'page' => 'Link to the page within the site',
				'url' => 'URL',
				'popup-frame' => 'Open the link in the popup',
				'popup-video' => 'Open the video in the popup',
			),
			'default_value' => array (
				0 => 'page',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'bttn_59930e69de1eb',
			'label' => 'Page',
			'name' => 'page',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'page',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
			),
			'taxonomy' => array (
			),
			'allow_null' => 1,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array (
			'key' => 'bttn_59930ee7de1ec',
			'label' => 'URL',
			'name' => 'url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'url',
					),
				),
				array (
					array (
						'field' => 'field_59930da2de1ea',
						'operator' => '==',
						'value' => 'popup-frame',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'https://example.com',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'bttn_59930f18de1ee',
			'label' => 'Video',
			'name' => 'video',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'popup-video',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));
