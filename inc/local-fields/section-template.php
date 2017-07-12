<?php 
/**
 * ACF local fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

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

?>