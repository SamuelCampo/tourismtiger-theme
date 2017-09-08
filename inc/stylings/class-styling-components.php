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
					'label'    => 'Headline',
					'name'     => 'tab-1',
					'required' => '',
					'type'     => 'tab',
				),		

				array (
					'key'      => self::$pref . "_{$number}_" . '0w1f',
					'label'    => 'Headline',
					'name'     => 'headline',
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
		$file        = self::get_rules_json();

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