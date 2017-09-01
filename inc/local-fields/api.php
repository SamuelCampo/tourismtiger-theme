<?php 
/**
 * ACF local fields API
 *
 * @todo  
 * - Alert box component -- add settings
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * Sidebar widget
 */
function get_sidebar_widget_local_field( $id = '1234QWERasdf' ) {
	return array(
		array (
			'key' => $id . '_A2982bc694Cd91',
			'name' => 'headline',
			'label' => 'Headline',
			'display' => 'block',
			'sub_fields' => get_headline_local_field( 'wi-il' ),
		),

		array (
			'key' => $id . '_A2187bc694Cd90',
			'name' => 'editor',
			'label' => 'Editor',
			'display' => 'block',
			'sub_fields' => get_editor_local_field( 'wi-il' ),
		),

		array (
			'key' => $id . '_A2982bc694Cd46',
			'name' => 'button',
			'label' => 'Button',
			'display' => 'block',
			'sub_fields' => get_button_local_field( 'wi-il' )
		),

		array (
			'key' => $id . '_A2982bc694Cd60',
			'name' => 'icons-list',
			'label' => 'Icons list',
			'display' => 'block',
			'sub_fields' => get_icons_list_local_field( 'wi-il' )
		),

		array (
			'key' => $id . '_A2982bc694Cd70',
			'label' => 'HR Line',
			'name' => 'line',
			'display' => 'block',
			'sub_fields' => get_hr_local_field( 'wi-il' )
		),

		array (
			'key' => $id . '_A2982bc694Cd71',
			'label' => 'Form',
			'name' => 'form',
			'display' => 'block',
			'sub_fields' => get_gform_local_field( 'wi-il' )
		)
	);
}


/**
 * Generates Product section local fields array
 */
function get_product_section_local_field( $id = '1234QWERasdf' ) {
	return array(

		// Headline
		array (
			'key' => $id . '_N121zN1cd48f3',
			'name' => 'headline',
			'label' => 'Headline',
			'display' => 'block',
			'sub_fields' => get_headline_local_field( $id ),
		),

		// Editor
		array (
			'key' => $id . '_N121z7Ocd48f2',
			'name' => 'editor',
			'label' => 'Editor',
			'display' => 'block',
			'sub_fields' => get_editor_local_field( $id ),
		),

		// Horizontal line
		array (
			'key' => $id . '_N1Viz71cHe8f0',
			'name' => 'line',
			'label' => 'Horizontal Line',
			'display' => 'block',
			'sub_fields' => get_hr_local_field( $id ),
		),

		// Testimonial
		array (
			'key' => $id . '_Nj2j271cd48f0',
			'name' => 'testimonials',
			'label' => 'Testimonials',
			'display' => 'block',
			'sub_fields' => get_content_testimonial_local_field( $id ),
		),

		// Gallery
		array (
			'key' => $id . '_Nj43251cd48f0',
			'name' => 'gallery',
			'label' => 'Gallery',
			'display' => 'block',
			'sub_fields' => get_gallery_local_field( $id ),
		),

		// Image card
		array (
			'key' => $id . '_ICD3251cd48f0',
			'name' => 'image-card',
			'label' => 'Image Card',
			'display' => 'block',
			'sub_fields' => get_image_card_local_field( $id ),
		),

		// Video
		array (
			'key' => $id . '_N1Viz71cd48f0',
			'name' => 'oembed',
			'label' => 'oEmbed Video',
			'display' => 'block',
			'sub_fields' => get_oembed_local_field( $id ),
		),

		// Trip details
		array (
			'key' => $id . '_DRViip71cd48f0',
			'name' => 'trip-details',
			'label' => 'Trip Details',
			'display' => 'block',
			'sub_fields' => get_trip_details_local_field( $id ),
		),

		// Accordion
		array (
			'key' => $id . '_HRhiip71cd48f1',
			'name' => 'accordion',
			'label' => 'Accordion',
			'display' => 'block',
			'sub_fields' => get_accordion_local_field( $id )
		),

		// Icons list
		array (
			'key' => $id . '_HRhiip71cd48f0',
			'name' => 'icons-list',
			'label' => 'Icons list',
			'display' => 'block',
			'sub_fields' => get_icons_list_local_field( $id ),
		),

		array (
			'key' => $id . '_A2982bc6o4CF73',
			'label' => 'Form',
			'name' => 'form',
			'display' => 'block',
			'sub_fields' => get_gform_local_field( $id )
		)
	);
}


/**
 * Generate Flexi card component local fields
 */
