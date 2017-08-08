<?php 
/**
 * ACF local fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

acf_add_local_field_group(array (
	'key' => 'si-wi_596506937549f',
	'title' => 'Sidebar Widget template',
	'fields' => array (
		array (
			'key' => 'si-wi_5821d29cf2cca',
			'label' => 'Widget',
			'name' => 'widget-template',
			'type' => 'flexible_content',
			'required' => 0,
			'button_label' => 'Add component',
			'layouts' => get_sidebar_widget_local_field( 'sd-br' )
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
				'value' => 'template-type:sidebar-widget',
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