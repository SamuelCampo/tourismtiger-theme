<?php 
/**
 * ACF local fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

acf_add_local_field_group(array (
	'key' => 'pd-tl_596506937549f',
	'title' => 'Product Section template',
	'fields' => array (
		array (
			'key' => 'pd-tl_5821d29cf2cca',
			'label' => 'Primary Area',
			'name' => 'product-section-template',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add component',
			'layouts' => get_product_section_local_field( 'pd-tl' )
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
				'value' => 'template-type:product-section',
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