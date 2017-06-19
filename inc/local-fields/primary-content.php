<?php 
/**
 * ACF local fields: Primary Content
 *
 * TODO:
 * - Change page template
 * - Check function get_pc_styles_list()
 *
 * @package Dev_Theme
 * @author  team-name
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(array (
		'key' => 'group_5829d7835eb2b',
		'title' => 'Primary content area',
		'fields' => array (
			array (
				'key' => 'field_5821d29cf2cca',
				'label' => 'Primary Content',
				'name' => 'tour_primary-content',
				'type' => 'flexible_content',
				'instructions' => 'Within a section you should add rows of content. Within rows you should add columns.',
				'required' => 0,
				'button_label' => 'Add section',
				'layouts' => array (
					array (
						'key' => '5821d2b10e742',
						'name' => 'tour_pc-section',
						'label' => 'Section',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'key' => 'field_5821ee172a4d4',
								'label' => 'Rows',
								'name' => 'Rows_tab_0',
								'type' => 'tab',
								'required' => 0,
								'placement' => 'top',
							),
							array (
								'key' => 'field_1111e711149fe',
								'label' => 'Enable paddings for section?',
								'name' => 'tour_pc-section_pad',
								'type' => 'checkbox',
								'required' => 0,
								'choices' => array (
									'pc--s__left-paddings' => 'Left',
									'pc--s__right-paddings' => 'Right',
									'pc--s__top-paddings' => 'Top',
									'pc--s__bottom-paddings' => 'Bottom',
								),
								'default_value' => array (
									0 => 'pc--s__left-paddings',
									1 => 'pc--s__right-paddings',
									2 => 'pc--s__top-paddings',
									3 => 'pc--s__bottom-paddings'
								),
								'layout' => 'horizontal',
								'toggle' => 1,
							),

							array (
								'key' => 'field_5821e254f6599',
								'label' => 'Rows of content',
								'name' => 'tour_pc-rows',
								'type' => 'flexible_content',
								'required' => 0,
								'button_label' => 'Add Row',
								'layouts' => array (
									array (
										'key' => '5821e26955f33',
										'name' => 'tour_pc-row',
										'label' => 'Row',
										'display' => 'block',
										'sub_fields' => array (
											array (
												'key' => 'field_5821e71cd49fd',
												'label' => 'Row Type',
												'name' => 'Row_Type_tab_0',
												'type' => 'tab',
												'required' => 0,
												'placement' => 'top'
											),
											array (
												'key' => 'field_5821e72dd49fe',
												'label' => 'Choose Row Type',
												'name' => 'tour_pc-rowtype',
												'type' => 'radio',
												'required' => 0,
												'choices' => array (
													'blog' => 'Blog',
													'content' => 'Content',
												),
												'allow_null' => 0,
												'other_choice' => 0,
												'save_other_choice' => 0,
												'default_value' => 'content',
												'layout' => 'horizontal',
											),
											array (
												'key' => 'field_5821e772d49ff',
												'label' => 'Number of posts to pull',
												'name' => 'tour_pc-blog--pull',
												'type' => 'number',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e72dd49fe',
															'operator' => '==',
															'value' => 'blog',
														),
													),
												),
												'default_value' => 1,
												'min' => 1,
												'step' => 1
											),
											array (
												'key' => 'field_blogchoose-style',
												'label' => 'Column Style',
												'name' => 'tour_blog-style',
												'type' => 'radio',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e72dd49fe',
															'operator' => '==',
															'value' => 'blog',
														),
													),
												),
												'choices' => get_pc_styles_list( 'blog_card' ),
												'default_value' => 'fc_style-one',
												'layout' => 'horizontal',
											),
											array (
												'key' => 'field_5821e799d4a00',
												'label' => 'Show Info',
												'name' => 'tour_pc-rowtype--blog-show',
												'type' => 'checkbox',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e72dd49fe',
															'operator' => '==',
															'value' => 'blog',
														),
													),
												),
												'choices' => array (
													'blog-image' => 'Featured Image',
													'blog-date' => 'Date',
													'blog-excerpt' => 'Excerpt',
													'blog-button' => 'Button'
												),
												'default_value' => array (
													0 => 'blog-image',
												),
												'layout' => 'horizontal',
												'toggle' => 1,
											),
											array (
												'key' => 'field_5821f6a6269db',
												'label' => 'Content in Row',
												'name' => 'tour_pc-col',
												'type' => 'flexible_content',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e72dd49fe',
															'operator' => '==',
															'value' => 'content',
														),
													),
												),
												'button_label' => 'Add Column',
												'layouts' => array (
													array (
														'key' => '582c726fbda41',
														'name' => 'tour_pc-content',
														'label' => 'Content Card',
														'display' => 'block',
														'sub_fields' => array (
															array (
																'key' => 'field_content-style',
																'label' => 'Column Style',
																'name' => 'tour_content-style',
																'type' => 'select',
																'required' => 0,
																'wrapper' => array (
																	'width' => '50'
																),
																'choices' => get_pc_styles_list( 'content_card' ),
																'allow_null' => 0,
																'default_value' => 'style-one',
																'layout' => 'horizontal',
															),
															array (
																'key' => 'field_content-border',
																'label' => 'Column border',
																'name' => 'tour_content-border',
																'type' => 'select',
																'required' => 0,
																'wrapper' => array (
																	'width' => '50',
																),
																'choices' => array (
																	'pc--c__border-none' => 'None',
																	'pc--c__border-both' => 'Both',
																	'pc--c__border-left' => 'Only left',
																	'pc--c__border-right' => 'Only right'
																),
																'default_value' => 'pc--c__border-none',
															),
															array (
																'key' => 'field_content-border-width',
																'label' => 'Border width',
																'name' => 'tour_content-border-width',
																'type' => 'number',
																'required' => '',
																'conditional_logic' => array (
																	array (
																		array (
																			'field' => 'field_content-border',
																			'operator' => '!=',
																			'value' => 'pc--c__border-none',
																		),
																	),
																),
																'wrapper' => array (
																	'width' => '25'
																),
																'placeholder' => '1',
																'append' => 'px',
																'min' => '1',
																'max' => '5'
															),
															array (
																'key' => 'field_content-border-style',
																'label' => 'Border style',
																'name' => 'tour_content-border-style',
																'type' => 'select',
																'required' => 0,
																'conditional_logic' => array (
																	array (
																		array (
																			'field' => 'field_content-border',
																			'operator' => '!=',
																			'value' => 'pc--c__border-none',
																		),
																	),
																),
																'wrapper' => array (
																	'width' => '25'
																),
																'choices' => array (
																	'solid' => 'Solid',
																	'dashed' => 'Dashed',
																	'dotted' => 'Dotted'
																),
																'default_value' => 'pc--c__border-solid',
															),
															array (
																'key' => 'field_content-border-color',
																'label' => 'Border color',
																'name' => 'tour_content-border-color',
																'type' => 'rgba_color',
																'required' => 0,
																'conditional_logic' => array (
																	array (
																		array (
																			'field' => 'field_content-border',
																			'operator' => '!=',
																			'value' => 'pc--c__border-none',
																		),
																	),
																),
																'wrapper' => array (
																	'width' => '25'
																)
															),
															array (
																'key' => 'field_content-border-size',
																'label' => 'Border size',
																'name' => 'tour_content-border-size',
																'type' => 'text',
																'instructions' => '',
																'required' => 0,
																'conditional_logic' => array (
																	array (
																		array (
																			'field' => 'field_content-border',
																			'operator' => '!=',
																			'value' => 'pc--c__border-none',
																		),
																	),
																),
																'wrapper' => array (
																	'width' => '25'
																),
																'placeholder' => '50px or 10%'
															),
															array (
																'key' => 'field_582c726fbda4a',
																'label' => 'Content',
																'name' => 'tour_pc-content--content',
																'type' => 'flexible_content',
																'required' => 0,
																'conditional_logic' => array (
																	array (
																		array (
																			'field' => 'field_5821e72dd49fe',
																			'operator' => '==',
																			'value' => 'content',
																		),
																	),
																)
																'button_label' => 'Add Content'
																'layouts' => array (
																	array (
																		'key' => '582311fe58061',
																		'name' => 'tour_pc-coltype--headline',
																		'label' => 'Headline',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_58248311a1a3e',
																				'label' => 'Headline text',
																				'name' => 'tour_pc-coltype--headline_text',
																				'type' => 'text',
																				'required' => 0,
																				'conditional_logic' => 0,
																				'wrapper' => array (
																					'width' => '60'
																				)
																			),
																			array (
																				'key' => 'field_58248336a1a3f',
																				'label' => 'Choose html-tag',
																				'name' => 'tour_pc-coltype--headline_seo-tag',
																				'type' => 'radio',
																				'instructions' => 'HINT: Don\'t use H1 tag more than one time in the page. ',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '40'
																				),
																				'choices' => array (
																					'h1' => 'H1',
																					'h2' => 'H2',
																					'h3' => 'H3',
																					'h4' => 'H4',
																					'h5' => 'H5',
																					'h6' => 'H6',
																				),
																				'layout' => 'horizontal',
																			),
																			array (
																				'key' => 'number_5odsith-321',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'conditional_logic' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-321',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c735fb0c6e',
																		'name' => 'tour_pc-coltype--editor',
																		'label' => 'Editor',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_582484b7a1a46',
																				'label' => 'Content editor',
																				'name' => 'tour_pc-coltype--editor-editor',
																				'type' => 'wysiwyg',
																				'required' => '',
																				'tabs' => 'all',
																				'toolbar' => 'full',
																			),
																			array (
																				'key' => 'number_5odsith-322',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-322',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c7375b0c6f',
																		'name' => 'tour_pc-coltype--button',
																		'label' => 'Button',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_58248f0b1e629',
																				'label' => 'Label',
																				'name' => 'tour_pc-coltype--button_label',
																				'type' => 'text',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '40'
																				)
																			),
																			array (
																				'key' => 'field_acti8f0b1e629',
																				'label' => 'Action',
																				'name' => 'tour_pc-coltype--button_action',
																				'type' => 'url',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '40',
																				),
																				'placeholder' => 'http://example.com',
																			),
																			array (
																				'key' => 'field_58248f351e62a',
																				'label' => 'Aligment',
																				'name' => 'tour_pc-coltype--button_align',
																				'type' => 'select',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20'
																				),
																				'choices' => array (
																					'pc--c__button-right' => 'Left',
																					'pc--c__button-center' => 'Center',
																					'pc--c__button-left' => 'Right',
																				),
																				'default_value' => 'pc--c__button-right',
																			),
																			array (
																				'key' => 'field_58248fe71e62b',
																				'label' => 'Support One',
																				'name' => 'tour_pc-coltype--button_sup-one',
																				'type' => 'text',
																				'required' => '',
																			),
																			array (
																				'key' => 'field_5824sue71222b',
																				'label' => 'Support Two',
																				'name' => 'tour_pc-coltype--button_sup-two',
																				'type' => 'text',
																				'required' => '',
																			),
																			array (
																				'key' => 'number_5odsith-323',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-323',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c7394b0c70',
																		'name' => 'tour_pc-coltype--map',
																		'label' => 'Map',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5824903c1e62e',
																				'label' => 'Choose location',
																				'name' => 'tour_pc-coltype--map_map',
																				'type' => 'google_map',
																				'required' => '',
																			),
																			array (
																				'key' => 'number_5odsith-324',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-324',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		),
																	),
																	array (
																		'key' => '582c73abb0c71',
																		'name' => 'tour_pc-coltype--image',
																		'label' => 'Image',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_582491e81e630',
																				'label' => 'Attach image',
																				'name' => 'tour_pc-coltype--image_add',
																				'type' => 'image',
																				'required' => 0,
																				'return_format' => 'id',
																				'preview_size' => 'rpwe-thumbnail',
																				'library' => 'all',
																			),
																			array (
																				'key' => 'field_cir492141e631',
																				'label' => 'Image shape',
																				'name' => 'tour_pc-coltype--image_cir',
																				'type' => 'radio',
																				'required' => 0,
																				'choices' => array (
																					'no-circle' => 'Auto',
																					'circle' => 'Circle'
																				),
																				'default_value' => 'no-circle',
																				'layout' => 'horizontal',
																			),
																			array (
																				'key' => 'field_582492141e631',
																				'label' => 'Url',
																				'name' => 'tour_pc-coltype--image_url',
																				'type' => 'text',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '30',
																				),
																				'placeholder' => 'http://example.com',
																			),
																			array (
																				'key' => 'field_582492141e632',
																				'label' => 'New window',
																				'name' => 'tour_pc-coltype--image_target',
																				'type' => 'true_false',
																				'required' => '',
																				'message' => 'Yes, open there',
																				'wrapper' => array (
																					'width' => '20'
																				),
																			),
																			array (
																				'key' => 'field_581ds32width32',
																				'label' => 'Size',
																				'name' => 'tour_pc-coltype--image_size',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																					'class' => '',
																					'id' => '',
																				),
																				'default_value' => '100',
																				'placeholder' => '100',
																				'prepend' => '',
																				'append' => '%',
																				'min' => '1',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odsith-325',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-325',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c73d5b0c72',
																		'name' => 'tour_pc-coltype--video',
																		'label' => 'Video',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5829d67d255b9',
																				'label' => 'Video',
																				'name' => 'tour_pc-rowtype--content--column-bg_video',
																				'type' => 'oembed',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_5829d67d255b3',
																							'operator' => '==',
																							'value' => 'video',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => '33'
																				)
																			),
																			array (
																				'key' => 'field_582492891e634',
																				'label' => 'Attach video',
																				'name' => 'tour_pc-coltype--video_add',
																				'type' => 'oembed',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '33'
																				)
																			),
																			array (
																				'key' => 'field_5824928sivide',
																				'label' => 'Video size',
																				'name' => 'tour_pc-coltype--video_size',
																				'type' => 'true_false',
																				'required' => '',
																				'message' => 'Full width',
																				'wrapper' => array (
																					'width' => '33'
																				)
																			),
																			array (
																				'key' => 'number_5odsith-326',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-326',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c73ecb0c73',
																		'name' => 'tour_pc-coltype--line',
																		'label' => 'Horizontal Line',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5845792141152',
																				'label' => 'Only for read',
																				'name' => 'only_for_read',
																				'type' => 'message',
																				'required' => '',
																				'message' => '<h3>Horisontal line had been added!</h3>',
																				'new_lines' => '',
																				'esc_html' => 0,
																			),
																			array (
																				'key' => 'number_5odsith-327',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'instructions' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-327',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c7406b0c74',
																		'name' => 'tour_pc-coltype--gallery',
																		'label' => 'Gallery/Instagram',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_58249738f11c0',
																				'label' => 'Choose type',
																				'name' => 'tour_pc-coltype--gallery_type',
																				'type' => 'radio',
																				'required' => '',
																				'wrapper' => array (
																					'width' => 20,
																				),
																				'choices' => array (
																					'gallery' => 'Gallery',
																					'instagram' => 'Instagram',
																				),
																			),
																			array (
																				'key' => 'field_5824977cf11c1',
																				'label' => 'Count of colums',
																				'name' => 'tour_pc-coltype--gallery_count',
																				'type' => 'number',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'gallery',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => 5,
																				),
																				'default_value' => 3,
																				'min' => 1,
																				'max' => 8,
																			),
																			array (
																				'key' => 'field_582497d3f11c2',
																				'label' => 'Add images',
																				'name' => 'tour_pc-coltype--gallery_add',
																				'type' => 'gallery',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'gallery',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => 75
																				),
																				'preview_size' => 'thumbnail',
																				'insert' => 'append',
																			),
																			array (
																				'key' => 'field_5824983ef11c3',
																				'label' => 'Height of this block',
																				'name' => 'tour_pc-coltype--instagram',
																				'type' => 'number',
																				'instructions' => 'The width is same as column width.',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'instagram',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => 5,
																				),
																				'default_value' => 200,
																				'append' => 'px',
																				'min' => 200,
																				'step' => '10',
																			),
																			array(
																				'key' => 'field_582498a545453',
																				'label' => 'Choose size',
																				'name' => 'tour_pc-coltype--instagram_size',
																				'type' => 'select',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'instagram',
																						),
																					),
																				),
																				'choices' => array(
																					'small'	=> 'Small',
																					'medium' => 'Medium',
																					'large' => 'Large',
																					'xlarge' => 'XLarge'
																				),
																				'allow_null' => 0,
																				'multiple' => 0,
																				'ui' => 0,
																				'ajax' => 0,
																			),
																			array (
																				'key' => 'field_58249872f11c4',
																				'label' => 'Account ID',
																				'name' => 'tour_pc-coltype--instagram_account',
																				'type' => 'text',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'instagram',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => '20'
																				)
																			),
																			array (
																				'key' => 'field_582498a5f11c5',
																				'label' => 'Use specific hashtag',
																				'name' => 'tour_pc-coltype--instagram_hash',
																				'type' => 'text',
																				'instructions' => 'Fill without #.',
																				'required' => '',
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'field_58249738f11c0',
																							'operator' => '==',
																							'value' => 'instagram',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => '20',
																				),
																				'placeholder' => 'hashtag1, hashtag2, hashtag3',
																				'prepend' => '#',
																			),
																			array (
																				'key' => 'number_5odsith-328',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-328',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50'
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => '582c7428b0c75',
																		'name' => 'tour_pc-coltype--accordion',
																		'label' => 'Accordion',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_58249917f11c7',
																				'label' => 'Label',
																				'name' => 'tour_pc-coltype--accordion_label',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 20,
																				),
																			),
																			array (
																				'key' => 'field_58249932f11c8',
																				'label' => 'Open label',
																				'name' => 'tour_pc-coltype--accordion_open',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 10,
																				),
																				'default_value' => 'Show More',
																			),
																			array (
																				'key' => 'field_58249946f11c9',
																				'label' => 'Close label',
																				'name' => 'tour_pc-coltype--accordion_close',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 20,
																				),
																				'default_value' => 'Close More',
																			),
																			array (
																				'key' => 'field_58249a53f11ca',
																				'label' => 'Inner content',
																				'name' => 'tour_pc-coltype--accordion_wysiwyg',
																				'type' => 'wysiwyg',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 50,
																				),
																				'tabs' => 'all',
																				'toolbar' => 'full',
																				'media_upload' => 1,
																			),
																			array (
																				'key' => 'number_5odsith-329',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-329',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => 'testi1fe58061',
																		'name' => 'tour_pc-coltype--testimonial',
																		'label' => 'Testimonial',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'testi1fe580611',
																				'label' => 'Choose Testimonial',
																				'name' => 'tour_pc-coltype--testimonial_ob',
																				'type' => 'post_object',
																				'required' => 0,
																				'post_type' => array (
																					'testimonial'
																				),
																				'multiple' => 1,
																				'return_format' => 'object',
																				'ui' => 1,
																			),
																			array (
																				'key' => 'number_5odsith-32q',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-32q',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		)
																	),
																	array (
																		'key' => 'formi1fe58061',
																		'name' => 'tour_pc-coltype--form',
																		'label' => 'Form',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'formi1fe580611',
																				'label' => 'Set form ID',
																				'name' => 'tour_pc-coltype--form_ob',
																				'type' => 'number',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																				'default_value' => 1,
																				'prepend' => 'ID',
																				'min' => 1,
																				'step' => 1,
																			),
																			array (
																				'key' => 'forcolfe580611',
																				'label' => 'Form layout',
																				'name' => 'tour_pc-coltype--form_la',
																				'type' => 'select',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '30',
																				),
																				'choices' => array (
																					'pc--form__horizontal' => 'Horizontal',
																					'pc--form__column' => 'Column',
																					'pc--form__nowrap' => 'Nowrap Head, Body and Footer',
																					'pc--form__nowrap-fields-and-buttons' => 'Nowrap Body and Footer'
																				),
																				'default_value' => array (
																					0 => 'pc--form__horizontal',
																				)
																			),
																			array (
																				'key' => 'fortitlefe580611',
																				'label' => 'Form header',
																				'name' => 'tour_pc-coltype--form_ti',
																				'type' => 'select',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '25',
																				),
																				'choices' => array (
																					'pc--form__head-all' => 'Show title and description',
																					'pc--form__head-title' => 'Show only title',
																					'pc--form__head-hide' => 'Nothing show'
																				),
																				'default_value' => array (
																					0 => 'pc--form__head-all',
																				)
																			),
																			array (
																				'key' => 'forclefe580611',
																				'label' => 'Input labels',
																				'name' => 'tour_pc-coltype--form_le',
																				'type' => 'select',
																				'required' => 0,
																				'conditional_logic' => array (
																					array (
																						array (
																							'field' => 'forcolfe580611',
																							'operator' => '!=',
																							'value' => 'pc--form__nowrap',
																						),
																					),
																				),
																				'wrapper' => array (
																					'width' => '25',
																				),
																				'choices' => array (
																					'pc--form__labels-desc' => 'Show all',
																					'pc--form__hide-labels' => 'Hide labels',
																					'pc--form__hide-desc' => 'Hide descriptions',
																					'pc--form__hide-labels-desc' => 'Hide labels and descriptions'
																				),
																				'default_value' => array (
																					0 => 'pc--form__labels-desc',
																				),
																			),
																			array (
																				'key' => 'number_5odsith-32a',
																				'label' => 'Margin top',
																				'name' => 'tour_pc-coltype--margin_top',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			),
																			array (
																				'key' => 'number_5odbottomth-32a',
																				'label' => 'Margin bottom',
																				'name' => 'tour_pc-coltype--margin_bottom',
																				'type' => 'number',
																				'required' => '',
																				'wrapper' => array (
																					'width' => '50',
																				),
																				'default_value' => '0',
																				'append' => 'px',
																				'min' => '0',
																				'max' => '100'
																			)
																		),
																	),
																),
															),
														),
													),
													array (
														'key' => 5823127758063,
														'name' => 'tour_pc-flexi',
														'label' => 'Flexi Content Card',
														'display' => 'block',
														'sub_fields' => array (
															array (
																'key' => 'field_flexiprod-style',
																'label' => 'Column Style',
																'name' => 'tour_flexiprod-style',
																'type' => 'select',
																'required' => 0,
																'choices' => get_pc_styles_list( 'flexi_card' ),
																'default_value' => 'fc_style-one',
																'layout' => 'horizontal',
															),
															array (
																'key' => 'field_582313795806a',
																'label' => 'Content of Flexi Card',
																'name' => 'tour_pc-flexi--content',
																'type' => 'flexible_content',
																'required' => 0,
																'button_label' => 'Add Content',
																'max' => 3,
																'layouts' => array (
																	array (
																		'key' => '582311a037beb',
																		'name' => 'tour_pc-flexi--content--image',
																		'label' => 'Image',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_582313795806b',
																				'label' => 'Add Image',
																				'name' => 'tour_pc-flexi--image-add',
																				'type' => 'image',
																				'required' => '',
																				'return_format' => 'id',
																				'preview_size' => 'full',
																				'library' => 'all',
																			),
																			array (
																				'key' => 'field_582313e85806e',
																				'label' => 'Image Height',
																				'name' => 'tour_pc-flexi--image-height',
																				'type' => 'radio',
																				'required' => 0,
																				'choices' => array (
																					'pc--c__b-image--normal' => 'Normal',
																					'pc--c__b-image--square' => 'Square',
																					'pc--c__b-image--tall'   => 'Tall',
																					'pc--c__b-image--really-tall'   => 'Really tall',
																				),
																				'default_value' => 'pc--c__b-image--normal',
																				'layout' => 'horizontal',
																			),
																			array (
																				'key' => 'field_582315d858076',
																				'label' => 'Image Alignment',
																				'name' => 'tour_pc-flexi--image-aligment',
																				'type' => 'select',
																				'required' => 0,
																				'choices' => array (
																					'pc--c__image--above' => 'Above Content',
																					'pc--c__image--left' => 'Left of Content',
																					'pc--c__image--right' => 'Right of Content',
																				),
																				'default_value' => array (
																					0 => 'pc--c__image--above',
																				),
																			),
																			array (
																				'key' => 'field_582314d358071',
																				'label' => 'Title',
																				'name' => 'tour_pc-flexi--image-row__title',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				)
																			),
																			array (
																				'key' => 'field_582314ea58072',
																				'label' => 'Description',
																				'name' => 'tour_pc-flexi--image-row__description',
																				'type' => 'textarea',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 40,
																				),
																				'rows' => 3,
																			),
																			array (
																				'key' => 'field_5823154358073',
																				'label' => 'Price',
																				'name' => 'tour_pc-flexi--image-row__price',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_5823157158074',
																				'label' => 'Label',
																				'name' => 'tour_pc-flexi--image-row__label',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																		),
																		'max' => 1,
																	),
																	array (
																		'key' => '582311df5805f',
																		'name' => 'tour_pc-flexi--content_first',
																		'label' => 'Content First Type',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_582316b10b39f',
																				'label' => 'Title',
																				'name' => 'tour_pc-flexi--first-row__title',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316b10b3a0',
																				'label' => 'Description',
																				'name' => 'tour_pc-flexi--first-row__description',
																				'type' => 'textarea',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316b10b3a1',
																				'label' => 'Price',
																				'name' => 'tour_pc-flexi--first-row__price',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316b10b3a2',
																				'label' => 'Label',
																				'name' => 'tour_pc-flexi--first-row__label',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316b10b3a3',
																				'label' => 'Detail',
																				'name' => 'tour_pc-flexi--first-row__detail',
																				'type' => 'textarea',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 20,
																				),
																				'rows' => 3,
																			),
																		),
																		'max' => 1,
																	),
																	array (
																		'key' => '582311fe58061',
																		'name' => 'tour_pc-flexi--content_second',
																		'label' => 'Content Second Type',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_582316d80b3a5',
																				'label' => 'Title',
																				'name' => 'tour_pc-flexi--second-row__title',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20'
																				)
																			),
																			array (
																				'key' => 'field_582316d80b3a6',
																				'label' => 'Description',
																				'name' => 'tour_pc-flexi--second-row__description',
																				'type' => 'textarea',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																				'rows' => 3,
																			),
																			array (
																				'key' => 'field_582316d80b3a8',
																				'label' => 'Price',
																				'name' => 'tour_pc-flexi--second-row__price',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316d80b3a9',
																				'label' => 'Label',
																				'name' => 'tour_pc-flexi--second-row__label',
																				'type' => 'text',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => '20',
																				),
																			),
																			array (
																				'key' => 'field_582316d80b3a7',
																				'label' => 'Detail',
																				'name' => 'tour_pc-flexi--second-row__detail',
																				'type' => 'textarea',
																				'required' => 0,
																				'wrapper' => array (
																					'width' => 20,
																				),
																				'rows' => 3,
																			),
																		),
																		'max' => 1,
																	),
																),
															),
															array (
																'key' => 'field_5823133258069',
																'label' => 'Card URL',
																'name' => 'tour_pc-flexi--url',
																'type' => 'url',
																'instructions' => 'URL for buttons and image.',
																'required' => 0,
																'placeholder' => 'http://example.com',
															),
														)
													),
													array (
														'key' => '58249cc8e527a',
														'name' => 'tour_pc-product',
														'label' => 'Product Card',
														'display' => 'block',
														'sub_fields' => array (
															array (
																'key' => 'field_5847dda99e005',
																'label' => 'Product',
																'name' => 'tour_pc-product--object',
																'type' => 'post_object',
																'instructions' => 'Product which will be displayed in column',
																'return_format' => 'object',
																'ui' => 1,
															),
															array (
																'key' => 'field_58249cc8e527c',
																'label' => 'Content of Product',
																'name' => 'tour_pc-product--content',
																'type' => 'flexible_content',
																'required' => 0,
																'button_label' => 'Add Content in Product',
																'max' => 3,
																'layouts' => array (
																	array (
																		'key' => '582311a037beb',
																		'name' => 'tour_pc-product--content--image',
																		'label' => 'Image',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5847db89eaed8',
																				'label' => 'Image added',
																				'name' => 'image_added',
																				'type' => 'message',
																				'required' => '',
																				'message' => '<h3>You added Image</h3>',
																				'new_lines' => '',
																				'esc_html' => 0,
																			),
																			array (
																				'key' => 'field_prodimhe5806e',
																				'label' => 'Image Height',
																				'name' => 'tour_pc-product--image-height',
																				'type' => 'radio',
																				'required' => 0,
																				'choices' => array (
																					'pc--c__b-image--normal' => 'Normal',
																					'pc--c__b-image--square' => 'Square',
																					'pc--c__b-image--tall'   => 'Tall',
																					'pc--c__b-image--really-tall'   => 'Really tall',
																				),
																				'default_value' => 'pc--c__b-image--normal',
																				'layout' => 'horizontal',
																			),
																			array (
																				'key' => 'field_582aligmeprod',
																				'label' => 'Image Alignment',
																				'name' => 'tour_pc-product--image-aligment',
																				'type' => 'select',
																				'required' => 0,
																				'choices' => array (
																					'pc--c__b-image--above' => 'Above Content',
																					'pc--c__b-image--left' => 'Left of Content',
																					'pc--c__b-image--right' => 'Right of Content',
																				),
																				'default_value' => array (
																					0 => 'pc--c__b-image--above',
																				),
																				'allow_null' => 1,
																			),
																		),
																	),
																	array (
																		'key' => '582311df5805f',
																		'name' => 'tour_pc-product--content_first',
																		'label' => 'Content First Type',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5847dbadeaed9',
																				'label' => 'First Content added',
																				'name' => 'First_Content_added_MSG',
																				'type' => 'message',
																				'required' => '',
																				'message' => '<h3>You added First Content</h3><p>If the content does not exist on page make sure that you included any content for this section in Options -> Primary Area Styles -> Product & Flexi Page -> << Current Style >></p>',
																				'new_lines' => '',
																				'esc_html' => 0,
																			)
																		)
																	),
																	array (
																		'key' => '582311fe58061',
																		'name' => 'tour_pc-product--content_second',
																		'label' => 'Content Second Type',
																		'display' => 'block',
																		'sub_fields' => array (
																			array (
																				'key' => 'field_5847dbcbeaeda',
																				'label' => 'Second Content added',
																				'name' => 'second_content_added',
																				'type' => 'message',
																				'required' => '',
																				'message' => '<h3>You added Second Content</h3><p>If the content does not exist on page make sure that you included any content for this section in Options -> Primary Area Styles -> Product & Flexi Page -> << Current Style >></p>',
																				'new_lines' => '',
																				'esc_html' => 0,
																			)
																		)
																	)
																)
															)
														)
													)
												)
											),
											array (
												'key' => 'field_5821e2e1f659b',
												'label' => 'Row Options',
												'name' => 'row_options',
												'type' => 'tab',
												'required' => 0,
												'placement' => 'top',
											),
											array (
												'key' => 'field_5821e28ff659a',
												'label' => 'Columns count',
												'name' => 'tour_pc-colums--count',
												'type' => 'select',
												'required' => 0,
												'wrapper' => array (
													'width' => '33'
												),
												'choices' => array (
													1 => 'Only one',
													2 => 'Two columns',
													3 => 'Three columns',
													4 => 'Four columns',
													5 => 'Five columns',
													6 => 'Six columns'
												),
												'default_value' => array (
													0 => 1,
												)
											),
											array (
												'key' => 'field_5821e6f3d49fc',
												'label' => 'Columns Wrap',
												'name' => 'tour_pc-colums--wrap',
												'type' => 'select',
												'required' => 0,
												'wrapper' => array (
													'width' => '33',
												),
												'choices' => array (
													'wrap' => 'Wrap',
													'scroll' => 'Scroll',
												),
												'default_value' => array (
													0 => 'scroll',
												)
											),
											array (
												'key' => 'field_5821e2fcf659c',
												'label' => 'Margin',
												'name' => 'tour_pc-colums--margin',
												'type' => 'select',
												'required' => 0,
												'wrapper' => array (
													'width' => '33',
												),
												'choices' => array (
													'none' => 'None',
													'normal' => 'Normal',
												),
												'default_value' => array (
													0 => 'none',
												)
											),
											array (
												'key' => 'field_co21era9ti5od',
												'label' => 'The ratio of rows',
												'name' => 'tour_pc-colums--ratio',
												'type' => 'radio',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '==',
															'value' => '2',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '==',
															'value' => 'wrap'
														)
													),
												),
												'choices' => array (
													'equal' => 'Equal width',
													'left' => 'Two thirds left',
													'right' => 'Two thirds right',
												),
												'default_value' => 'equal',
												'layout' => 'horizontal',
											),
											array (
												'key' => 'field_5821e359f659d',
												'label' => 'Width',
												'name' => 'tour_pc-colums--width',
												'type' => 'radio',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '==',
															'value' => '1',
														),
													),
												),
												'wrapper' => array (
													'width' => '33',
												),
												'choices' => array (
													'full' => 'Full',
													'four-five' => '4/5',
													'three-four' => '3/4',
													'one-two' => '1/2',
												),
												'default_value' => 'full',
												'layout' => 'horizontal',
											),
											array (
												'key' => 'field_5821e419f659e',
												'label' => 'Text Alignment',
												'name' => 'tour_pc-colums--align',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '==',
															'value' => '1',
														),
													),
												),
												'wrapper' => array (
													'width' => '33'
												),
												'choices' => array (
													'left' => 'Left',
													'center' => 'Center',
													'right' => 'Right',
												),
												'default_value' => array (
													0 => 'left',
												)
											),
											array (
												'key' => 'field_5821eelementali34',
												'label' => 'Element Aligment',
												'name' => 'tour_pc-colums--align-element',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '==',
															'value' => '1',
														),
													),
												),
												'wrapper' => array (
													'width' => '33'
												),
												'choices' => array (
													'left' => 'Left',
													'center' => 'Center',
													'right' => 'Right',
												),
												'default_value' => array (
													0 => 'left',
												)
											),
											array (
												'key' => 'field_5821e44ff659f',
												'label' => 'Position',
												'name' => 'tour_pc-colums--position',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '!=',
															'value' => '1',
														),
													),
												),
												'wrapper' => array (
													'width' => '50'
												),
												'choices' => array (
													'stretch' => 'Stretch',
													'top' => 'Top',
													'middle' => 'Middle',
													'bottom' => 'Bottom',
												),
												'default_value' => array (
													0 => 'stretch',
												)
											),
											array (
												'key' => 'fi21234dsfasdfddsf12f',
												'label' => 'Rows alignment',
												'name' => 'tour_pc-colums--alignment',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '!=',
															'value' => '1',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '==',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '50'
												),
												'choices' => array (
													'left' => 'Left',
													'center' => 'Center',
													'right' => 'Right',
													'space-around' => 'Space Around',
													'space-between' => 'Space Between'
												),
												'default_value' => array (
													0 => 'left',
												)
											),
											array (
												'key' => 'field_58slides21e77scroll',
												'label' => 'How many columns to scroll',
												'name' => 'tour_pc-scroll-slides',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e28ff659a',
															'operator' => '!=',
															'value' => '1',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '50'
												),
												'choices' => array (
													1 => 'One',
													2 => 'Two',
													3 => 'Three',
													4 => 'Four',
													5 => 'Five',
													6 => 'Six',
												),
												'placeholder' => 'Auto',
											),
											array (
												'key' => 'fiard_arr123ype28ff659a',
												'label' => 'Arrow source type',
												'name' => 'tour_pc-arrow-type',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '20',
												),
												'choices' => array (
													'pc-auto-arrow' => '- Auto -',
													'pc-custom-arrow' => 'Custom'
												),
												'default_value' => array (
													0 => 'pc-custom-arrow',
												),
												'readonly' => 1,
											),
											array (
												'key' => 'fiard_arsisizesize9a',
												'label' => 'Arrows size',
												'name' => 'tour_pc-arrows-size',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'fiard_arr123ype28ff659a',
															'operator' => '==',
															'value' => 'pc-custom-arrow',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '15',
												),
												'choices' => array (
													'pc-small-arrow' => 'Small',
													'pc-medium-arrow' => 'Medium',
													'pc-large-arrow' => 'Large'
												),
												'default_value' => array (
													0 => 'pc-medium-arrow',
												),
											),
											array (
												'key' => 'fiard_arrweightolor9a',
												'label' => 'Arrows weight',
												'name' => 'tour_pc-arrows-weight',
												'type' => 'select',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'fiard_arr123ype28ff659a',
															'operator' => '==',
															'value' => 'pc-custom-arrow',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '15'
												),
												'choices' => array (
													'pc-thin-arrow' => 'Thin',
													'pc-normal-arrow' => 'Normal',
													'pc-bold-arrow' => 'Bold'
												),
												'default_value' => array (
													0 => 'normal',
												),
											),
											array (
												'key' => 'fiard_arposhtolor9a',
												'label' => 'Arrows Position',
												'name' => 'tour_pc-arrows-position',
												'type' => 'select',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'fiard_arr123ype28ff659a',
															'operator' => '==',
															'value' => 'pc-custom-arrow',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '15'
												),
												'choices' => array (
													'pc-within-arrow' => 'Within Row',
													'pc-out-arrow' => 'Out of Row'
												),
												'default_value' => array (
													0 => 'within',
												)
											),
											array (
												'key' => 'fiearro123o_lor8a49e2',
												'label' => 'Arrows Color',
												'name' => 'tour_pc-arrows-color',
												'type' => 'rgba_color',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'fiard_arr123ype28ff659a',
															'operator' => '==',
															'value' => 'pc-custom-arrow',
														),
														array (
															'field' => 'field_5821e6f3d49fc',
															'operator' => '!=',
															'value' => 'wrap'
														)
													),
												),
												'wrapper' => array (
													'width' => '35'
												),
												'rgba' => 'rgba(255,255,255,1)',
												'return_value' => 0
											),

											array (
												'key' => 'field_5821e990a49df',
												'label' => 'Row Background',
												'name' => 'Row_Background_0',
												'type' => 'tab',
												'required' => 0,
												'placement' => 'top',
											),
											array (
												'key' => 'field_5821e99fa49e0',
												'label' => 'Choose Background Type',
												'name' => 'tour_pc-rowtype--bg',
												'type' => 'select',
												'required' => 0,
												'choices' => array (
													'texture' => 'Texture',
													'color' => 'Color',
												),
												'default_value' => array (
													0 => 'texture',
												),
											),
											array (
												'key' => 'field_5821e9cda49e1',
												'label' => 'Upload Image',
												'name' => 'tour_pc-rowtype--bg_texture',
												'type' => 'image',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e99fa49e0',
															'operator' => '==',
															'value' => 'texture',
														),
													),
												),
												'return_format' => 'url',
												'preview_size' => 'rpwe-thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_5821e9e8a49e2',
												'label' => 'Choose Color',
												'name' => 'tour_pc-rowtype--bg_color',
												'type' => 'rgba_color',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_5821e99fa49e0',
															'operator' => '==',
															'value' => 'color',
														)
													)
												)
											)
										)
									)
								)
							),
							array (
								'key' => 'field_5821d6ba6de39',
								'label' => 'Background Options',
								'name' => 'Background_Options_0',
								'type' => 'tab',
								'required' => 0
							),
							array (
								'key' => 'field_5821d316e18e2',
								'label' => 'Choose Background Type',
								'name' => 'tour_pc-bg__select',
								'type' => 'select',
								'required' => 0,
								'choices' => array (
									'image' => 'Image',
									'texture' => 'Texture',
									'color' => 'Color',
									'map' => 'Map',
									'video' => 'Video, this will be a moving video background',
									'video-embed' => 'Video Embed',
								),
							),
							array (
								'key' => 'field_5821d6db6de3a',
								'label' => 'Background Image',
								'name' => 'tour_pc-bg__select-image--image',
								'type' => 'image',
								'instructions' => 'If you don\'t attach any image, we will return gray color.',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'image',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'medium',
								'library' => 'all',
							),
							array (
								'key' => 'field_5821d7db6de3b',
								'label' => 'Fixed position',
								'name' => 'tour_pc-bg__select-image--fixed',
								'type' => 'radio',
								'instructions' => 'The image keeps a fixed position while you scroll.',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'image',
										),
									),
								),
								'choices' => array (
									'yep' => 'Yes, Background is fixed',
									'nope' => 'No',
								),
								'default_value' => 'yep',
								'layout' => 'horizontal',
							),
							array (
								'key' => 'field_582si7ez6imbg',
								'label' => 'Expande the section',
								'name' => 'tour_pc-bg__select-image--expanded',
								'type' => 'radio',
								'instructions' => 'Section takes the size of its background image.',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'image',
										),
										array (
											'field' => 'field_5821d7db6de3b',
											'operator' => '==',
											'value' => 'nope',
										),
									),
								),
								'choices' => array (
									'nope' => 'No',
									'yep' => 'Yes',
								),
								'default_value' => 'no',
								'layout' => 'horizontal',
							),
							array (
								'key' => 'field_5821d86bcaee2',
								'label' => 'Texture Crop',
								'name' => 'tour_pc-bg__select-texture--image',
								'type' => 'image',
								'instructions' => 'This would be a repeater image.',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'texture',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'medium',
								'library' => 'all',
							),
							array (
								'key' => 'field_5821d89ecaee3',
								'label' => 'Choose Background Color',
								'name' => 'tour_pc-bg__select-color',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'color',
										)
									)
								)
							),
							array (
								'key' => 'field_5821d8c5caee4',
								'label' => 'Input location',
								'name' => 'tour_pc-bg__select-map',
								'type' => 'google_map',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'map',
										)
									)
								)
							),
							array (
								'key' => 'field_5821d8ebcaee5',
								'label' => 'Poster Image',
								'name' => 'tour_pc-bg__select-video--image',
								'type' => 'image',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'full',
								'library' => 'all',
							),
							array (
								'key' => 'field_5821d913caee6',
								'label' => 'Input video links',
								'name' => 'tour_pc-bg__select-video--video-links',
								'type' => 'repeater',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'min' => 1,
								'max' => 1,
								'layout' => 'row',
								'button_label' => 'Disabled',
								'sub_fields' => array (
									array (
										'key' => 'field_5821d944caee7',
										'label' => 'Webm Type',
										'name' => 'tour_pc-bg__select-video--video-links--webm',
										'type' => 'text',
										'required' => 0,
									),
									array (
										'key' => 'field_5821d972caee8',
										'label' => 'OGV Type',
										'name' => 'tour_pc-bg__select-video--video-links--ogv',
										'type' => 'text',
										'required' => 0,
									),
									array (
										'key' => 'field_5821d983caee9',
										'label' => 'MP4 Type',
										'name' => 'tour_pc-bg__select-video--video-links--mp4',
										'type' => 'text',
										'required' => 0,
									),
								),
							),
							array (
								'key' => 'field_5821d9b6caeea',
								'label' => 'Video Embed',
								'name' => 'tour_pc-bg__select-videoembed',
								'type' => 'oembed',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821d316e18e2',
											'operator' => '==',
											'value' => 'video-embed',
										)
									)
								)
							),
							array (
								'key' => 'field_5821da4aabd7c',
								'label' => 'Top Divider Options',
								'name' => 'Top_Divider_Options_tab',
								'type' => 'tab',
								'required' => 0,
								'placement' => 'top',
							),
							array (
								'key' => 'field_5821df8eabd7d',
								'label' => 'Top Divider Type',
								'name' => 'tour_pc-td--select',
								'type' => 'select',
								'required' => 0,
								'wrapper' => array (
									'width' => '100'
								),
								'choices' => array (
									'none' => 'None',
									'repeater' => 'Repeater',
									'image' => 'Image',
									'line' => 'Line'
								),
								'default_value' => array (
									0 => 'none'
								)
							),
							array (
								'key' => 'tour_pc-td--line-color',
								'label' => 'Top divider color',
								'name' => 'tour_pc-td--line-color',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821df8eabd7d',
											'operator' => '==',
											'value' => 'line',
										),
									),
								),
								'wrapper' => array (
									'width' => '50',
								),
								'rgba' => 'rgba(194, 194, 194, 1)',
							),
							array (
								'key' => 'tour_pc-td--line-thickess',
								'label' => 'Top divider thickness',
								'name' => 'tour_pc-td--line-thickness',
								'type' => 'number',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821df8eabd7d',
											'operator' => '==',
											'value' => 'line',
										),
									),
								),
								'wrapper' => array (
									'width' => '50'
								),
								'append' => 'px',
								'min' => 1,
								'max' => 15,
								'step' => 1
							),
							array (
								'key' => 'field_5821e00cabd7e',
								'label' => 'Image Repeater',
								'name' => 'tour_pc-td--select__repeater',
								'type' => 'image',
								'instructions' => 'It will repeat',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821df8eabd7d',
											'operator' => '==',
											'value' => 'repeater',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'rpwe-thumbnail',
								'library' => 'all'
							),
							array (
								'key' => 'field_5821e070abd7f',
								'label' => 'Image',
								'name' => 'tour_pc-td--select__image',
								'type' => 'image',
								'instructions' => 'This image stretches the full width of the section. ',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821df8eabd7d',
											'operator' => '==',
											'value' => 'image',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_5821e135d0f10',
								'label' => 'Bottom Divider Options',
								'name' => 'Bottom_Divider_Options_Tab',
								'type' => 'tab',
								'required' => '',
								'placement' => 'top',
							),
							array (
								'key' => 'field_5821e14dd0f11',
								'label' => 'Bottom Divider Type',
								'name' => 'tour_pc-bd--select',
								'type' => 'select',
								'required' => '',
								'wrapper' => array (
									'width' => '100'
								),
								'choices' => array (
									'none' => 'None',
									'repeater' => 'Repeater',
									'image' => 'Image',
									'line' => 'Line',
								),
								'default_value' => array (
									0 => 'none',
								)
							),
							array (
								'key' => 'tour_pc-bd--line-color',
								'label' => 'Bottom divider color',
								'name' => 'tour_pc-bd--line-color',
								'type' => 'rgba_color',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821e14dd0f11',
											'operator' => '==',
											'value' => 'line',
										),
									),
								),
								'wrapper' => array (
									'width' => '50'
								),
								'rgba' => 'rgba(194, 194, 194, 1)',
							),
							array (
								'key' => 'tour_pc-bd--line-thickess',
								'label' => 'Bottom divider thickness',
								'name' => 'tour_pc-bd--line-thickness',
								'type' => 'number',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821e14dd0f11',
											'operator' => '==',
											'value' => 'line',
										),
									),
								),
								'wrapper' => array (
									'width' => '50'
								),
								'default_value' => 1,
								'append' => 'px',
								'min' => 1,
								'max' => 15,
								'step' => 1,
							),
							array (
								'key' => 'field_5821e1b1d0f13',
								'label' => 'Image Repeater',
								'name' => 'tour_pc-bd--select__repeater',
								'type' => 'image',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821e14dd0f11',
											'operator' => '==',
											'value' => 'repeater',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'rpwe-thumbnail',
								'library' => 'all'
							),
							array (
								'key' => 'field_5821e1c6d0f14',
								'label' => 'Image',
								'name' => 'tour_pc-bd--select__image',
								'type' => 'image',
								'instructions' => 'This image stretches the full width of the section. ',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_5821e14dd0f11',
											'operator' => '==',
											'value' => 'image',
										),
									),
								),
								'return_format' => 'url',
								'preview_size' => 'rpwe-thumbnail',
								'library' => 'all',
							)
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
		),
		'menu_order' => 2,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'active' => 1,
	));

endif;