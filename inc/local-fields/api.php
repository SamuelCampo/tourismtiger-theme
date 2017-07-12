<?php 
/**
 * ACF local fields API
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */



/**
 * Generates Row local fields array
 */
function get_row_local_field( $id = '1234QWERasdf' ) {
	return array();
}

/**
 * Generates Section local fields array
 */
function get_section_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_5821ee172a4d4',
			'label' => 'Rows',
			'name' => 'Rows_tab_0',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
		),

		array (
			'key' => $id . '_5821e254f6599',
			'label' => 'Rows of content',
			'name' => 'rows',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add Row',
			'layouts' => array (
				array (
					'key' => '5821e26955f33',
					'name' => 'row',
					'label' => 'Row',
					'display' => 'block',
					'sub_fields' => get_row_local_field( $id )
				)
			)
		),

		array (
			'key' => $id . '_5821d6ba6de39',
			'label' => 'Background Options',
			'name' => 'Background_Options_0',
			'type' => 'tab',
			'required' => 0
		),
		array (
			'key' => $id . '_1111e711149fe',
			'label' => 'Enable paddings for section?',
			'name' => 'paddings',
			'type' => 'checkbox',
			'required' => 0,
			'choices' => array (
				'left' => 'Left',
				'right' => 'Right',
				'top' => 'Top',
				'bottom' => 'Bottom',
			),
			'default_value' => array (
				0 => 'left',
				1 => 'right',
				2 => 'top',
				3 => 'bottom'
			),
			'layout' => 'horizontal',
			'toggle' => 1,
			'wrapper' => array(
				'width' => 40
			),
		),
		array (
			'key' => $id . '_5821d316e18e2',
			'label' => 'Choose Background Type',
			'name' => 'background',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'color' => 'Just color',
				'image' => 'Image',
				'texture' => 'Texture',
				'map' => 'Map',
				'video' => 'Video',
				'video-embed' => 'Video Embed',
			),
			'wrapper' => array(
				'width' => 30
			),
			'default_value' => 'color'
		),
		array (
			'key' => $id . '_5821d89ecaee3',
			'label' => 'Color',
			'name' => 'bg-color',
			'type' => 'rgba_color',
			'required' => 0,
			'wrapper' => array(
				'width' => 30
			),
			'rgba' => 'rgba(255,255,255,1)'
		),
		array (
			'key' => $id . '_5821d6db6de3a',
			'label' => 'Background Image',
			'name' => 'bg-image',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'image',
					),
				),
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'texture',
					),
				),
				array (
					array (
						'field' => $id . '_5821d316e18e2',
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
			'key' => $id . '_5821d7db6de3b',
			'label' => 'Fixed position',
			'name' => 'bg-image--fixed',
			'type' => 'radio',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'choices' => array (
				'yep' => 'Yes, Background is fixed',
				'nope' => 'Nope',
			),
			'default_value' => 'yep',
			'layout' => 'horizontal',
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_582si7ez6imbg',
			'label' => 'Expande the section',
			'name' => 'tour_pc-bg__select-image--expanded',
			'type' => 'radio',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'image',
					),
					array (
						'field' => $id . '_5821d7db6de3b',
						'operator' => '==',
						'value' => 'nope',
					),
				),
			),
			'choices' => array (
				'nope' => 'No',
				'yep' => 'Yes',
			),
			'default_value' => 'nope',
			'layout' => 'horizontal',
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_5821d8c5caee4',
			'label' => 'Input location',
			'name' => 'bg-map',
			'type' => 'google_map',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'map',
					)
				)
			)
		),
		array (
			'key' => $id . '_5821d944caee7',
			'label' => 'Webm Type',
			'name' => 'bg-video--webm',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => $id . '_5821d972caee8',
			'label' => 'OGV Type',
			'name' => 'bg-video--ogv',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => $id . '_5821d983caee9',
			'label' => 'MP4 Type',
			'name' => 'bg-video--mp4',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
		),
		array (
			'key' => $id . '_5821d9b6caeea',
			'label' => 'Video Embed',
			'name' => 'bg-embed',
			'type' => 'oembed',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821d316e18e2',
						'operator' => '==',
						'value' => 'video-embed',
					)
				)
			)
		),
		array (
			'key' => $id . '_5821da4aabd7c',
			'label' => 'Divider Options',
			'name' => 'Divider_Options_tab',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
		),
		array (
			'key' => $id . '_5821df8eabd7d',
			'label' => 'Top Divider Type',
			'name' => 'top-divider',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '20'
			),
			'choices' => array (
				'none' => 'None',
				'repeater' => 'Repeater',
				'image' => 'Image',
				'line' => 'Line'
			),
			'default_value' => array (
				0 => 'none'
			)
		),
		array (
			'key' => $id . '_pc-td--line-color',
			'label' => 'Top divider color',
			'name' => 'top-divider--color',
			'type' => 'rgba_color',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821df8eabd7d',
						'operator' => '==',
						'value' => 'line',
					),
				),
			),
			'wrapper' => array (
				'width' => '40',
			),
			'rgba' => 'rgba(194, 194, 194, 1)',
		),
		array (
			'key' => $id . '_pc-td--line-thickess',
			'label' => 'Top divider thickness',
			'name' => 'top-divider--width',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821df8eabd7d',
						'operator' => '==',
						'value' => 'line',
					),
				),
			),
			'wrapper' => array (
				'width' => '40'
			),
			'append' => 'px',
			'min' => 1,
			'max' => 15,
			'step' => 1
		),
		array (
			'key' => $id . '_5821e00cabd7e',
			'label' => 'Image Repeater',
			'name' => 'top-divider--image',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821df8eabd7d',
						'operator' => '==',
						'value' => 'repeater',
					),
				),
				array (
					array (
						'field' => $id . '_5821df8eabd7d',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'return_format' => 'url',
			'preview_size' => 'rpwe-thumbnail',
			'library' => 'all',
			'wrapper' => array (
				'width' => '60'
			),
		),

		array (
			'key' => $id . '_ld-594905dcbef94',
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
			'key' => $id . '_5821e14dd0f11',
			'label' => 'Bottom Divider Type',
			'name' => 'bottom-divider',
			'type' => 'select',
			'required' => '',
			'wrapper' => array (
				'width' => '20'
			),
			'choices' => array (
				'none' => 'None',
				'repeater' => 'Repeater',
				'image' => 'Image',
				'line' => 'Line',
			),
			'default_value' => array (
				0 => 'none',
			)
		),
		array (
			'key' => $id . '_pc-bd--line-color',
			'label' => 'Bottom divider color',
			'name' => 'bottom-divider--color',
			'type' => 'rgba_color',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e14dd0f11',
						'operator' => '==',
						'value' => 'line',
					),
				),
			),
			'wrapper' => array (
				'width' => '40'
			),
			'rgba' => 'rgba(194, 194, 194, 1)',
		),
		array (
			'key' => $id . '_pc-bd--line-thickess',
			'label' => 'Bottom divider thickness',
			'name' => 'bottom-divider--width',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e14dd0f11',
						'operator' => '==',
						'value' => 'line',
					),
				),
			),
			'wrapper' => array (
				'width' => '40'
			),
			'default_value' => 1,
			'append' => 'px',
			'min' => 1,
			'max' => 15,
			'step' => 1,
		),
		array (
			'key' => $id . '_5821e1b1d0f13',
			'label' => 'Image Repeater',
			'name' => 'bottom-divider--image',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e14dd0f11',
						'operator' => '==',
						'value' => 'repeater',
					),
				),
				array (
					array (
						'field' => $id . '_5821e14dd0f11',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'return_format' => 'url',
			'preview_size' => 'rpwe-thumbnail',
			'library' => 'all',
			'wrapper' => array (
				'width' => '60'
			),
		)
	);
}


?>
