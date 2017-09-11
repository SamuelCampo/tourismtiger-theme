<?php
/**
 * Common Class Extend
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
 
class Common extends Styling {

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
					'label'    => 'Globals',
					'name'     => 'tab-1',
					'required' => '',
					'type'     => 'tab',
				),	
				array (
					'key'      => self::$pref . "_{$number}_" . '0w0f',
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

				array (
					'key'      => self::$pref . "_{$number}_" . '4t1f',
					'label'    => 'Forms',
					'name'     => 'tab-2',
					'type'     => 'tab',
					'required' => ''
				),	

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
		);
	}

	/**
	 * Returns css rules of colors
	 */
	public static function init_rules( $number = 1 ) {
		$rules = array();
		$acf   = "style-1";
		$id    = 'common';

		if ( have_rows( $acf, $id ) ) :
			while ( have_rows( $acf, $id ) ) :
				$row = the_row();

				/**
				 * Fonts - just names of fields
				 */
				$types = array(
					'h1',
					'h2',
					'h3',
					'h4',
					'h5',
					'h6',
					'p',
					'label',
					'input+label',
					'.jq-checkbox+label',
					'.jq-radio+label',
					'.jq-selectbox__select-text',
					'input',
					'.jq-file__name'
				);

				/**
				 * Loop default values.
				 * @var $field is acf clone field of id = media_59aec5c7655c9 
				 */
				foreach ( $types as $field ) :
					if ( get_font_media_array( $field ) )
						$rules[$field] = get_font_media_rules($field);
				endforeach;

			endwhile;
		endif;

		return $rules;
	}

	/**
	 * Put Common css rules to JSON
	 */
	public static function put_rules_to_json() {
		$rules       = self::init_rules();
		$file        = get_rules_json('common');

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

new Common( 'Common' );

?>