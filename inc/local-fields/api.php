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
	return array (
		array (
			'key' => $id . '_5821e71cd49fd',
			'label' => 'Row Type',
			'name' => 'Row_Type_tab_0',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_5821e72dd49fe',
			'label' => 'Row type',
			'name' => 'type',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'content' => 'Content',
				'blog' => 'Blog posts',
			),
			'wrapper' => array(
				'width' => 20
			),
			'default_value' => 'content',
		),

		// Blog fields
		array (
			'key' => $id . '_5821e772d49ff',
			'label' => 'Show posts',
			'name' => 'posts_count',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e72dd49fe',
						'operator' => '==',
						'value' => 'blog',
					),
				),
			),
			'default_value' => 1,
			'min' => 1,
			'step' => 1,
			'wrapper' => array(
				'width' => 15
			),
		),
		array (
			'key' => $id . '_5821e332d49aa',
			'label' => 'Style',
			'name' => 'blog-style',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e72dd49fe',
						'operator' => '==',
						'value' => 'blog',
					),
				),
			),
			'choices' => array( 'style-one' => 'Style one' ),
			'default_value' => 'style-one',
			'wrapper' => array(
				'width' => 15
			),
		),
		array (
			'key' => $id . '_5821e799d4a00',
			'label' => 'Show Info',
			'name' => 'blog-show',
			'type' => 'checkbox',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e72dd49fe',
						'operator' => '==',
						'value' => 'blog',
					),
				),
			),
			'wrapper' => array(
				'width' => 50
			),
			'choices' => array (
				'image' => 'Thumbnail',
				'date' => 'Date',
				'excerpt' => 'Excerpt',
				'button' => 'Button'
			),
			'default_value' => array (
				0 => 'image',
			),
			'layout' => 'horizontal',
			'toggle' => 0,
		),

		// Content
		array (
			'key' => $id . '_5821f6a6269db',
			'label' => 'Columns',
			'name' => 'columns',
			'type' => 'flexible_content',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e72dd49fe',
						'operator' => '==',
						'value' => 'content',
					),
				),
			),
			'button_label' => 'Add Column',
			'layouts' => get_column_local_fields( $id )
		),

		// Options
		array (
			'key' => $id . '_5821e2e1f659b',
			'label' => 'Options',
			'name' => 'taboptions',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
		),
		array (
			'key' => $id . '_0014mn5CO4n1',
			'label' => 'Columns per line',
			'name' => 'cols-count',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33'
			),
			'placeholder' => 'Columns per line',
			'choices' => array(
				1 => 'Just one',
				2 => 'Two',
				3 => 'Three',
				4 => 'Four',
				5 => 'Five',
				6 => 'Six'
			),
			'default_values' => array( 0 => 1 )
		),
		array (
			'key' => $id . '_5821e6f3d49fc',
			'label' => 'Layout',
			'name' => 'layout',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'grid' => 'Grid',
				'carousel' => 'Carousel',
			),
			'default_value' => array (
				0 => 'grid',
			)
		),
		array (
			'key' => $id . '_5821e2fcf659c',
			'label' => 'Columns\' margins',
			'name' => 'cols-margins',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'none' => 'None',
				'normal' => 'Normal',
			),
			'default_value' => array (
				0 => 'none',
			)
		),						
		array (
			'key' => $id . '_5821e359f659d',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'full' => 'Full',
				'four-five' => '4/5',
				'three-four' => '3/4',
				'one-two' => '1/2',
			),
			'default_value' => 'full',
		),
		array (
			'key' => $id . '_5821eelementali34',
			'label' => 'Position',
			'name' => 'position',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'auto' => 'Auto',
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'default_value' => array (
				0 => 'auto',
			)
		),
		array (
			'key' => $id . '_5821e44ff659f',
			'label' => 'Vertical row placement',
			'name' => 'vertical-placement',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'auto' => 'Auto',
				'stretch' => 'Stretch',
				'top' => 'Top',
				'middle' => 'Middle',
				'bottom' => 'Bottom',
			),
			'default_value' => array( 'auto' )
		),
		array (
			'key' => $id . '_5c21c44ff659c',
			'label' => 'Columns placement',
			'name' => 'cols-placement',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'auto' => 'Auto',
				'stretch' => 'Stretch',
				'top' => 'Top',
				'middle' => 'Middle',
				'bottom' => 'Bottom',
			),
			'default_value' => array( 'auto' )
		),								
		array (
			'key' => $id . '_18212372d49ff',
			'label' => 'Margin top',
			'name' => 'margin_top',
			'type' => 'number',
			'required' => 0,
			'default_value' => 0,
			'min' => 0,
			'max' => 200,
			'step' => 10,
			'append' => 'px',
			'wrapper' => array(
				'width' => 33
			),
		),						
		array (
			'key' => $id . '_1821291129ff',
			'label' => 'Margin bottom',
			'name' => 'margin_bottom',
			'type' => 'number',
			'required' => 0,
			'default_value' => 0,
			'min' => 0,
			'max' => 200,
			'step' => 10,
			'append' => 'px',
			'wrapper' => array(
				'width' => 33
			),
		),

		// Grid settings
		array (
			'key' => $id . '_5821E2e1f659b',
			'label' => 'Grid settings',
			'name' => 'tabopt1ons',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'grid'
					)
				),
			),
		),
		array (
			'key' => $id . '_cePuha1234',
			'label' => 'Columns align',
			'name' => 'cols-align',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'grid'
					)
				),
			),
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'auto' => 'Auto',
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
				'space-around' => 'Space Around',
				'space-between' => 'Space Between'
			),
			'default_value' => array (
				0 => 'auto',
			)
		),
		array (
			'key' => $id . '_co1231era9ti5od',
			'label' => 'The ratio of rows',
			'name' => 'cols-ratio',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_0014mn5CO4n1',
						'operator' => '==',
						'value' => '2',
					),
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'grid'
					)
				),
			),
			'choices' => array (
				'equal' => 'Equal width',
				'left' => 'Two thirds left',
				'right' => 'Two thirds right',
			),
			'default_value' => 'equal',
		),

		// Carousel settings
		array (
			'key' => $id . '_5821Q2e1f659b',
			'label' => 'Carousel settings',
			'name' => 'tabopt2Cans',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					)
				),
			),
		),								
		array (
			'key' => $id . '_1822e772d49ff',
			'label' => 'How many slides to scroll',
			'name' => 'slides_scroll',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					)
				),
			),
			'default_value' => 1,
			'min' => 1,
			'step' => 1,
			'wrapper' => array(
				'width' => 33
			),
		),
		array (
			'key' => $id . '_arr28oo659a',
			'label' => 'Show dots?',
			'name' => 'show_dots',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					)
				),
			),
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'false' => 'None',
				'true' => 'Yes, show'
			),
			'default_value' => array (
				0 => 'false',
			),
		),
		array (
			'key' => $id . '_arr28ff659a',
			'label' => 'Arrows type',
			'name' => 'arrows_type',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					)
				),
			),
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'auto' => 'Auto',
				'custom' => 'Custom'
			),
			'default_value' => array (
				0 => 'auto',
			),
			'readonly' => 1,
		),
		array (
			'key' => $id . '_arsis1ize9a',
			'label' => 'Arrows size',
			'name' => 'arrows_size',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					),
					array (
						'field' => $id . '_arr28ff659a',
						'operator' => '==',
						'value' => 'custom'
					)
				),
			),
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			),
			'default_value' => array (
				0 => 'medium',
			),
		),
		array (
			'key' => $id . '_arrwe09a',
			'label' => 'Arrows weight',
			'name' => 'arrows_weight',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					),
					array (
						'field' => $id . '_arr28ff659a',
						'operator' => '==',
						'value' => 'custom'
					)
				),
			),
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'thin' => 'Thin',
				'normal' => 'Normal',
				'bold' => 'Bold'
			),
			'default_value' => array (
				0 => 'normal',
			),
		),
		array (
			'key' => $id . '_1olor9azza',
			'label' => 'Arrows Position',
			'name' => 'arrows_position',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					),
					array (
						'field' => $id . '_arr28ff659a',
						'operator' => '==',
						'value' => 'custom'
					)
				),
			),
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => array (
				'within' => 'Within Row',
				'out' => 'Out of Row'
			),
			'default_value' => array (
				0 => 'within',
			)
		),
		array (
			'key' => $id . '_lor8a49e2',
			'label' => 'Arrows Color',
			'name' => 'arrows_color',
			'type' => 'rgba_color',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e6f3d49fc',
						'operator' => '==',
						'value' => 'carousel'
					),
					array (
						'field' => $id . '_arr28ff659a',
						'operator' => '==',
						'value' => 'custom'
					)
				),
			),
			'wrapper' => array (
				'width' => '33'
			),
			'rgba' => 'rgba(255,255,255,1)',
			'return_value' => 0
		),

		// Background
		array (
			'key' => $id . '_5821Q2bg9b',
			'label' => 'Background',
			'name' => 'tbgCans',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),	
		array (
			'key' => $id . '_5821e99fa49e0',
			'label' => 'Type',
			'name' => 'background',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'choices' => array (
				'none' => 'None',
				'texture' => 'Texture',
				'color' => 'Color',
			),
			'default_value' => array (
				0 => 'none',
			),
		),
		array (
			'key' => $id . '_5821e9cda49e1',
			'label' => 'Upload Image',
			'name' => 'background_texture',
			'type' => 'image',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e99fa49e0',
						'operator' => '==',
						'value' => 'texture',
					),
				),
			),
			'return_format' => 'url',
			'preview_size' => 'rpwe-thumbnail',
			'library' => 'all',
		),
		array (
			'key' => $id . '_5821e9e8a49e2',
			'label' => 'Choose Color',
			'name' => 'background_color',
			'type' => 'rgba_color',
			'required' => 0,
			'wrapper' => array(
				'width' => 33
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_5821e99fa49e0',
						'operator' => '==',
						'value' => 'color',
					)
				)
			)
		)
	);
}

/**
 * Generates Column local fields array
 */
function get_column_local_fields( $id = '1234QWERasdf' ) {
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
