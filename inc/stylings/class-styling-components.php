<?php
/**
 * Common Class Extend
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
 
class Components extends Styling {

	/**
	 * Acf local fields
	 */
    protected function init_acf_options( $number = 0 ) {
		return array(
			'key'        => self::$pref . "_{$number}_" . '1q2w',
			'label'      => 'Styles group',
			'name'       => 'style-' . $number,
			'type'       => 'repeater',
			'required'   => 0,
			'min' => 1,
			'max' => 1,
			'layout' => 'block',
			'sub_fields' => array (		
				array (
					'key'      => self::$pref . "_{$number}_" . '0t0f',
					'label'    => 'Typography',
					'name'     => 'tab-1',
					'required' => '',
					'type'     => 'tab',
					'placement' => 'left',
				),	
					
				array(
					'key'      => self::$pref . "_{$number}_" . '0t0t',
					'label'    => 'Headline and Content',
					'name'     => 'typography',
					'type'     => 'flexible_content',
					'required' => '',
					'layouts'  => array (
						array (
							'key' => self::$pref . "_{$number}_" . '9t1t',
							'label' => 'H1',
							'name' => 'h1',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '0w0q',
									'label'    => 'H1 Title',
									'name'     => 'h1',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '8t2t',
							'label' => 'H2',
							'name' => 'h2',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '0w1f',
									'label'    => 'H2 Title',
									'name'     => 'h2',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '7t3t',
							'label' => 'H3',
							'name' => 'h3',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '9w2f',
									'label'    => 'H3 Title',
									'name'     => 'h3',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '6t4t',
							'label' => 'H4',
							'name' => 'h4',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '8w3f',
									'label'    => 'H4 Title',
									'name'     => 'h4',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '5t5t',
							'label' => 'H5',
							'name' => 'h5',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '7w4f',
									'label'    => 'H5 Title',
									'name'     => 'h5',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '4t6t',
							'label' => 'H6',
							'name' => 'h6',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '6w5f',
									'label'    => 'H6 Title',
									'name'     => 'h6',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '3t7t',
							'label' => 'Paragraph',
							'name' => 'p',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '5w6f',
									'label'    => 'Paragraph',
									'name'     => 'p',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),	
							)
						)
					)
				),	

				array (
					'key'      => self::$pref . "_{$number}_" . '1t1t',
					'label'    => 'Form',
					'name'     => 'tab-2',
					'required' => '',
					'type'     => 'tab',
					'placement' => 'left',
				),	

				array(
					'key'      => self::$pref . "_{$number}_" . '0f0f',
					'label'    => 'Form',
					'name'     => 'typography',
					'type'     => 'flexible_content',
					'required' => '',
					'layouts' => array (
						array (
							'key' => self::$pref . "_{$number}_" . '0f0r',
							'label' => 'Title',
							'name' => 'title',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '7f1f',
									'label'    => 'Title',
									'name'     => 'title',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '8f1r',
							'label' => 'Description',
							'name' => 'description',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '8f9f',
									'label'    => 'Description',
									'name'     => 'description',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '6f2r',
							'label' => 'Label',
							'name' => 'label',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '0f1f',
									'label'    => 'Label',
									'name'     => 'label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '4f3r',
							'label' => 'Sub label',
							'name' => 'sub-label',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '8f3f',
									'label'    => 'Sub label',
									'name'     => 'input+label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '2f4r',
							'label' => 'Checkbox',
							'name' => 'checkbox',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '7f4f',
									'label'    => 'Label of checkbox',
									'name'     => '.jq-checkbox+label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '1f5r',
							'label' => 'Radiobox',
							'name' => 'radiobox',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '6f5f',
									'label'    => 'Label of radio',
									'name'     => '.jq-radio+label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '9f6r',
							'label' => 'Selector',
							'name' => 'selector',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '7f8f',
									'label'    => 'Text inside selector',
									'name'     => '.jq-selectbox__select-text',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '7f7r',
							'label' => 'Input',
							'name' => 'input',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '9f2f',
									'label'    => 'Text inside inputs',
									'name'     => 'input',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '5f8r',
							'label' => 'File Input',
							'name' => 'file-input',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '8f1f',
									'label'    => 'Text inside file input',
									'name'     => '.jq-file__name',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
						array (
							'key' => self::$pref . "_{$number}_" . '3f9r',
							'label' => 'Sub Input',
							'name' => 'sub-input',
							'layout' => 'block',
							'max' => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '3f5f',
									'label'    => 'Text under input',
									'name'     => 'input-description',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						)
					)
				),

				array (
					'key'      => self::$pref . "_{$number}_" . '2t2t',
					'label'    => 'Icons list',
					'name'     => 'tab-3',
					'required' => '',
					'type'     => 'tab',
					'placement' => 'left',
				),	

				array(
					'key'      => self::$pref . "_{$number}_" . '0i0l',
					'label'    => 'Icons list',
					'name'     => 'icons-list',
					'type'     => 'flexible_content',
					'required' => '',
					'layouts' => array (
						array (
							'key'    => self::$pref . "_{$number}_" . '0f0r',
							'label'  => 'Icons',
							'name'   => 'icons',
							'layout' => 'block',
							'max'    => 1,
							'sub_fields' => array (
								array (
									'key' => self::$pref . '_911ec73e7dc4b',
									'label' => 'Color type',
									'name' => 'color-type',
									'type' => 'select',
									'required' => 0,
									'wrapper' => array (
										'width' => '33',
									),
									'choices' => array(
										'rgba' => 'RGBA picker',
										'custom' => 'Custom color'
									),
									'default_values' => array(
										'rgba' => 'RGBA picker'
									),
								),
								array (
									'key' => self::$pref . '_911ec73e7cd5a',
									'label' => 'Text color',
									'name' => 'color-rgba',
									'type' => 'rgba_color',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array (
											array(
												'field' => self::$pref . '_911ec73e7dc4b',
												'operator' => '==',
												'value' => 'rgba'
											)
										)
									),
									'wrapper' => array (
										'width' => '33',
									),
								),
								array (
									'key' => self::$pref . '_911ec73e8sa3c',
									'label' => 'Custom color',
									'name' => 'color-custom',
									'type' => 'select',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array (
											array(
												'field' => self::$pref . '_911ec73e7dc4b',
												'operator' => '==',
												'value' => 'custom'
											)
										)
									),
									'wrapper' => array (
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => get_font_color_choices(),
									'allow_null' => 1,
									'multiple' => 0,
									'ui' => 1,
									'ajax' => 1,
									'return_format' => 'value',
								),
							)
						),
						array (
							'key'    => self::$pref . "_{$number}_" . '9f1r',
							'label'  => 'Textarea',
							'name'   => 'textarea',
							'layout' => 'block',
							'max'    => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '98f2r',
									'label'    => 'Textarea',
									'name'     => 'textarea',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						)
					)
				),

				array (
					'key'      => self::$pref . "_{$number}_" . '3t3t',
					'label'    => 'Trip details',
					'name'     => 'tab-4',
					'required' => '',
					'type'     => 'tab',
					'placement' => 'left',
				),

				array(
					'key'      => self::$pref . "_{$number}_" . '0t0d',
					'label'    => 'Trip details',
					'name'     => 'trip-details',
					'type'     => 'flexible_content',
					'required' => '',
					'layouts' => array (
						array (
							'key'    => self::$pref . "_{$number}_" . '1t9d',
							'label'  => 'Label',
							'name'   => 'label',
							'layout' => 'block',
							'max'    => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '2t8d',
									'label'  => 'Label',
									'name'   => 'label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
					)
				),

				array (
					'key'      => self::$pref . "_{$number}_" . '4t4t',
					'label'    => 'Accordion',
					'name'     => 'tab-5',
					'required' => '',
					'type'     => 'tab',
					'placement' => 'left',
				),

				array(
					'key'      => self::$pref . "_{$number}_" . '0a0c',
					'label'    => 'Accordion',
					'name'     => 'accordion',
					'type'     => 'flexible_content',
					'required' => '',
					'layouts' => array (
						array (
							'key'    => self::$pref . "_{$number}_" . '1a9c',
							'label'  => 'Label',
							'name'   => 'label',
							'layout' => 'block',
							'max'    => 1,
							'sub_fields' => array (
								array (
									'key'      => self::$pref . "_{$number}_" . '2a8c',
									'label'  => 'Label',
									'name'   => 'label',
									'type'     => 'clone',
									'required' => 0,
									'clone'    => array (
										0 => 'media_59aec5c7655c9',
									),
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 0,
									'prefix_name' => 1,
								),
							)
						),
					)
				)
			)
		);
	}

	/**
	 * Returns css rules of colors
	 */
	public static function init_rules( $number = 1 ) {
		$rules = array();
		$id    = 'components';
		$count = get_acf_styles_count( $id );

		for ($i = 1; $i <= $id; $i++) :
			$acf   = "style-{$i}";
			if ( have_rows( $acf, $id ) ) :
				while ( have_rows( $acf, $id ) ) :
					$row = the_row();

				endwhile;
			endif;
		endfor;


		return $rules;
	}

	/**
	 * Put Common css rules to JSON
	 */
	public static function put_rules_to_json() {
		$rules       = self::init_rules();
		$file        = get_rules_json('components');

		$encodedJSON = json_encode( $rules );
		$handle      = fopen($file, 'w');
		fwrite($handle, $encodedJSON);
		fclose($handle);

		return $rules;
	}

	/**
	 * Show common values
	 */
	public static function get_rules() {
		$file     = self::get_rules_json();
		$json     = file_get_contents( $file );
		$jsonData = json_decode( $json, true );

		return $jsonData;
	}
}

new Components( 'Components', 'multiply' );

?>