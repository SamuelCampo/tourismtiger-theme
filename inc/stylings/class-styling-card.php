<?php
/**
 * Styling Cards Class
 *
 * TODO:
 * - Init create_json()
 */

abstract class StylingCard {


	public $name = '';
	public $slug = '';
	public $url ='';


	function __construct( $name ){

		$this->name    = $name;
		$this->slug    = transform_name( $this->name, '_' );
		$this->url     = transform_name( $this->name, '-' );

		/* Init ACF Option pages */
		$this->init_acf_option_page();

		/* Init ACF field group  */
		$this->init_local_field_group();

	}


	/**
	 * Create table in json file 
	 * which will keep the styles count. 
	 * 
	 * @return null
	 */
	public function create_json() {
		$path = get_styling_json_path() . 'styles-count.json';
		$json = file_get_contents( $path );

		/**
		 * Create file and white the first value
		 */
		if ( !$json ) :
			$jsonData = array( $this->slug => 1 );
			$jsonData = json_encode($jsonData);
			$handle   = fopen($path, 'w');

			fwrite($handle, $jsonData);
			fclose($handle);

		/**
		 * Decode file from json to php array 
		 */
		elseif ( $json ) :
			$jsonData = json_decode( $json, true );

			/**
			 * If there isn't current class data
			 * set initial value and rewrite a file
			 */
			if ( !$jsonData[$this->slug] ) :
				$jsonData[$this->slug] = 1;
				$handle = fopen($path, 'w');
				fwrite($handle, $jsonData);
				fclose($handle);
			endif;
		endif;

		return null;
	}

	/**
	 * Return object name
	 * @return string
	 */
	public function get_name() {
		return $this->name;
	}

	/**
	 * Return object slug
	 * @return string
	 */
	public function get_slug() {
		return $this->slug;
	}

	/**
	 * Return object url
	 * @return string
	 */
	public function get_url() {
		return $this->url;
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
			'page_title' 	=> $this->name . ' Styles',
			'menu_title' 	=> $this->name . ' Styles',
			'parent_slug' 	=> 'acf-theme-styles',
		) );

	}


	/**
	 * Init ACF Fields
	 * @return array
	 */
	protected function init_acf_fields() {

		$styles = get_acf_styles_count( $this->slug );
		$rows   = array();

		for ( $i = 1; $i <= $styles; $i++ ) :
			$c = create_style_prefix($i);

			$rows[] = $this->return_acf_accordion( $i );
			$rows[] = $this->return_acf_group( $i, $c );
		endfor;

		return $rows;

	}


	/**
	 * Return Accordion with style title
	 * @return array
	 */
	protected function return_acf_accordion( $i = '' ) {

		$array = array (
			'key' => $this->slug . $i . '_acdn',
			'label' => 'Style ' . $i,
			'name' => 'style_' . $i,
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_class' => 'dashicons-arrow-right',
		);	

		return $array;

	}


	/**
	 * Return Fields. ACF Fields array.
	 * Each extended class must rewrite current method.
	 * 
	 * @return array
	 */
	abstract protected function return_acf_group( $i = '', $c = '' );


	/**
	 * Register rows 
	 * in ACF Local field group
	 *
	 * @return null 
	 */
	protected function init_local_field_group() {

		$rows = $this->init_acf_fields();

		acf_add_local_field_group(array ( 

			'key' => 'group_optioncss' . $this->slug,
			'title' => $this->name . ' styles',
			'fields' => $rows,
			'location' => array (
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-' . $this->url . '-styles'
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
			'key' => 'group_' . $this->slug . '355b9b1',
			'title' => $this->name . ' styles manager',
			'fields' => array (
				array (
					'key' => $this->slug . '-manager',
					'label' => 'Add/remove',
					'name' => $this->url . '-manager',
					'type' => 'styling_manager',
					'required' => 0,
					'styling_group' => $this->slug,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-theme-' . $this->url . '-styles',
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