function get_flexi_local_field( $id = '1234QWERasdf' ) {
	return array(
		array (
			'key' => $id . '_FC12qiX8p1A9',
			'label' => 'Components',
			'name' => 'components',
			'type' => 'flexible_content',
			'required' => '',
			'button_label' => 'Add component',
			'layouts' => array (
				array (
					'key' => $id . '_FC12qiX7p2A8',
					'name' => 'image',
					'label' => 'Image',
					'display' => 'block',
					'max' => 1,
					'sub_fields' => array (
						array (
							'key' => $id . '_FC12qiX4p5b7',
							'label' => 'Content',
							'name' => 'tab1',
							'type' => 'tab',
							'required' => '',
						),
						array (
							'key' => $id . '_FC12qiX5p4b6',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'required' => '',
							'return_format' => 'object',
							'preview_size' => 'full'
						),
						array (
							'key' => $id . '_FC12qiX2p1C1',
							'label' => 'Layouts',
							'name' => 'layout',
							'type' => 'flexible_content',
							'required' => '',
							'button_label' => 'Add layout',
							'layouts' => array (
								array (
									'key' => $id . '_FC12qiX2p0C2',
									'name' => 'over-image',
									'label' => 'Over image',
									'display' => 'block',
									'max' => 1,
									'sub_fields' => array (
										array (
											'key' => $id . '_FC12qiX6i3B7',
											'name' => 'tab1',
											'label' => 'Content',
											'type' => 'tab',
											'required' => ''
										),
										array (
											'key' => $id . '_FC12qiX2p3c5',
											'label' => 'Title',
											'name' => 'title',
											'type' => 'textarea',
											'required' => '',
											'rows' => '1',
											'wrapper' => array (
												'width' => 30
											)
										),
										array (
											'key' => $id . '_FC12qiX1p8c9',
											'label' => 'Description',
											'name' => 'description',
											'type' => 'textarea',
											'required' => '',
											'rows' => '1',
											'wrapper' => array (
												'width' => 40
											)
										),
										array (
											'key' => $id . '_FC12q3X9p6c8',
											'label' => 'Price',
											'name' => 'price',
											'type' => 'text',
											'required' => '',
											'wrapper' => array (
												'width' => 15
											)
										),
										array (
											'key' => $id . '_FC12q4X8p5c7',
											'label' => 'Label',
											'name' => 'label',
											'type' => 'text',
											'required' => '',
											'wrapper' => array (
												'width' => 15
											)
										),
										array (
											'key' => $id . '_FC12qiX7i3B7',
											'name' => 'tab2',
											'label' => 'Settings',
											'type' => 'tab',
											'required' => ''
										),
										array (
											'key' => $id . '_FC12qiX6i4B6',
											'name' => 'type',
											'label' => 'Type',
											'type' => 'select',
											'required' => '',
											'wrapper' => array (
												'width' => '33'
											),
											'choices' => array (
												'Default',
												'Type 1',
												'Type 2',
												'Type 3'
											),
											'default_values' => array( 0 )
										),
									)
								),
								array (
									'key' => $id . '_FC12qiX3p1C3',
									'name' => 'mouseover',
									'label' => 'Mouseover',
									'display' => 'block',
									'max' => 1,
									'sub_fields' => array (
										array (
											'key' => $id . '_FC12qiX7P3c7',
											'name' => 'tab1',
											'label' => 'Content',
											'type' => 'tab',
											'required' => ''
										),
										array (
											'key' => $id . '_FC12q5X1p3c5',
											'label' => 'Title',
											'name' => 'title',
											'type' => 'textarea',
											'required' => '',
											'rows' => '1',
											'wrapper' => array (
												'width' => 30
											)
										),
										array (
											'key' => $id . '_FC12q6X7p8c9',
											'label' => 'Description',
											'name' => 'description',
											'type' => 'textarea',
											'required' => '',
											'rows' => '1',
											'wrapper' => array (
												'width' => 40
											)
										),
										array (
											'key' => $id . '_FC12q7X9p6c8',
											'label' => 'Price',
											'name' => 'price',
											'type' => 'text',
											'required' => '',
											'wrapper' => array (
												'width' => 15
											)
										),
										array (
											'key' => $id . '_FC12q8X8p5c7',
											'label' => 'Label',
											'name' => 'label',
											'type' => 'text',
											'required' => '',
											'wrapper' => array (
												'width' => 15
											)
										),
										array (
											'key' => $id . '_FC12qiX7i3c7',
											'name' => 'tab2',
											'label' => 'Settings',
											'type' => 'tab',
											'required' => ''
										),
										array (
											'key' => $id . '_FC12qiX6i4c6',
											'name' => 'type',
											'label' => 'Type',
											'type' => 'select',
											'required' => '',
											'wrapper' => array (
												'width' => '33'
											),
											'choices' => array (
												'Default',
												'Type 1',
												'Type 2',
												'Type 3'
											),
											'default_values' => array( 0 )
										),
									)
								)
							)
						),
						array (
							'key' => $id . '_FC12qiX3p6b4',
							'label' => 'Settings',
							'name' => 'tab2',
							'type' => 'tab',
							'required' => '',
						),
						array (
							'key' => $id . '_FC12qiX4p7b3',
							'label' => 'Height',
							'name' => 'height',
							'type' => 'select',
							'required' => '',
							'wrapper' => array (
								'width' => 33
							),
							'choices' => array (
								'auto' => 'Auto',
								'scuare' => 'Square',
								'200' => '200 pixels',
								'300' => '300 pixels',
								'400' => '400 pixels',
								'500' => '500 pixels',
							),
							'default_value' => 'auto'
						),
					)
				),
				array (
					'key' => $id . '_FC12qiX6p3A7',
					'name' => 'content',
					'label' => 'Content',
					'display' => 'block',
					'max' => 2,
					'sub_fields' => array (
						array (
							'key' => $id . '_FC12qiX7k3N7',
							'name' => 'tab1',
							'label' => 'Settings',
							'type' => 'tab',
							'required' => ''
						),
						array (
							'key' => $id . '_FC12q9X1p3c5',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'textarea',
							'required' => '',
							'rows' => '1',
							'wrapper' => array (
								'width' => 30
							)
						),
						array (
							'key' => $id . '_FC12q917p8c9',
							'label' => 'Description',
							'name' => 'description',
							'type' => 'textarea',
							'required' => '',
							'rows' => '1',
							'wrapper' => array (
								'width' => 40
							)
						),
						array (
							'key' => $id . '_FC12q329p6c8',
							'label' => 'Price',
							'name' => 'price',
							'type' => 'text',
							'required' => '',
							'wrapper' => array (
								'width' => 15
							)
						),
						array (
							'key' => $id . '_FC12q328p5c7',
							'label' => 'Label',
							'name' => 'label',
							'type' => 'text',
							'required' => '',
							'wrapper' => array (
								'width' => 15
							)
						),
						array (
							'key' => $id . '_FC12qiX7i3N7',
							'name' => 'tab2',
							'label' => 'Settings',
							'type' => 'tab',
							'required' => ''
						),
						array (
							'key' => $id . '_FC12qiX6i4N6',
							'name' => 'type',
							'label' => 'Type',
							'type' => 'select',
							'required' => '',
							'wrapper' => array (
								'width' => '33'
							),
							'choices' => array (
								'Default',
								'Type 1',
								'Type 2',
								'Type 3'
							),
							'default_values' => array( 0 )
						),
					)
				)
			)
		),
	);
}


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
			'name' => 'row-type',
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
			'layouts' => array (
				array (
					'key' => $id . '_21126955f123',
					'name' => 'contentcard',
					'label' => 'Content card',
					'display' => 'block',
					'sub_fields' => get_content_local_field( $id )
				),
				array (
					'key' => $id . '_21126946d214',
					'name' => 'flexicard',
					'label' => 'Flexi Card',
					'display' => 'block',
					'sub_fields' => get_flexi_local_field( $id )
				)
			)
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
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'default_value' => array (
				0 => 'center',
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
				'stretch' => 'Stretch',
				'top' => 'Top',
				'middle' => 'Middle',
				'bottom' => 'Bottom',
			),
			'default_value' => array( 'middle' )
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
				'stretch' => 'Stretch',
				'top' => 'Top',
				'middle' => 'Middle',
				'bottom' => 'Bottom',
			),
			'default_value' => array( 'middle' )
		),								
		array (
			'key' => $id . '_18212372d49ff',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
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
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
				'space-around' => 'Space Around',
				'space-between' => 'Space Between'
			),
			'default_value' => array (
				0 => 'left',
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
			'choices' => array (
				'1' => 'One',
				'2' => 'Two',
				'3' => 'Three',
				'4' => 'Four',
				'5' => 'Five',
				'6' => 'Six',
			),
			'default_value' => '1',
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
				'none' => 'None',
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


		array (
			'key' => $id . '_4821d6ba6de39',
			'label' => 'Background',
			'name' => 'Background_Options_0',
			'type' => 'tab',
			'required' => 0
		),

		array (
			'key' => $id . '_4821t6ba6ze48',
			'label' => 'Background',
			'name' => 'background',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'bgrd_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
	);
}

