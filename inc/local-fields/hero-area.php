<?php 
/**
 * ACF local fields: Hero area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(array (
		'key' => 'pc_hero_area_root',
		'title' => 'Hero Area',
		'fields' => array (
			array (
				'key' => 'pc_ha',
				'label' => 'Hero Area',
				'name' => 'hero_area',
				'type' => 'flexible_content',
				'required' => 0,
				'button_label' => 'Add Hero Area',
				'max' => 1,
				'layouts' => array (
					array (
						'key' => 'pc_ha_la',
						'name' => 'pc_hero',
						'label' => 'Hero',
						'display' => 'block',
						'sub_fields' => array (

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
					'value' => 'page',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'acf_after_title',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'active' => 1,
	)); 

endif;