<?php 
/**
 * ACF local fields: Product page
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ) :

	acf_add_local_field_group(array (
		'key' => 'pd-ar_5829d7835eb2b',
		'title' => 'Primary area',
		'fields' => array (
			array (
				'key' => 'pd-ar_5821d29cf2cca',
				'label' => 'Primary area',
				'name' => 'primary-area',
				'type' => 'flexible_content',
				'required' => 0,
				'button_label' => 'Add section',
				'layouts' => array (
					array (
						'key' => 'pd-ar_5821d2b10e742',
						'name' => 'section',
						'label' => 'Section',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'key' => 'pd-ar_5821d29cf2Sca',
								'label' => 'Components',
								'name' => 'components',
								'type' => 'flexible_content',
								'required' => 0,
								'button_label' => 'Add component',
								'layouts' => get_product_section_local_field( 'pd-ar' )
							)
						)
					),
				)
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
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

endif;