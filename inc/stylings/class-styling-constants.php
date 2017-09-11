<?php
/**
 * Common Class Extend
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
 
class Constants extends Styling {

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
					'label'    => 'Colors',
					'name'     => 'tab-1',
					'required' => '',
					'type'     => 'tab',
				),	
				array (
					'key'      => self::$pref . "_{$number}_" . '9w1f',
					'label'    => 'Colors list',
					'name'     => 'color-custom',
					'type'     => 'repeater',
					'required' => '',
					'layout'   => 'block',
					'button_label' => 'Add color',
					'sub_fields' => array(
						array(
							'key'      => self::$pref . "_{$number}_" . '8w2f',
							'label'    => 'Color',
							'name'     => 'color',
							'type'     => 'rgba_color',
							'required' => '',
							'wrapper'  => array(
								'width' => 50
							) 
						),
						array(
							'key'      => self::$pref . "_{$number}_" . '7w3f',
							'label'    => 'Name',
							'name'     => 'name',
							'type'     => 'text',
							'required' => '',
							'wrapper'  => array(
								'width' => 50
							),
							'limit' => '10'
						)
					)
				),	
				array (
					'key'      => self::$pref . "_{$number}_" . '0f0f',
					'label'    => 'Fonts',
					'name'     => 'tab-2',
					'required' => '',
					'type'     => 'tab',
				),	
				array (
					'key'      => self::$pref . "_{$number}_" . '9f1f',
					'label'    => 'Font Families list',
					'name'     => 'family-custom',
					'type'     => 'repeater',
					'required' => '',
					'layout'   => 'block',
					'button_label' => 'Add family',
					'sub_fields' => array(
						array(
							'key'      => self::$pref . "_{$number}_" . '8f2f',
							'label'    => '.ttf source',
							'name'     => 'source',
							'type'     => 'file',
							'required' => '',
							'return_format' => 'url',
							'wrapper'  => array(
								'width' => 50
							) 
						),
						array(
							'key'      => self::$pref . "_{$number}_" . '7f3f',
							'label'    => 'Name',
							'name'     => 'name',
							'type'     => 'text',
							'required' => '',
							'wrapper'  => array(
								'width' => 50
							),
							'limit' => '10'
						)
					)
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
		$id    = 'constants';

		if ( have_rows( $acf, $id ) ) :
			while ( have_rows( $acf, $id ) ) :
				$row = the_row();

				// init color parametres
				if ( have_rows( 'color-custom' ) ):
					while ( have_rows( 'color-custom' ) ) :
						the_row();

						$value = get_sub_field( 'color' );
						$name  = get_sub_field( 'name' );

						$rules['color-custom'][$value] = $name;
					endwhile;
				endif;

				// init families of fonts
				if ( have_rows( 'family-custom' ) ):
					while ( have_rows( 'family-custom' ) ) :
						the_row();

						$value = get_sub_field( 'source' );
						$name  = get_sub_field( 'name' );

						//$rules['family-custom'][$value] = $name;
					endwhile;
				endif;
			endwhile;
		endif;

		return $rules;
	}

	/**
	 * Put Common css rules to JSON
	 */
	public static function put_rules_to_json() {
		$rules       = self::init_rules();
		$file        = get_rules_json('constants');

		$encodedJSON = json_encode( $rules );
		$handle      = fopen($file, 'w');
		fwrite($handle, $encodedJSON);
		fclose($handle);

		return $rules;
	}
}

new Constants( 'Constants' );

?>