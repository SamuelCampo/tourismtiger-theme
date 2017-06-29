<?php
/**
 * Hero Area Class Extend
 */
 
class HeroArea extends StylingCard {


	/**
	 * Generate title media query layouts
	 * 
	 * @param  string  $tag 
	 * @param  integer $id  - title id, to difference first and second titles.
	 * @param  integer $i   
	 * @return array
	 */
	protected function get_title_query_layouts( $tag = '', $id = 1, $i = 1 ) {
		$output  = array();

		foreach ( $this->devices as $name => $width ) :
			$key = $this->slug . $i . $id . $width . 'media' . strtolower($tag);

			$array = array (
				'key' => $key,
				'name' => $width,
				'label' => $name . ': ' . $width . 'px',
				'min' => 0,
				'max' => 1,
				'sub_fields' => array (
					array (
						'key' => $key . '-font',
						'label' => 'Font',
						'name' => 'font',
						'type' => 'typography',
						'required' => 0,
						'show_font_familys' => 0,
						'font-family' => 'Roboto',
						'show_font_weight' => 1,
						'font-weight' => 400,
						'show_backup_font' => 0,
						'backup-font' => 'Arial, Helvetica, sans-serif',
						'show_text_align' => 0,
						'text_align' => 'left',
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
						'show_font_style' => 0,
						'font_style' => 'normal',
						'show_preview_text' => 0,
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => $key . '-top',
						'label' => 'Margin top',
						'name' => 'margin-top',
						'type' => 'number',
						'required' => '',
						'wrapper' => array (
							'width' => '50'
						),
						'default_value' => '0',
						'placeholder' => '0',
						'append' => 'px',
						'min' => '0',
						'max' => '100'
					),
					array (
						'key' => $key . '-bot',
						'label' => 'Margin bottom',
						'name' => 'margin-bottom',
						'type' => 'number',
						'required' => '',
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50'
						),
						'default_value' => '0',
						'placeholder' => '0',
						'append' => 'px',
						'max' => '100'
					),
				)
			);

			$output[] = $array;
		endforeach;

