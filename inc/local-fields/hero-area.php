<?php 
/**
 * ACF local fields: Hero area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(array (
		'key' => 'hr-ar_qdc13of932k21',
		'title' => 'Hero Area',
		'fields' => array (
			array (
				'key' => 'hr-ar_qdc13of932k12',
				'label' => 'Hero Area',
				'name' => 'hero_area',
				'type' => 'flexible_content',
				'required' => 0,
				'button_label' => 'Add Hero Area',
				'max' => 1,
				'layouts' => array (
					array (
						'key' => 'hr-ar_qdc13of932k03',
						'name' => 'hero-area',
						'label' => 'Hero Area',
						'display' => 'block',
						'sub_fields' => get_hero_area_local_field( 'hr-ar' )
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