<?php 
/**
 * ACF local fields: Button
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

acf_add_local_field_group(array (
	'key' => 'api_59955dc048b00',
	'title' => 'API Keys',
	'fields' => array (
		array (
			'key' => 'api_59955e1ce12b4',
			'label' => 'Gravity Forms Public Key',
			'name' => 'gf_public_key',
			'type' => 'text',
			'instructions' => 'get_field(\'gf_public_key\',\'apikey\');',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'api_59955e43e12b5',
			'label' => 'Gravity Forms Private Key',
			'name' => 'gf_private_key',
			'type' => 'text',
			'instructions' => 'get_field(\'gf_private_key\',\'apikey\');',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'api_59955eb0e12b7',
			'label' => 'Google Maps',
			'name' => 'google_maps',
			'type' => 'text',
			'instructions' => 'get_field(\'google_maps\',\'apikey\');',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'api_59955ec6e12b8',
			'label' => 'reCaptcha/noCaptcha',
			'name' => 'recaptcha',
			'type' => 'text',
			'instructions' => 'get_field(\'re_captcha\',\'apikey\');',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'api-keys',
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