		return $output;
	}


	/**
	 * Generate tag layouts
	 * 
	 * @param  integer $id  - title id, to difference first and second titles.
	 * @param  integer $i   
	 * @return array
	 */
	protected function get_tags_layouts( $id = 1, $i = 1 ) {
		$output = array();
		$tags   = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p' );

		foreach ( $tags as $tag ) : 
			$key = $this->slug . $i . $id . 'title' . $tag;

			$array = array (
				'key' => $key,
				'name' => $tag,
				'label' => strtoupper($tag),
				'sub_fields' => array (
					array (
						'key' => $key . 'font',
						'label' => 'Font',
						'name' => 'font',
						'type' => 'typography',
						'required' => 0,
						'show_font_familys' => 0,
						'font-family' => 'Roboto',
						'show_font_weight' => 1,
						'font-weight' => 400,
						'show_backup_font' => 0,
						'backup-font' => 'Arial, Helvetica, sans-serif',
						'show_text_align' => 0,
						'text_align' => 'left',
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
						'show_font_style' => 0,
						'font_style' => 'normal',
						'show_preview_text' => 0,
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => $key . 'media',
						'label' => 'Media queries',
						'name' => 'media',
						'type' => 'flexible_content',
						'required' => 0,
						'layout' => 'block',
						'button_label' => 'Add media query',
						'layouts' => $this->get_title_query_layouts( $tag, $id, $i )
					),
					array (
						'key' => $key . 'col',
						'label' => 'Font color',
						'name' => 'color',
						'type' => 'color_picker',
						'required' => 0,
						'wrapper' => array (
							'width' => 50
						)
					),
					array (
						'key' => $key . 'drops',
						'label' => 'H1 Dropshadow',
						'name' => 'shadow',
						'type' => 'true_false',
						'required' => 0,
						'message' => 'Enable Dropshadow',
						'default_value' => 0,
						'wrapper' => array (
							'width' => 50
						)
					)
				)
			);
			$output[] = $array;
		endforeach;

		return $output;
	}


	/**
	 * Return Titles 
	 * @return array
	 */
	protected function return_acf_titles_group( $i = '', $c = '', $a = 1 ) {

		$fc_options_array = array (
			'key' => $this->slug . '_style-' . $c . $a,
			'label' => 'Titles',
			'name' => $this->slug . '_style-' . $c . $a,
			'type' => 'repeater',
			'required' => 0,
			'collapsed' => '',
			'min' => 1,
			'max' => 1,
			'layout' => 'row',
			'button_label' => 'Add Row',
			'sub_fields' => array(
				array (
					'key' => $this->slug . $i . '_he56title_oneb',
					'label' => 'First title',
					'name' => 'first',
					'type' => 'tab',
					'required' => '',
					'placement' => 'top',
				),
				array (
					'key' => $this->slug . $i . '1fnt',
					'label' => 'Font',
					'name' => '1-font',
					'type' => 'typography',
					'required' => 0,
					'show_font_familys' => 1,
					'font-family' => 'Roboto',
					'show_font_weight' => 0,
					'font-weight' => 400,
					'show_backup_font' => 1,
					'backup-font' => 'Arial, Helvetica, sans-serif',
					'show_text_align' => 0,
					'text_align' => 'left',
					'show_text_direction' => 0,
					'direction' => 'ltr',
					'show_font_size' => 0,
					'font_size' => 20,
					'show_line_height' => 0,
					'line_height' => 25,
					'show_letter_spacing' => 0,
					'letter_spacing' => 0,
					'show_color_picker' => 0,
					'text_color' => '#000000',
					'show_font_style' => 0,
					'font_style' => 'normal',
					'show_preview_text' => 0,
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => $this->slug . $i . '_1-title-gr',
					'label' => 'Text rules',
					'name' => 'first_title_group',
					'type' => 'flexible_content',
					'required' => 0,
					'button_label' => 'Add group',
					'max' => 1,
					'display' => 'block',
					'layouts' => $this->get_tags_layouts( 1, $i )
				),

				array (
					'key' => $this->slug . $i . '_he56title_twob',
					'label' => 'Second title',
					'name' => 'second',
					'type' => 'tab',
					'required' => 0,
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => $this->slug . $i . '2fnt',
					'label' => 'Font',
					'name' => '2-font',
					'type' => 'typography',
					'required' => 0,
					'show_font_familys' => 1,
					'font-family' => 'Roboto',
					'show_font_weight' => 0,
					'font-weight' => 400,
					'show_backup_font' => 1,
					'backup-font' => 'Arial, Helvetica, sans-serif',
					'show_text_align' => 0,
					'text_align' => 'left',
					'show_text_direction' => 0,
					'direction' => 'ltr',
					'show_font_size' => 0,
					'font_size' => 20,
					'show_line_height' => 0,
					'line_height' => 25,
					'show_letter_spacing' => 0,
					'letter_spacing' => 0,
					'show_color_picker' => 0,
					'text_color' => '#000000',
					'show_font_style' => 0,
					'font_style' => 'normal',
					'show_preview_text' => 0,
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => $this->slug . $i . '_2-title-gr',
					'label' => 'Text rules',
					'name' => 'second_title_group',
					'type' => 'flexible_content',
					'required' => 0,
					'button_label' => 'Add group',
					'max' => 1,
					'display' => 'block',
					'layouts' => $this->get_tags_layouts( 2, $i )
				),

				array (
					'key' => $this->slug . $i . '_he56title_threeb',
					'label' => 'Third title',
					'name' => 'Third',
					'type' => 'tab',
					'required' => 0,
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => $this->slug . $i . '3fnt',
					'label' => 'Font',
					'name' => '3-font',
					'type' => 'typography',
					'required' => 0,
					'show_font_familys' => 1,
					'font-family' => 'Roboto',
					'show_font_weight' => 0,
					'font-weight' => 400,
					'show_backup_font' => 1,
					'backup-font' => 'Arial, Helvetica, sans-serif',
					'show_text_align' => 0,
					'text_align' => 'left',
					'show_text_direction' => 0,
					'direction' => 'ltr',
					'show_font_size' => 0,
					'font_size' => 20,
					'show_line_height' => 0,
					'line_height' => 25,
					'show_letter_spacing' => 0,
					'letter_spacing' => 0,
					'show_color_picker' => 0,
					'text_color' => '#000000',
					'show_font_style' => 0,
					'font_style' => 'normal',
					'show_preview_text' => 0,
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => $this->slug . $i . '_3-title-gr',
					'label' => 'Text rules',
					'name' => 'third_title_group',
					'type' => 'flexible_content',
					'required' => 0,
					'button_label' => 'Add group',
					'max' => 1,
					'display' => 'block',
					'layouts' => $this->get_tags_layouts( 3, $i )
				),
			),
		);	

		return $fc_options_array;

	}


	/**
	 * Return Button 
	 * @return array
	 */
	protected function return_acf_button_group( $i = '', $c = '', $a = 1 ) {

		$fc_options_array = array (
			'key' => $this->slug . '_style-' . $c . $a,
			'label' => 'Button',
			'name' => $this->slug . '_style-' . $c . $a,
			'type' => 'repeater',
			'required' => 0,
			'collapsed' => '',
			'min' => 1,
			'max' => 1,
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => $this->get_button_layouts( $i, $a . $c ),
		);	

		return $fc_options_array;

	}


	/**
	 * Return search 
	 * @return array
	 */
	protected function return_acf_search_group( $i = '', $c = '', $a = 1 ) {
		$key = $this->slug . $i . 'sb';

		$fc_options_array = array (
			'key' => $this->slug . '_style-' . $c . $a,
			'label' => 'Searchbox',
			'name' => $this->slug . '_style-' . $c . $a,
			'type' => 'repeater',
			'required' => 0,
			'collapsed' => '',
			'min' => 1,
			'max' => 1,
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => array(
				array (
					'key' => $key . 'font',
					'label' => 'Field font',
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
					'text_align' => 'center',
					'show_text_direction' => 0,
					'direction' => 'ltr',
					'show_font_size' => 1,
					'font_size' => 16,
					'show_line_height' => 1,
					'line_height' => 24,
					'show_letter_spacing' => 1,
					'letter_spacing' => 0,
					'show_color_picker' => 0,
					'text_color' => '#fff',
					'show_font_style' => 1,
					'font_style' => 'normal',
					'show_preview_text' => 0
				),
				array (
					'key' => $key . 'border',
					'label' => 'Field border color',
					'name' => 'border-color',
					'type' => 'rgba_color',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'rgba' => 'rgba(228,228,228,1)',
					'return_value' => 0,
					'ext_value' => array (
					),
					'wrapper' => array (
						'width' => '25'
					)
				),
				array (
					'key' => $key . 'bg',
					'label' => 'Background color',
					'name' => 'background',
					'type' => 'rgba_color',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'rgba' => 'rgba(225,225,225,1)',
					'return_value' => 0,
					'ext_value' => array (
					),
					'wrapper' => array (
						'width' => '25'
					)
				),
				array (
					'key' => $key . 'text-color',
					'label' => 'Text color',
					'name' => 'text-color',
					'type' => 'rgba_color',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'rgba' => 'rgba(0,0,0,1)',
					'return_value' => 0,
					'ext_value' => array (
					),
					'wrapper' => array (
						'width' => '25'
					)
				),
				array (
					'key' => $key . 'psh',
					'label' => 'Placeholder color',
					'name' => 'placeholder',
					'type' => 'rgba_color',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'rgba' => 'rgba(0,0,0,1)',
					'return_value' => 0,
					'ext_value' => array (
					),
					'wrapper' => array (
						'width' => '25'
					)
				),

				array (
					'key' => $key . 'button',
					'label' => 'Button',
					'name' => 'button',
					'type' => 'repeater',
					'required' => 0,
					'collapsed' => '',
					'min' => 1,
					'max' => 1,
					'layout' => 'block',
					'button_label' => 'Add Row',
					'sub_fields' => $this->get_button_layouts( $i, '-' ),
				),

				array (
					'key' => $key . 'base',
					'label' => 'Base color',
					'name' => 'base-color',
					'type' => 'rgba_color',
					'instructions' => 'Icons and calendar elements',
					'required' => 0,
					'wrapper' => array(
						'width' => '50'
					)
				),
				array (
					'key' => $key . 'bgcol',
					'label' => 'Section background',
					'name' => 'background-color',
					'type' => 'rgba_color',
					'required' => 0,
					'wrapper' => array(
						'width' => '50'
					)
				),
			),
		);	

		return $fc_options_array;

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
			$rows[] = $this->return_acf_titles_group( $i, $c, 1 );
			$rows[] = $this->return_acf_button_group( $i, $c, 2 );
			$rows[] = $this->return_acf_search_group( $i, $c, 3 );
		endfor;

		return $rows;
	}
	
}

new HeroArea( 'Hero Area' );

?>