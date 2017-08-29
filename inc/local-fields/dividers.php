<?php 
/**
 * ACF local fields: Dividers
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ):

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

endif;
