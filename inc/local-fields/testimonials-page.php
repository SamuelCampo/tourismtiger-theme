<?php 
/**
 * ACF local fields: Tetimonials page
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


if( function_exists('acf_add_local_field_group') ) :

	acf_add_local_field_group(array (
		'key' => 'te-pg_557b1630d18a0',
		'title' => 'Testimonial',
		'fields' => array (
			array (
				'key' => 'te-pg_537dcb4a60f0b',
				'label' => 'Author',
				'name' => 'author_tab',
				'type' => 'tab',
				'required' => '',
			),
			array (
				'key' => 'te-pg_537dcb4e60f0a',
				'label' => 'Photo',
				'name' => 'photo',
				'type' => 'image',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20',
				),
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
			),
			array (
				'key' => 'te-pg_537dab4b60f1c',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'required' => 0,
				'wrapper' => array (
					'width' => '40',
				),
				'placeholder' => 'Leave empty to use from title'
			),
			array (
				'key' => 'te-pg_537bbc4c60f2d',
				'label' => 'Additional information',
				'name' => 'additional',
				'type' => 'text',
				'required' => 0,
				'wrapper' => array (
					'width' => '40',
				),
				'placeholder' => 'e.g. Software Engineer of TourismTiger'
			),

			array (
				'key' => 'te-pg_437dcb4a60f0b',
				'label' => 'Content',
				'name' => 'content_tab',
				'type' => 'tab',
				'required' => '',
			),
			array (
				'key' => 'te-pg_437aac4c00f20',
				'label' => 'Testimonial',
				'name' => 'testimonial',
				'type' => 'wysiwyg',
				'instructions' => 'That content will be appear on single testimonial page.',
				'required' => 0,
			),
			array (
				'key' => 'te-pg_437aac4c01f20',
				'label' => 'Shortly',
				'name' => 'shortly',
				'type' => 'textarea',
				'required' => 0,
				'rows' => '3',
				'instructions' => 'That content will be appear in testimonial components of Primary content, Product primary area and Testimonials archive page.'
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'metabox',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'the_content',
			1 => 'excerpt',
			2 => 'custom_fields',
			3 => 'comments',
			4 => 'author',
			5 => 'page_attributes',
			6 => 'featured_image',
			7 => 'categories',
			8 => 'tags',
		),
		'active' => 1,
		'description' => '',
	));

endif;