/**
 * Generates Column local fields array
 */
function get_content_local_field( $id = '1234QWERasdf' ) {
	return array(
		array (
			'key' => $id . '_5121z71cd49f1',
			'label' => 'Content',
			'name' => 'CC',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_N121z71cd48f1',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add Content',
			'layouts' => array (

				// Headline
				array (
					'key' => $id . '_N121zN1cd48f3',
					'name' => 'headline',
					'label' => 'Headline',
					'display' => 'block',
					'sub_fields' => get_headline_local_field( $id ),
				),

				// Editor
				array (
					'key' => $id . '_N121z7Ocd48f2',
					'name' => 'editor',
					'label' => 'Editor',
					'display' => 'block',
					'sub_fields' => get_editor_local_field( $id ),
				),

				// Button
				array (
					'key' => $id . '_N121z7ocd48f1',
					'name' => 'button-group',
					'label' => 'Button',
					'display' => 'block',
					'sub_fields' => get_button_group_local_field( $id ),
				),

				// Map
				array (
					'key' => $id . '_N121z71md48f1',
					'name' => 'map',
					'label' => 'Map',
					'display' => 'block',
					'sub_fields' => get_map_local_field( $id ),
				),

				// Image
				array (
					'key' => $id . '_NImGz71cd48f1',
					'name' => 'image',
					'label' => 'Image',
					'display' => 'block',
					'sub_fields' => get_image_local_field( $id ),
				),

				// Video
				array (
					'key' => $id . '_N1Viz71cd48f0',
					'name' => 'oembed',
					'label' => 'oEmbed Video',
					'display' => 'block',
					'sub_fields' => get_oembed_local_field( $id ),
				),

				// Horizontal line
				array (
					'key' => $id . '_N1Viz71cHe8f0',
					'name' => 'line',
					'label' => 'Horizontal Line',
					'display' => 'block',
					'sub_fields' => get_hr_local_field( $id ),
				),

				// Accordion
				array (
					'key' => $id . '_N121z66cd48f1',
					'name' => 'accordion',
					'label' => 'Accordion',
					'display' => 'block',
					'sub_fields' => get_accordion_local_field( $id )
				),

				// Testimonial
				array (
					'key' => $id . '_Nj2j271cd48f0',
					'name' => 'testimonials',
					'label' => 'Testimonials',
					'display' => 'block',
					'sub_fields' => get_content_testimonial_local_field( $id ),
				),

				// Gravity Form
				array (
					'key' => $id . '_N1F1z71Fd48f1',
					'name' => 'form',
					'label' => 'Form',
					'display' => 'block',
					'sub_fields' => get_gform_local_field( $id ),
				),
			)
		),
		array (
			'key' => $id . '_5121e71cd49f1',
			'label' => 'Settings',
			'name' => 'CS_Type_tab_0',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_8121e7Ecd4Ef8',
			'label' => 'Style',
			'name' => 'style',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33'
			),
			'choices' => get_available_styles_list( 'placeholder' ),
		),
		array (
			'key' => $id . '_8I2ie7Ecd4Ef8',
			'label' => 'Borders',
			'name' => 'borders',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '33',
			),
			'choices' => array (
				'none' => 'None',
				'both' => 'Both',
				'left' => 'Left',
				'right' => 'Light'
			),
			'allow_null' => 0,
			'default_value' => 'none',
		),
		array (
			'key' => $id . '_5111ee172a422',
			'label' => 'Borders',
			'name' => 'Bows_tab_0',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_8I2ie7Ecd4Ef8',
						'operator' => '!=',
						'value' => 'none',
					),
				),
			),
		),
		array (
			'key' => $id . '_bIziQ7ecd4Ef8',
			'label' => 'Width',
			'name' => 'border-width',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_8I2ie7Ecd4Ef8',
						'operator' => '!=',
						'value' => 'none',
					),
				),
			),
			'wrapper' => array (
				'width' => '25',
			),
			'default_value' => '1',
			'placeholder' => '1',
			'append' => 'px',
			'min' => '1',
			'max' => '10'
		),
		array (
			'key' => $id . '_bIziQ7Ecd4EV8',
			'label' => 'Style',
			'name' => 'border-style',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_8I2ie7Ecd4Ef8',
						'operator' => '!=',
						'value' => 'none'
					),
				),
			),
			'wrapper' => array (
				'width' => '25',
			),
			'choices' => array (
				'solid' => 'Solid',
				'dashed' => 'Dashed',
				'dotted' => 'Dotted'
			),
			'allow_null' => 0,
			'default_value' => 'solid',
		),
		array (
			'key' => $id . '_8I2ie7ECd4Ef8',
			'label' => 'Color',
			'name' => 'border-color',
			'type' => 'rgba_color',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_8I2ie7Ecd4Ef8',
						'operator' => '!=',
						'value' => 'none'
					),
				),
			),
			'wrapper' => array (
				'width' => '25',
			),
		),
		array (
			'key' => $id . '_8u2ie7ECd4Ef8',
			'label' => 'Size',
			'name' => 'border-size',
			'type' => 'text',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_8I2ie7Ecd4Ef8',
						'operator' => '!=',
						'value' => 'none'
					),
				),
			),
			'wrapper' => array (
				'width' => '25',
			),
			'placeholder' => '50px or 10%',
			'maxlength' => '5',
		),
	);
}

