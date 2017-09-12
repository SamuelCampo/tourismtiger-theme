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
					'position' => 'left'
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
					'key'      => self::$pref . "_{$number}_" . '0b0b',
					'label'    => 'Buttons',
					'name'     => 'tab-3',
					'required' => '',
					'type'     => 'tab',
					'position' => 'left'
				),
				array (
					'key'      => self::$pref . "_{$number}_" . '9b1b',
					'label'    => 'Buttons list',
					'name'     => 'button-custom',
					'type'     => 'repeater',
					'required' => '',
					'layout'   => 'block',
					'button_label' => 'Add buttons style',
					'collapsed' => self::$pref . "_{$number}_" . '8b2b',
					'sub_fields' => array (
						array (
							'key'    => self::$pref . "_{$number}_" . '8b2b',
							'label'  => 'Name',
							'name'   => 'name',
							'type'   => 'text',
							'instructions' => 'Examples of great name: Primary, Secondary, Sidebar primary etc..',
							'required' => '',
							'wrapper' => array(
								'width' => 50
							)
						),
						array (
							'key'    => self::$pref . "_{$number}_" . '7b3b',
							'label'  => 'Classname',
							'name'   => 'classname',
							'type'   => 'text',
							'instructions' => 'Examples of great classname: primary, secondary, sidebar-primary etc..',
							'required' => '',
							'wrapper' => array(
								'width' => 50
							),
							'placeholder' => 'lowercase-no-spaces'
						),
						array (
							'key'    => self::$pref . "_{$number}_" . '1s0s',
							'label'  => 'Button stated',
							'name'   => 'states',
							'type'   => 'flexible_content',
							'required' => '',
							'button_label' => 'Add state',
							'layouts' => array (
								array (
									'key' => self::$pref . "_{$number}_" . '2s9s',
									'label' => 'Default',
									'name' => 'default',
									'max'  => 1,
									'layout' => 'block',
									'sub_fields' => array (
										array (
											'key'      => self::$pref . "_{$number}_" . '6b4b',
											'label'    => 'Default button styles',
											'name'     => 'font',
											'type'     => 'clone',
											'required' => 0,
											'clone'    => array (
												0 => 'button_59aec5c7655c9',
											),
											'display' => 'group',
											'layout' => 'block',
											'prefix_label' => 0,
											'prefix_name' => 1,
										),
									)
								),
								array (
									'key' => self::$pref . "_{$number}_" . '3s8s',
									'label' => 'Hover',
									'name' => 'hover',
									'max'  => 1,
									'layout' => 'block',
									'sub_fields' => array (
										array (
											'key'      => self::$pref . "_{$number}_" . '7b2b',
											'label'    => 'On Hover button styles',
											'name'     => 'font',
											'type'     => 'clone',
											'required' => 0,
											'clone'    => array (
												0 => 'button_59aec5c7655c9',
											),
											'display' => 'group',
											'layout' => 'block',
											'prefix_label' => 0,
											'prefix_name' => 1,
										),
									)
								),
								array (
									'key' => self::$pref . "_{$number}_" . '4s7s',
									'label' => 'Active',
									'name' => 'active',
									'max'  => 1,
									'layout' => 'block',
									'sub_fields' => array (
										array (
											'key'      => self::$pref . "_{$number}_" . '6b3b',
											'label'    => 'On Click button styles',
											'name'     => 'font',
											'type'     => 'clone',
											'required' => 0,
											'clone'    => array (
												0 => 'button_59aec5c7655c9',
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
				),
				array (
					'key'      => self::$pref . "_{$number}_" . '0f0f',
					'label'    => 'Fonts',
					'name'     => 'tab-2',
					'required' => '',
					'type'     => 'tab',
					'position' => 'left'
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

				// init button types
				if ( have_rows( 'button-custom' ) ) :
					while ( have_rows( 'button-custom' ) ) :
						the_row();

						$btn       = array();
						$name      = get_sub_field( 'name' );
						$classname = get_sub_field( 'classname' );

						$btn['name']      = $name;
						$btn['classname'] = $classname;

						if ( have_rows( 'states' ) ) :
							while ( have_rows( 'states' ) ) :
								the_row();

								$layout = get_row_layout();
								$font   = get_sub_field( 'font' );

								$btn['layouts'][$layout] = $font;
							endwhile;
						endif;

						$rules['button-custom'][$classname] = $btn;
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

	/**
	 * Returns an array of available custom buttons
	 */
	public static function get_buttons_array() {
		$file   = get_rules_json( 'constants' );
		$output = array();

		if ( file_exists( $file ) ) : 
			$json     = file_get_contents( $file );
			$jsonData = json_decode( $json, true );

			/**
			 * So if it's array, pulls rules
			 */
			if ( is_array( $jsonData['button-custom'] ) ) :

				$list = $jsonData['button-custom'];

				/**
				 * Loop selectors
				 */ 
				foreach ( $list as $name => $btn ) 
					$output[$name] = $btn['name'];
			endif;
		endif;

		return $output;
	}

	/**
	 * Returns an array of available custom buttons
	 */
	public static function get_button_rules_array( $rules = array() ) {
		if ( ! is_array( $rules ) )
			return array();

		// init font 
		$array = get_font_rules_array( $rules['font'] );

		// inti background
		if ( array_key_exists( 'bg-color-type', $rules ) ) :
			$bg = $rules['bg-color-type'];

			if ( $rules["bg-color-{$bg}"] )
				$array['background-color'] = "background-color:{$rules["bg-color-{$bg}"]};";
		endif;

		// init border
		if ( array_key_exists( 'border', $rules ) && $rules['border'] != 'none' ) :
			// width of border
			if ( array_key_exists( 'border-width', $rules ) )
				$array['border-width'] = "border-width:{$rules['border-width']}px;";

			// style of border
			if ( array_key_exists( 'border-style', $rules ) )
				$array['border-style'] = "border-style:{$rules['border-style']};";

			// color of border
			if ( array_key_exists( 'border-color-type', $rules ) ) :
				$border = $rules['border-color-type'];

				if ( $rules["border-color-{$border}"] )
					$array['border-color'] = "border-color:{$rules["border-color-{$border}"]};";
			endif;
		endif;

		return $array;
	}

	/**
	 * Returns an array of available custom buttons
	 */
	public static function get_button_css( $name = '', $stringify = false ) {
		if ( !$name )
			return array();

		$output = array();
		$file   = get_rules_json( 'constants' );

		if ( file_exists( $file ) ) : 
			$json     = file_get_contents( $file );
			$jsonData = json_decode( $json, true );

			// check whether the name is exists 
			// in the availability list
			if ( array_key_exists( $name, $jsonData['button-custom'] ) ) :
				$btn      = $jsonData['button-custom'][$name];
				
				foreach ( $btn['layouts'] as $layout => $rules ) :
					$array           = self::get_button_rules_array( $rules );
					$output[$layout] = '';

					if ( ! $stringify ) 
						$output[$layout] = $array;
					else 
						foreach ( $array as $rule )
							$output[$layout] .= $rule;
				endforeach;
			endif;
		endif;

		return $output;
	}


	public static function get_button_css_classes() {
		$buttons = self::get_buttons_array();
		$output  = '';

		if ( count($buttons) > 0 ) :
			foreach ( $buttons as $slug => $name ) :
				$rules = self::get_button_css( $slug, true );
				$class = ".button_{$slug}";

				// loop class for different states
				if ( count($rules) > 0 ) :
					foreach ( $rules as $layout => $value ) :
						// print rules for different states
						if ( $layout == 'default' ) 
							$output .= "{$class}{{$value}}";
						else
							$output .= "{$class}:{$layout}{{$value}}";
					endforeach;
				endif;
			endforeach;
		endif;

		return $output;
	}
}

new Constants( 'Constants' );

?>