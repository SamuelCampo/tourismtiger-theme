<?php 
/**
 * ACF local fields: Primary Content
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

acf_add_local_field_group(array (
	'key' => 'pr-co_5829d7835eb2b',
	'title' => 'Primary content area',
	'fields' => array (
		array (
			'key' => 'pr-co_5821d29cf2cca',
			'label' => 'Primary Content',
			'name' => 'primary-content',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add section',
			'layouts' => array (
				array (
					'key' => '5821d2b10e742',
					'name' => 'section',
					'label' => 'Section',
					'display' => 'block',
					'sub_fields' => get_section_local_field( 'pr-co' )
				),
				array (
					'key' => 'pr-co_49650003e333f',
					'name' => 'section-template',
					'label' => 'Template',
					'display' => 'block',
					'sub_fields' => array(
						array (
							'key' => 'pr-co_48650003e333f',
							'label' => 'Choose section template',
							'name' => 'section-id',
							'type' => 'post_object',
							'instructions' => '',
							'required' => 0,
							'post_type' => array (
								'template'
							),
							'allow_null' => 0,
							'multiple' => 0,
							'return_format' => 'object',
							'ui' => 1,
						),
					),
					'min' => '',
					'max' => '',
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
	),
	'menu_order' => 2,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'active' => 1,
));

acf_add_local_field_group(array (
	'key' => 'sec-tem_596506937549f',
	'title' => 'Section template',
	'fields' => array (
		array (
			'key' => 'sec-tem_5821d29cf2cca',
			'label' => 'Primary Content',
			'name' => 'primary-content-template',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add section',
			'layouts' => array (
				array (
					'key' => 'sec-tem-5821d2b10e742',
					'name' => 'section',
					'label' => 'Section',
					'display' => 'block',
					'max' => 1,
					'sub_fields' => get_section_local_field( 'sec-tem' ),
				)
			)
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'template',
			),
			array (
				'param' => 'post_taxonomy',
				'operator' => '==',
				'value' => 'template-type:section',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_596506b1c770e',
	'title' => 'Row template',
	'fields' => array (
		array (
			'key' => 'field_5821d29cf2cca',
			'label' => 'Row',
			'name' => 'rows',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add section',
			'layouts' => array (
				array (
					'key' => '5821d2b10e742',
					'name' => 'row',
					'label' => 'Row',
					'display' => 'block',
					'max' => 1,
					'sub_fields' => get_row_local_field( 'ro-te' ),
				)
			)
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'template',
			),
			array (
				'param' => 'post_taxonomy',
				'operator' => '==',
				'value' => 'template-type:row',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));