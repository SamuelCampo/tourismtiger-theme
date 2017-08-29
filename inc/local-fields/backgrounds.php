<?php 
/**
 * ACF local fields: Button
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ):

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

endif;