/**
 * Generates gForm local fields array
 */
function get_gform_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_gF21zN1cd48f3',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_gF21zN1cd48f2',
			'label' => 'Form ID',
			'name' => 'id',
			'type' => 'number',
			'required' => 0,
			'wrapper' => array (
				'width' => '25',
			),
			'min' => '0',
			'prepend' => '#'
		),
		array (
			'key' => $id . '_gF21zN1cd48f0',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_gFMtzN1cd48f4',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
	);
}

/**
 * Generates headline local fields array
 */
function get_headline_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T121zN1cd48f3',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_N121zN1cd48f3',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => '75',
			),
		),
		array (
			'key' => $id . '_N121zN1cd48f1',
			'label' => 'Tag',
			'name' => 'tag',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '25'
			),
			'choices' => array (
				'p'  => 'Paragraf',
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
			),
			'allow_null' => 0,
		),
		array (
			'key' => $id . '_T221zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T2MtzN1cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_N121zN1cd48f4',
			'label' => 'Alignment',
			'name' => 'align',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '25'
			),
			'choices' => array (
				'auto'  => 'Auto',
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'allow_null' => 0,
		),
	);
}

/**
 * Generates editor local fields array
 */
function get_editor_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T121zN1cd48f4',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_N121z7Ocd48f1',
			'label' => 'Content editor',
			'name' => 'editor',
			'type' => 'wysiwyg',
			'required' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
		),
		array (
			'key' => $id . '_T421zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T4MtzN1cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
	);
}

/**
 * Generates button
 */
function get_button_local_field( $id = '1234QWERasdf' ) {
	return array(
		array (
			'key' => $id . '_T9X2zN1cd46s3',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_59944311d4a7b',
			'label' => 'Button',
			'name' => 'button',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'bttn_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),

		array (
			'key' => $id . '_T9XszN1cd46z3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9X2zN6cd46Y3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
	);
}

/**
 * Generates button local fields array
 */
function get_button_group_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T521zN1cd48f4',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_N121z7ocd48f5',
			'label' => 'Contet',
			'name' => 'content',
			'type' => 'wysiwyg',
			'required' => '',
		),

		array (
			'key' => $id . '_59944311d4a7b',
			'label' => 'Button',
			'name' => 'button',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'bttn_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),

		array (
			'key' => $id . '_T521zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T5MtzN1cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_T5MbzN1cD59q4',
			'label' => 'Align',
			'name' => 'align',
			'type' => 'select',
			'required' => '',
			'wrapper' => array (
				'width' => '25',
			),
			'choices' => array (
				'center' => 'Center',
				'left'   => 'Left',
				'right'  => 'Right'
			),
			'default_values' => array ( 'center' )
		),
	);
}

/**
 * Generates button local fields array
 */
function get_gallery_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T521QzPcd48f4',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_Gl21QzPcd48f5',
			'label' => 'Gallery',
			'name' => 'gallery',
			'type' => 'gallery',
			'required' => 0,
		),

		array (
			'key' => $id . '_Gl21QZPcd48f6',
			'label' => 'Button label',
			'name' => 'label',
			'type' => 'text',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_T5MbQzPcd57f4',
						'operator' => '==',
						'value' => 'full-screen'
					)
				)
			)
		),

		array (
			'key' => $id . '_QzP1zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T5MtzN1cd4QzP',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array(
			'key' => $id . '_T5MbQzPcd16f0',
			'name' => 'width',
			'label' => 'Width',
			'type' => 'select',
			'required' => '',
			'choices' => array (
				'auto' => 'Auto',
				'full' => 'Full width',
			),
			'default_values' => array(
				'full'
			),
			'wrapper' => array (
				'width' => 25
			)
		),
		array(
			'key' => $id . '_T5MbQzPcd57f4',
			'name' => 'type',
			'label' => 'Type of the gallery',
			'type' => 'select',
			'required' => '',
			'choices' => array (
				'simple' => 'Simple slider',
				'full-screen' => 'Full screen popup'
			),
			'default_values' => array(
				'simple'
			),
			'wrapper' => array (
				'width' => 25
			)
		),

		array (
			'key' => $id . '_T5MbQzPcd84f7',
			'label' => 'Single type of gallery explanation',
			'name' => 'text_1',
			'type' => 'message',
			'required' => 0,
			'message' => 'That means the gallery looks like just single image and arrows placed on left and right edges of the gallery. Clicking on these arrows will smooth switch to next or previous image.',
			'new_lines' => '',
			'esc_html' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_T5MbQzPcd57f4',
						'operator' => '==',
						'value' => 'simple'
					)
				)
			)
		),
		array (
			'key' => $id . '_T5MbQzPcd92f9',
			'label' => 'Full screen popup type of gallery explanation',
			'name' => 'text_3',
			'type' => 'message',
			'required' => 0,
			'message' => 'This one is just one image without any arrows but has a button tells something like "yo man, click me". Afterwards clicking action, you have a full screen slider opened.',
			'new_lines' => '',
			'esc_html' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_T5MbQzPcd57f4',
						'operator' => '==',
						'value' => 'full-screen'
					)
				)
			)
		),
	);
}

/**
 * Generates map local fields array
 */
function get_map_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T6TbzN1cd48f3',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_N121z71md48f2',
			'label' => 'Location',
			'name' => 'location',
			'type' => 'google_map',
			'required' => '',
		),

		array (
			'key' => $id . '_T621zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T6MtzN1cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_NImGW71cd48fw',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'auto' => 'Auto',
				'full' => 'Full'
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => '25',
			),
		),
	);
}

