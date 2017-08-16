<?php 
/**
 * ACF local fields: Button
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'bttn_59930ca194830',
	'title' => 'Button',
	'fields' => array (
		array (
			'key' => 'bttn_59930cb0de1e9',
			'label' => 'Label',
			'name' => 'label',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Book now',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'bttn_59930da2de1ea',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'page' => 'Link to the page within the site',
				'url' => 'URL',
				'popup-frame' => 'Open the link in the popup',
				'popup-video' => 'Open the video in the popup',
			),
			'default_value' => array (
				0 => 'page',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'bttn_59930e69de1eb',
			'label' => 'Page',
			'name' => 'page',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'page',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
			),
			'taxonomy' => array (
			),
			'allow_null' => 1,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array (
			'key' => 'bttn_59930ee7de1ec',
			'label' => 'URL',
			'name' => 'url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'url',
					),
				),
				array (
					array (
						'field' => 'field_59930da2de1ea',
						'operator' => '==',
						'value' => 'popup-frame',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'https://example.com',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'bttn_59930f18de1ee',
			'label' => 'Video',
			'name' => 'video',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'bttn_59930da2de1ea',
						'operator' => '==',
						'value' => 'popup-video',
					),
				),
			),
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

endif;
