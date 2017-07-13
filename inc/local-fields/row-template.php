<?php 
/**
 * ACF local fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

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

?>