/**
 * Generates image local fields array
 */
function get_image_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T721ZN1cd48f3',
			'label' => 'Content',
			'name' => 'tab_Content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_NImGz71cd48f2',
			'label' => 'Attach image',
			'name' => 'image',
			'type' => 'image',
			'required' => 0,
			'return_format' => 'id',
			'preview_size' => 'rpwe-thumbnail',
			'library' => 'all',
		),

		array (
			'key' => $id . '_T721zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T7MtzN1cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_NImGz71cd48f3',
			'label' => 'Shape',
			'name' => 'shape',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'auto' => 'Auto',
				'circle' => 'Circle',
				'square' => 'Square'
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => '25',
			),
		),
		array (
			'key' => $id . '_NImGz71cd48f4',
			'label' => 'Url',
			'name' => 'url',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => '25',
			),
			'placeholder' => 'http://example.com',
		),
		array (
			'key' => $id . '_NImGz71cd48f5',
			'label' => 'New window',
			'name' => 'target',
			'type' => 'true_false',
			'required' => '',
			'message' => 'Yes, open there',
			'wrapper' => array (
				'width' => '25'
			),
		),
		array (
			'key' => $id . '_NImGz71cd48f6',
			'label' => 'Size',
			'name' => 'size',
			'type' => 'number',
			'required' => '',
			'wrapper' => array (
				'width' => '25',
			),
			'default_value' => '100',
			'placeholder' => '100',
			'append' => '%',
			'min' => '1',
			'max' => '100'
		),
		array (
			'key' => $id . '_NImGW71cd481w',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'auto' => 'Auto',
				'full' => 'Full'
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => '25',
			),
		),
	);
}

/**
 * Generates oembed local fields array
 */
function get_oembed_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X1zN1cd48f3',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_N1Viz71cd48f1',
			'label' => 'Video',
			'name' => 'video',
			'type' => 'oembed',
			'required' => ''
		),

		array (
			'key' => $id . '_T9X5zN1cd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9X1zN6cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_T9XSzD1cd47f4',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'auto' => 'Auto',
				'full' => 'Full'
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => '25',
			),
		),
	);
}

/**
 * Generates trip details local fields array
 */
function get_trip_details_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5zritpd4867',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_T9X5zriTpd1867',
			'label' => 'Label',
			'name' => 'label',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => 30,
			),
		),

		array (
			'key' => $id . '_T9x5zriTpd1867',
			'label' => 'Detail',
			'name' => 'detail',
			'type' => 'textarea',
			'required' => 0,
			'wrapper' => array (
				'width' => 70,
			),
			'rows' => '3'
		),

		array (
			'key' => $id . '_T9X5zritpd48f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9ritpN6cd48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),

		array (
			'key' => $id . '_T9X5zriTpd2867',
			'label' => 'Accordion',
			'name' => 'is-accorion',
			'type' => 'true_false',
			'required' => '',
			'message' => 'Use it',
			'wrapper' => array (
				'width' => '25'
			),
		),

		array (
			'key' => $id . '_T9X5zriTpd2868',
			'label' => 'Icon',
			'name' => 'is-icon',
			'type' => 'true_false',
			'required' => '',
			'message' => 'Use it',
			'wrapper' => array (
				'width' => '25'
			),
		),

		array (
			'key' => $id . '_T9Ac123tpd48f3',
			'label' => 'Accordion',
			'name' => 'tab_accordion',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
			'conditional_logic' => array (
				array(
					array (
						'field' => $id . '_T9X5zriTpd2867',
						'operator' => '==',
						'value' => 1
					)
				)
			)
		),
		array (
			'key' => $id . '_T9Ac124tpd48f3',
			'label' => 'Link label',
			'name' => 'link-label',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => 30,
			),
			'conditional_logic' => array (
				array(
					array (
						'field' => $id . '_T9X5zriTpd2867',
						'operator' => '==',
						'value' => 1
					)
				)
			)
		),
		array (
			'key' => $id . '_T9Ac125tpd48f3',
			'label' => 'Hidden content',
			'name' => 'hidden-content',
			'type' => 'wysiwyg',
			'required' => 0,
			'wrapper' => array (
				'width' => 70,
			),
			'conditional_logic' => array (
				array(
					array (
						'field' => $id . '_T9X5zriTpd2867',
						'operator' => '==',
						'value' => 1
					)
				)
			)
		),

		array (
			'key' => $id . '_T9X5z79td412f3',
			'label' => 'Icon',
			'name' => 'tab_icon',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_T9X5zriTpd2868',
						'operator' => '==',
						'value' => 1,
					),
				),
			),
		),
		array (
			'key' => $id . '_T9X5z70opd41f3',
			'label' => 'Icon',
			'name' => 'icon',
			'type' => 'font-awesome',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_T9X5zriTpd2868',
						'operator' => '==',
						'value' => 1,
					),
				),
			),
			'default_value' => 'fa',
			'save_format' => 'class'
		),
	);
}

/**
 * Generates trip details local fields array
 */
