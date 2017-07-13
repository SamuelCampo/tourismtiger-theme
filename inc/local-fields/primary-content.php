<?php 
/**
 * ACF local fields: Primary Content
 *
 * TODO:
 * - Change page template
 * - Check function get_pc_styles_list()
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

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

endif;