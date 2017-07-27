<?php 
/**
 * ACF local fields: Product page
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ) :

	/**
	 * Primary area
	 */
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
					array (
						'key' => 'pd-tp_49650003e333f',
						'name' => 'product-section-template',
						'label' => 'Template',
						'display' => 'block',
						'sub_fields' => array(
							array (
								'key' => 'pd-tp_48650003e333f',
								'label' => 'Choose section template',
								'name' => 'product-section-id',
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
						)
					)
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

	/**
	 * Sidebar
	 */
	acf_add_local_field_group(array (
		'key' => 'sd-br_5829d7835eb2b',
		'title' => 'Sidebar',
		'fields' => array (
			array (
				'key' => 'sd-br_5821d29cf2cca',
				'label' => 'Widgets',
				'name' => 'widgets',
				'type' => 'flexible_content',
				'required' => 0,
				'button_label' => 'Add widget',
				'layouts' => array (
					array (
						'key' => 'sd-br_5821d2b10e742',
						'name' => 'widget',
						'label' => 'Widget',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'key' => 'sd-br_5821d29cf2Sca',
								'label' => 'Components',
								'name' => 'components',
								'type' => 'flexible_content',
								'required' => 0,
								'button_label' => 'Add component',
								'layouts' => get_sidebar_widget_local_field( 'sd-br' )
							)
						)
					),
					array (
						'key' => 'sd-br_49650003e333f',
						'name' => 'sidebar-widget-template',
						'label' => 'Template',
						'display' => 'block',
						'sub_fields' => array(
							array (
								'key' => 'sd-br_48650003e333f',
								'label' => 'Choose widget template',
								'name' => 'sidebar-widget-id',
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
						)
					)
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