function get_icons_list_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5HrLiip2h67',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),

		array (
			'key' => $id . '_TRX5HrLiip2h67',
			'label' => 'Icons list',
			'name' => 'icons-list',
			'type' => 'repeater',
			'required' => 0,
			'layout' => 'block',
			'collapsed' => $id . '_A2982bc694Cd62',
			'sub_fields' => array (
				array(
					'key'   => $id . '_A2982bc694Cd61',
					'name'  => 'icon-type',
					'label' => 'Icon type',
					'type'  => 'select',
					'required' => 0,
					'choices' => array(
						'checklist' => 'Checklist icon',
						'custom'    => 'Custom'
					),
					'default_value' => 'checklist',
					'wrapper' => array (
						'width' => 33
					)
				),
				array (
					'key' => $id . '_A2982bc694Cd63',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'required' => 0,
					'wrapper' => array (
						'width' => '33',
					),
					'save_format' => 'class',
					'conditional_logic' => array(
						array(
							array(
								'field' => $id . '_A2982bc694Cd61',
								'operator' => '==',
								'value' => 'custom'
							)
						)
					),
					'fa_live_preview' => false
				),
				array (
					'key' => $id . '_A2981bc664cd61',
					'label' => 'Icon size',
					'name' => 'size',
					'type' => 'number',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => $id . '_A2982bc694Cd61',
								'operator' => '==',
								'value' => 'custom'
							)
						)
					),
					'wrapper' => array (
						'width' => '33',
					),
					'placeholder' => 'inhreit',
					'append' => 'px',
					'step' => 1,
				),

				array (
					'key' => $id . '_594905dcbef94',
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
					'key' => $id . '_A2982bc694Cd62',
					'label' => 'Textarea',
					'name' => 'textarea',
					'type' => 'text',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '33',
					)
				),
				array (
					'key' => $id . '_A2982bc188C124',
					'label' => 'Url',
					'name' => 'url',
					'type' => 'text',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '33',
					)
				),
				array (
					'key' => $id . '_A2981bc664cD50',
					'label' => 'Font size',
					'name' => 'font-size',
					'type' => 'number',
					'required' => 0,
					'wrapper' => array (
						'width' => '33',
					),
					'placeholder' => '20',
					'append' => 'px',
					'step' => 1,
				),
			),
		),
 

		array (
			'key' => $id . '_T9H5zULiip28f3',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9HLiiU2ch48f3',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array(
			'key'   => $id . '_A298lbc694Cd94',
			'name'  => 'layout',
			'label' => 'Layout',
			'type'  => 'select',
			'required' => 0,
			'choices' => array(
				'cols-1'    => 'Single column',
				'cols-2'    => 'Two columns',
				'cols-3'    => 'Three columns',
				'cols-4'    => 'Four columns',
			),
			'default_value' => 'cols-3',
			'wrapper' => array (
				'width' => 25
			)
		),
		array(
			'key'   => $id . '_A298lbc694Dc85',
			'name'  => 'align',
			'label' => 'Align',
			'type'  => 'select',
			'required' => 0,
			'choices' => array(
				'auto'    => 'Auto',
				'center'  => 'Center',
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => 25
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_A298lbc694Cd94',
						'operator' => '==',
						'value' => 'cols-1'
					)
				)
			)
		),
		array(
			'key'   => $id . '_A298lbc694Fd76',
			'name'  => 'vertical',
			'label' => 'Vertical align',
			'type'  => 'select',
			'required' => 0,
			'choices' => array(
				'baseline' => 'Auto',
				'center'  => 'Center',
			),
			'default_value' => 'baseline',
			'wrapper' => array (
				'width' => 25
			)
		),
	);
}

/**
 * Generates hr local fields array
 */
function get_hr_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5zN1cd48f1',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9X1zN6cd48f2',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_AImGW71cd48fw',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'auto' => 'Auto',
				'half' => '50% of container',
				'full' => 'Full'
			),
			'default_value' => 'auto',
			'wrapper' => array (
				'width' => '25',
			),
		),
		array (
			'key' => $id . '_AImGW62cd39fu',
			'label' => 'Style',
			'name' => 'style',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'solid' => 'Solid',
				'dashed' => 'Dashed',
				'dotted' => 'Dotted',
			),
			'default_value' => 'solid',
			'wrapper' => array (
				'width' => '25',
			),
		),
	);
}

/**
 * Generates accordion local fields array
 */
function get_accordion_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5zN1cd48f9',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_N121z66cd48f2',
			'label' => 'Label',
			'name' => 'label',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => 50,
			),
		),
		array (
			'key' => $id . '_N121z66cd48f3',
			'label' => 'Open label',
			'name' => 'open',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => 25,
			),
			'default_value' => 'Show More',
		),
		array (
			'key' => $id . '_N121z66cd48f4',
			'label' => 'Close label',
			'name' => 'close',
			'type' => 'text',
			'required' => 0,
			'wrapper' => array (
				'width' => 25,
			),
			'default_value' => 'Close More',
		),
		array (
			'key' => $id . '_N121z66cd48f5',
			'label' => 'Content',
			'name' => 'wysiwyg',
			'type' => 'wysiwyg',
			'required' => 0,
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),

		array (
			'key' => $id . '_T9X5zN1cd48f6',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9X1zN6cd48f7',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
	);
}

/**
 * Generates content_testimonial local fields array
 */
function get_content_testimonial_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5zN1Ad48f9',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_Nj1a271cd48f1',
			'label' => 'Testimonials',
			'name' => 'testimonials',
			'type' => 'post_object',
			'required' => 0,
			'post_type' => array (
				'testimonial'
			),
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),

		array (
			'key' => $id . '_T9a3zN1cd48f6',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_T9A2zN6cd48f7',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
	);
}

/**
 * Generates content_testimonial local fields array
 */
