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
	public $pref = '';
	public $url ='';
	public $devices = array( 
		'Laptop'  => '1150',
		'Netbook' => '992',
		'iPad'    => '768',
		'Mobile'  => '568'
	);


	function __construct( $name ){

		$this->name    = $name;
		$this->slug    = transform_name( $this->name, '_' );
		$this->url     = transform_name( $this->name, '-' );
		$this->pref    = explode( $this->slug, 2 );

		/* Init json file where a data will be stored */
		$this->create_json();

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
		$path    = get_styling_json_path() . 'styles-count.json';
		$is_json = file_exists( $path );

		/**
		 * Create file and white the first value
		 */
		if ( !$is_json ) :
			$jsonData    = array( $this->slug => 1 );
			$jsonEncoded = json_encode($jsonData);
			$handle      = fopen($path, 'w+');

			fwrite($handle, $jsonEncoded);
			fclose($handle);

		/**
		 * Decode file from json to php array 
		 */
		elseif ( $is_json ) :
			$json = file_get_contents( $path );

			if ( $json != '' ) :
				$jsonData = json_decode( $json, true );

				if ( $jsonData === null ) 
					return null;

				/**
				 * If there isn't current class data
				 * set initial value and rewrite a file
				 */
				if ( ! array_key_exists( $this->slug, $jsonData ) ) :
					$jsonData[$this->slug] = 1;
					$jsonEncoded           = json_encode( $jsonData );
					$handle                = fopen($path, 'w+');
					fwrite($handle, $jsonEncoded);
					fclose($handle);
				endif;

			else :
				$jsonData    = array( $this->slug => 1 );
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
			'post_id'       => 'styles'
		) );

	}


	/**
	 * Init ACF Fields
	 * @return array
	 */
	abstract protected function init_acf_fields();


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
	 * Button repeater array
	 * 
	 * @return array
	 */
	protected function get_button_layouts( $i = 0, $id = '' ) {
		$key = $this->slug . $i . $id . 'btn';

		$output = array(
			array (
				'key' => $key . 'style',
				'label' => 'Style',
				'name' => 'style',
				'type' => 'select',
				'required' => 0,
				'choices' => array (
					'text' => 'Text',
					'square' => 'Square',
					'round' => 'Round',
					'corner' => 'Round Corner',
				),
				'wrapper' => array (
					'width' => '25'
				),
				'default_value' => 'square'
			),
			array (
				'key' => $key . 'hover',
				'label' => 'On Mouseover effect',
				'name' => 'hover',
				'type' => 'checkbox',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => '',
				'choices' => array (
					'color' => 'Color Invert',
					'text' => 'Text Decoration',
				),
				'default_value' => array (
				),
				'wrapper' => array (
					'width' => '40'
				),
				'layout' => 'horizontal',
				'toggle' => 1,
			),
			array (
				'key' => $key . 'bg',
				'label' => 'Button Background',
				'name' => 'background',
				'type' => 'rgba_color',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => '',
				'rgba' => '',
				'return_value' => 0,
				'wrapper' => array (
					'width' => '35'
				),
			),
			array (
				'key' => $key . 'font',
				'label' => 'Button Label Font',
				'name' => 'font',
				'type' => 'typography',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'show_font_familys' => 1,
				'font-family' => 'Roboto',
				'show_font_weight' => 1,
				'font-weight' => 400,
				'show_backup_font' => 1,
				'backup-font' => 'Arial, Helvetica, sans-serif',
				'show_text_align' => 0,
				'text_align' => 0,
				'show_text_direction' => 0,
				'direction' => 'ltr',
				'show_font_size' => 1,
				'font_size' => 20,
				'show_line_height' => 1,
				'line_height' => 25,
				'show_letter_spacing' => 1,
				'letter_spacing' => 0,
				'show_color_picker' => 0,
				'text_color' => '#000000',
				'show_font_style' => 1,
				'font_style' => 'normal',
				'show_preview_text' => 0
			),
			array (
				'key' => $key . 'color',
				'label' => 'Button Label Font color',
				'name' => 'color',
				'type' => 'rgba_color',
				'required' => 0,
				'wrapper' => array(
					'width' => 25
				)
			),
			array (
				'key' => $key . 'shadow',
				'label' => 'Dropshadow',
				'name' => 'shadow',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => '',
				'message' => 'Enable Dropshadow',
				'default_value' => 0,
				'wrapper' => array(
					'width' => 25
				)
			),
			array (
				'key' => $key . 'border',
				'label' => 'Border',
				'name' => 'border',
				'type' => 'select',
				'required' => 0,
				'choices' => array (
					'no' => 'No',
					'yes' => 'Yes',
					'hover' => 'On Mouseover',
				),
				'wrapper' => array (
					'width' => '25'
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'no',
				'layout' => 'horizontal',
			),
			array (
				'key' => $key . 'borwid',
				'label' => 'Thickness',
				'name' => 'border_width',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => $key . 'border',
							'operator' => '==',
							'value' => 'yes',
						),
					),
					array (
						array (
							'field' => $key . 'border',
							'operator' => '==',
							'value' => 'hover',
						),
					),
				),
				'default_value' => 1,
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => 1,
				'max' => 5,
				'step' => '',
				'readonly' => 0,
				'disabled' => 0,
				'wrapper' => array (
					'width' => '25'
				),
			),
		);

		return $output;
	}


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
					'label' => 'Configuration',
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
						'value' => 'acf-options-' . $this->url . '-styles',
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