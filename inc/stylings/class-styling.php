<?php
/**
 * Styling Cards Class
 *
 * This class allows you to create styling extend classes.
 * For example: Hero Area and Primary area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

abstract class Styling {


	public static $name     = '';
	public static $slug     = '';
	public static $url      = '';
	public static $pref     = '';
	public static $mode     = 'single';
	public static $devices  = array( 
		'Laptop'     => '1150',
		'Netbook'    => '992',
		'iPad'       => '768',
		'Mobile'     => '568'
	);


	function __construct( $name, $mode = 'single' ){

		self::$name = $name;
		self::$slug = transform_name( self::$name, '_' );
		self::$url  = transform_name( self::$name, '-' );
		self::$pref = self::$url;
		self::$mode = $mode;

		/* Init json file where a data will be stored */
		self::create_json();

		/* Init ACF Option pages */
		self::init_acf_option_page();

		/* Init ACF field group  */
		self::init_local_field_group();
	}


	/**
	 * Create table in json file 
	 * which will keep the styles count. 
	 * 
	 * @return null
	 */
	public function create_json() {
		$path    = get_styling_json_path() . 'styles-count.json';
		$is_json = file_exists( $path );

		/**
		 * Create file and white the first value
		 */
		if ( !$is_json ) :
			$jsonData    = array( self::$slug => 1 );
			$jsonEncoded = json_encode($jsonData);
			$handle      = fopen($path, 'w+');

			fwrite($handle, $jsonEncoded);
			fclose($handle);

		/**
		 * Decode file from json to php array 
		 */
		elseif ( $is_json ) :
			$json = file_get_contents( $path );

			/**
			 * If the file ain't empty 
			 */
			if ( $json != '' ) :
				$jsonData = json_decode( $json, true );

				if ( $jsonData === null ) 
					return null;

				/**
				 * If there isn't current class data
				 * set initial value and rewrite a file
				 */
				if ( ! array_key_exists( self::$slug, $jsonData ) ) :
					$jsonData[self::$slug] = 1;
					$jsonEncoded           = json_encode( $jsonData );
					$handle                = fopen($path, 'w+');
					fwrite($handle, $jsonEncoded);
					fclose($handle);
				endif;

			/**
			 * Whether the file is empty, 
			 * set value - one
			 */
			else :
				$jsonData    = array( self::$slug => 1 );
				$jsonEncoded = json_encode($jsonData);
				$handle      = fopen($path, 'w+');

				fwrite($handle, $jsonEncoded);
				fclose($handle);
			endif;
		endif;

		return null;
	}

	/**
	 * Return object name
	 * @return string
	 */
	public static function get_name() {
		return self::$name;
	}

	/**
	 * Return object slug
	 * @return string
	 */
	public static function get_slug() {
		return self::$slug;
	}

	/**
	 * Return object url
	 * @return string
	 */
	public static function get_url() {
		return self::$url;
	}

	/**
	 * Return object prefix
	 * @return string
	 */
	public static function get_pref() {
		return self::$pref;
	}

	/**
	 * Return object mode
	 * @return string
	 */
	public static function get_mode() {
		return self::$mode;
	}

	/**
	 * Prepare class name
	 * @return string
	 */
	public static function set_classname( $name ) {
		return self::$pref . '_' . transform_name( $name, '-' );
	}

	/**
	 * Prepare class name
	 * @return string
	 */
	public static function get_css_classname( $name ) {
		return '.' . set_classname( $name );
	}


	/**
	 * Init ACF option pages 
	 * @return null 
	 */
	protected function init_acf_option_page() {

		/**
		 * Page where will store rows
		 */
		acf_add_options_sub_page( array(
			'page_title' 	=> self::$name . ' Styles',
			'menu_title' 	=> self::$name,
			'parent_slug' 	=> 'acf-theme-styles',
			'post_id'       => self::$pref
		) );

	}


	/**
	 * Get/Create rules file
	 */
	public static function get_rules_json() {
		$file = get_styling_json_path() . self::get_url() . '.json';

		if ( file_exists( $file ) ) : 
			return $file;
		else :
			$fp = fopen($file, "w"); 
		    fwrite($fp, "// Init");
		    fclose($fp);

		    return $file;
		endif;
	}


	/**
	 * Init ACF Fields
	 * @return array
	 */
	abstract protected function init_acf_options( $number = 0 );


	/**
	 * Return tab with style title
	 * @return array
	 */
	protected function get_acf_tab( $number = 0 ) {

		$array = array (
			'key' => self::$pref . $number . '_aa',
			'label' => 'Style ' . $number,
			'name' => 'style-' . $number,
			'type' => 'accordion',
			'required' => 0,
			'icon_class' => 'dashicons-arrow-right',
		);	
		return $array;

	}


	/**
	 * Init ACF Fields
	 * @return array
	 */
	protected function init_acf_fields() {
		$rows = array();

		if ( self::get_mode() === 'multiply' ) :
			$count = get_acf_styles_count( self::$slug );

			for ( $number = 1; $number <= $count; $number++ ) :
				$number_string = create_style_prefix($number);

				$rows[] = $this->get_acf_tab( $number );
				$rows[] = $this->init_acf_options( $number );
			endfor;
		else :
			$rows[] = $this->init_acf_options( 1 );
		endif;

		return $rows;
	}


	/**
	 * Register rows 
	 * in ACF Local field group
	 *
	 * @return null 
	 */
	protected function init_local_field_group() {

		/**
		 * Build rows
		 */
		$rows = $this->init_acf_fields();

		acf_add_local_field_group(array ( 
			'key' => 'options-css_' . self::$pref,
			'title' => self::$name . ' styles',
			'fields' => $rows,
			'location' => array (
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-' . self::$url
					)
				)
			),
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'active' => 1,

		));

		acf_add_local_field_group(array (
			'key' => 'options-panel_' . self::$pref,
			'title' => self::$name . ' styles manager',
			'fields' => array (
				array (
					'key' => self::$pref . '-manager',
					'label' => 'Configuration',
					'name' => self::$url . '-manager',
					'type' => 'styling_manager',
					'required' => 0,
					'styling_group' => self::$slug,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-' . self::$url,
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

		return null;

	}

}

?>