function get_image_card_local_field( $id = '1234QWERasdf' ) {
	return array (
		array (
			'key' => $id . '_T9X5ZN1cd48f9',
			'label' => 'Content',
			'name' => 'tab_content',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),
		array (
			'key' => $id . '_ImC1d6db6de3a',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'required' => 0,
			'return_format' => 'id',
			'preview_size' => 'full',
			'library' => 'all',
		),
		array (
			'key' => $id . '_ImC1d6db6de5a',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'wysiwyg',
			'required' => 0,
		),

		array (
			'key' => $id . '_Imc3zN11u48f6',
			'label' => 'Settings',
			'name' => 'tab_settings',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top'
		),		
		array (
			'key' => $id . '_Imc3zN11u47y7',
			'label' => 'Margins',
			'name' => 'margins',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'marg_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'wrapper' => array(
				'width' => 50
			)
		),
		array (
			'key' => $id . '_Imc1zN11u47f9',
			'label' => 'Layout',
			'name' => 'layout',
			'type' => 'select',
			'required' => 0,
			'wrapper' => array (
				'width' => '15',
			),
			'choices' => array (
				'style-1' => 'Style 1',
				'style-2' => 'Style 2'
			),
			'default_value' => array (
				0 => 'style-1',
			),
		),
		array (
			'key' => $id . '_Imc1zN12u47f9',
			'label' => 'Style 1: Description',
			'name' => 'separator_1',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_Imc1zN11u47f9',
						'operator' => '==',
						'value' => 'style-1'
					)
				) 
			),
			'wrapper' => array (
				'width' => '35',
			),
			'message' => 'Single column: Image -> Content',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array (
			'key' => $id . '_Imc1zN22u47f1',
			'label' => 'Style 2: Description',
			'name' => 'separator_2',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => $id . '_Imc1zN11u47f9',
						'operator' => '==',
						'value' => 'style-2'
					)
				) 
			),
			'message' => 'Two columns: 1. Image; 2. Content',
			'new_lines' => '',
			'esc_html' => 0,
			'wrapper' => array (
				'width' => '35',
			),
		),
	);
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
			'key' => $id . '_5821d6ba5de39',
			'label' => 'Wrapper options',
			'name' => 'Wrapper_Options_0',
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
		),
		array (
			'key' => 'bgrd_582si7ez6imbg',
			'label' => 'Expande the section',
			'name' => 'expanded',
			'type' => 'select',
			'required' => 0,
			'choices' => array (
				'nope' => 'No',
				'yep' => 'Yes',
			),
			'default_values' => array ( 'nope' ),
			'wrapper' => array(
				'width' => 25
			)
		),
		array (
			'key' => $id . '_5821d6ba6de39',
			'label' => 'Background',
			'name' => 'Background_Options_0',
			'type' => 'tab',
			'required' => 0
		),

		array (
			'key' => $id . '_5821t6ba6ze48',
			'label' => 'Background',
			'name' => 'background',
			'type' => 'clone',
			'required' => 0,
			'clone' => array (
				0 => 'bgrd_59930ca194830',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
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
			'key'           => $id . '_5821da4aabd8r',
			'label'         => 'Dividers',
			'name'          => 'dividers',
			'type'          => 'clone',
			'required'      => 0,
			'clone'         => array (
				0 => 'dibo_59930ca194830',
			),
			'display'       => 'group',
			'layout'        => 'block',
			'prefix_label'  => 0,
			'prefix_name'   => 0,
		),

		array (
			'key' => $id . '_5a2jea1x2a4d4',
			'label' => 'AJAX',
			'name' => 'Ajax_tab_0',
			'type' => 'tab',
			'required' => 0,
			'placement' => 'top',
		),
		array (
			'key' => $id . '_5a2jea1x2a3d5',
			'label' => 'Type',
			'name' => 'ajax_type',
			'type' => 'select',
			'required' => '',
			'choices' => array (
				'false' => 'No, thanks',
				'underneath' => 'Load underneath'
			),
			'default_values' => array (
				'false'
			),
			'wrapper' => array (
				'width' => '25'
			)
		),
		array (
			'key' => $id . '_5a2jea1x2a1d7',
			'name' => 'separator_1',
			'type' => 'message',
			'required' => 0,
			'conditional_logic' => 0,
			'message' => '<hr />',
			'new_lines' => '',
			'esc_html' => 0,
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
		),
		array (
			'key' => $id . '_5a2jea1x2a2d6',
			'label' => 'Loading button',
			'name' => 'ajax_button',
			'type' => 'select',
			'required' => '',
			'choices' => array (
				'under-rows' => 'Button under rows',
				'in-context' => 'In context'
			),
			'default_values' => array (
				'under-rows'
			),
			'wrapper' => array (
				'width' => '25'
			),
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
		),
		array (
			'key' => $id . '_5a2jea1x2a0d8',
			'label' => 'Show more button label',
			'name' => 'ajax_label_show',
			'type' => 'text',
			'required' => '',
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a2d6',
						'operator' => '==',
						'value' => 'under-rows'
					),
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
			'wrapper' => array(
				'width' => 25
			),
			'placeholder' => 'Show more'
		),
		array (
			'key' => $id . '_5a2jea1x2a9c9',
			'label' => 'Hide button label',
			'name' => 'ajax_label_hide',
			'type' => 'text',
			'required' => '',
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a2d6',
						'operator' => '==',
						'value' => 'under-rows'
					),
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
			'wrapper' => array(
				'width' => 25
			),
			'placeholder' => 'Show less'
		),
		array (
			'key' => $id . '_5a2jea1x2a8c9',
			'label' => 'AJAX trigger',
			'name' => 'ajax_trigger',
			'type' => 'text',
			'required' => '',
			'wrapper' => array (
				'width' => '50'
			),
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a2d6',
						'operator' => '==',
						'value' => 'in-context'
					),
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
			'prepend' => 'ajax-trigger=',
			'placeholder' => 'example-trigger'
		),
		array (
			'key' => $id . '_5a2jea1x1a1v7',
			'name' => 'separator_2',
			'type' => 'message',
			'required' => 0,
			'conditional_logic' => 0,
			'message' => '<hr />',
			'new_lines' => '',
			'esc_html' => 0,
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					),
				)
			),
		),
		array (
			'key' => $id . '_5a2jea1x1a0v8',
			'label' => 'Show at once',
			'name' => 'ajax_at_once',
			'type' => 'number',
			'required' => '',
			'wrapper' => array (
				'width' => '25'
			),
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
			'append' => 'row(s)',
			'default_value' => '1',
			'min' => '0'
		),
		array (
			'key' => $id . '_5a2jea1x1a9v9',
			'label' => 'Showing steps',
			'name' => 'ajax_steps',
			'type' => 'select',
			'required' => '',
			'choices' => array (
				'all' => 'All hidden rows',
				'one-by-one' => 'One by one'
			),
			'default_values' => array (
				'under-rows'
			),
			'conditional_logic' => array(
				array(
					array (
						'field' => $id . '_5a2jea1x2a2d6',
						'operator' => '==',
						'value' => 'under-rows'
					),
					array (
						'field' => $id . '_5a2jea1x2a3d5',
						'operator' => '!=',
						'value' => 'false'
					)
				)
			),
			'wrapper' => array(
				'width' => 25
			)
		),
	);
}


function get_hero_area_local_field( $id = '1234567890' ) {
	return array (
		array (
			'key'          => $id . '_qdc13of931z03',
			'label'        => 'Components',
			'name'         => 'components',
			'type'         => 'flexible_content',
			'required'     => '',
			'button_label' => 'Add Component',
			'layouts'      => array (
				array (
					'key'        => $id . '_qdc13of932z00',
					'name'       => 'banner',
					'label'      => 'Banner',
					'display'    => 'block',
					'sub_fields' => array (
						array (
							'key'        => $id . '_qdc13of931q85',
							'label'      => 'Content',
							'name'       => 'content_tab',
							'type'       => 'tab',
							'required'   => '',
						),
						array (
							'key'          => $id . '_qdc13of931q94',
							'label'        => 'Content',
							'name'         => 'content',
							'type'         => 'flexible_content',
							'required'     => '',
							'button_label' => 'Add content',
							'layouts'      => array (
								array (
									'key'        => $id . '_qdc13of931q75',
									'name'       => 'headline',
									'label'      => 'Headline',
									'display'    => 'block',
									'sub_fields' => get_headline_local_field( 'he-co' ),
								),
								array (
									'key'        => $id . '_qdc13of931q66',
									'name'       => 'editor',
									'label'      => 'Editor',
									'display'    => 'block',
									'sub_fields' => get_editor_local_field( 'he-co' ),
								),
								array (
									'key'        => $id . '_qdc13of931q57',
									'name'       => 'button',
									'label'      => 'Button',
									'display'    => 'block',
									'sub_fields' => get_button_local_field( 'he-co' )
								),
							)
						),
						array (
							'key'       => $id . '_qdc13of93bs00',
							'label'     => 'Settings',
							'name'      => 'tab_settings',
							'type'      => 'tab',
							'required'  => 0,
							'placement' => 'top'
						),
						array (
							'key'      => $id . '_qdc13of931s91',
							'label'    => 'Height',
							'name'     => 'height',
							'type'     => 'select',
							'required' => 0,
							'choices'  => array (
								'auto'   => 'Auto',
								'200px'  => '200px',
								'300px'  => '300px',
								'400px'  => '400px',
								'500px'  => '500px',
								'600px'  => '600px',
								'100vh'  => '100% of an user\'s display'
							),
							'default_values' => array (
								'auto' => 'Auto'
							),
							'wrapper' => array (
								'width' => '25'
							)
						),
						array (
							'key'      => $id . '_qdc13of931s82',
							'label'    => 'Width',
							'name'     => 'width',
							'type'     => 'select',
							'required' => 0,
							'choices'  => array (
								'full' => 'Full width',
								'box'  => 'Fit in page\'s grid',
							),
							'default_values' => array (
								'full' => 'Full width'
							),
							'wrapper' => array (
								'width' => '25'
							)
						),
						array (
							'key'      => $id . '_qdc13of931s63',
							'label'    => 'Vertical align',
							'name'     => 'vertical-align',
							'type'     => 'select',
							'required' => 0,
							'choices'  => array (
								'center'     => 'Center',
								'stretch'    => 'Stretch',
								'start' => 'Top',
								'end'     => 'Bottom'
							),
							'default_values' => array (
								'center'     => 'Center'
							),
							'wrapper'   => array (
								'width' => '25'
							)
						),

						array (
							'key' => $id . '_qdc13of93bs44',
							'label' => 'Inner content',
							'name' => 'Inner_Options_0',
							'type' => 'tab',
							'required' => 0,
						),
						array (
							'key'      => $id . '_qdc13of931s94',
							'label'    => 'Width',
							'name'     => 'inner-width',
							'type'     => 'select',
							'required' => 0,
							'choices'  => array (
								'full' => 'Full width',
								'4-5'  => '4/5',
								'2-3'  => '3/4',
								'1-2'  => '1/2',
								'1-3'  => '1/3',
								'1-4'  => '1/4',
								'auto' => 'Auto'
							),
							'default_values' => array (
								'full' => 'Full width'
							),
							'wrapper' => array (
								'width' => '25'
							)
						),
						array (
							'key'      => $id . '_qdc13of931s45',
							'label'    => 'Horizontal align',
							'name'     => 'inner-align',
							'type'     => 'select',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field'    => $id . '_qdc13of931s94',
										'operator' => '!=',
										'value'    => 'full'
									)
								)
							),
							'choices'  => array (
								'center' => 'Center',
								'start'  => 'Left',
								'end'    => 'Right',
							),
							'default_values' => array (
								'center'     => 'Center'
							),
							'wrapper'   => array (
								'width' => '25'
							)
						),
						array (
							'key'      => $id . '_qdc13of931s54',
							'label'    => 'Vertical align',
							'name'     => 'inner-vertical-align',
							'type'     => 'select',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field'    => $id . '_qdc13of931s63',
										'operator' => '==',
										'value'    => 'stretch'
									)
								)
							),
							'choices'  => array (
								'center'        => 'Center',
								'start'         => 'Top',
								'end'           => 'Bottom',
								'space-between' => 'Space Between',
								'space-around'  => 'Space Around',
							),
							'default_values' => array (
								'center'     => 'Center'
							),
							'wrapper'   => array (
								'width' => '25'
							)
						),

						array (
							'key' => $id . '_qdc13of93bs73',
							'label' => 'Dividers',
							'name' => 'Dividers_Options_0',
							'type' => 'tab',
							'required' => 0,
						),
						array (
							'key'           => $id . '_5824fa4aabd9u',
							'label'         => 'Dividers',
							'name'          => 'dividers',
							'type'          => 'clone',
							'required'      => 0,
							'clone'         => array (
								0 => 'dibo_59930ca194830',
							),
							'display'       => 'group',
							'layout'        => 'block',
							'prefix_label'  => 0,
							'prefix_name'   => 0,
						),


						array (
							'key' => $id . '_qdc13of93bs91',
							'label' => 'Background',
							'name' => 'Background_Options_0',
							'type' => 'tab',
							'required' => 0,
						),

						array (
							'key' => $id . '_qdc13of93bs82',
							'label' => 'Background',
							'name' => 'background',
							'type' => 'clone',
							'required' => 0,
							'clone' => array (
								0 => 'bgrd_59930ca194830',
							),
							'display' => 'group',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
						),
					)
				)
			)
		),
	);
}

?>
