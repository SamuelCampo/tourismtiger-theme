<?php 
/**
 * gForm component: Multiplied
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field     = $GLOBALS['field'];

$attr      = array();
$classes   = array();

$classes[] = 'gform-group';
$classes[] = $field['cssClass'] ? $field['cssClass'] : '';

// Additional data
$attr[]    = count( $classes ) > 0 ? 'class="' . generate_classlist($classes) . '"' : '';
$attr[]    = $field['label'] ? 'data-label="' . $field['label'] . '"' : '';
$attr      = generate_classlist($attr);

// Check whether 
// this is time type of subfield 
// and this is 12h time firmat
$time_12   = $field['timeFormat'] == '12';

/**
 * Open grop's wrapper tag
 */
echo "<div {$attr}>";

/**
 * Loop each sub-fields 
 * but handle just visible items
 */
foreach ( $field['inputs'] as $input ) : 
	if ( $input['isHidden'] != '1' ) : 

		// Common
		$id                  = explode('.', $input['id'])[1];
		$input['label']      = $input['customLabel'] ? $input['customLabel'] : $input['label'];
		$attr                = array();
		$classes             = array();
		$classes[]           = 'gform-group--field';

		// Check whether subfield is selector type
		$choices             = $input['choices'];
		// Check whether subfield is AM/PM selector
		$input_12            = $input['label'] == 'AM/PM';

		// Choices select field
		if ( $choices || $input_12 ):
			$classes[]      = 'type_select';

			// Additional data
			$attr[]         = count( $classes ) > 0 ? 'class="' . generate_classlist($classes) . '"' : '';
			$attr[]         = "name='input_{$field['id']}_{$id}'";
			$attr[]         = $input['label'] ? "data-label='{$input['label']}'" : '';
			$attr[]         = $input['placeholder'] ? "placeholder='{$input['placeholder']}'" : '';
			$attr           = generate_classlist($attr);

			// If timeformat 12 sets array
			if ( $time_12 )
				$choices = array ( 
					array (
						'value'      => 'AM',
						'text'       => 'AM',
						'isSelected' => true
					), 
					array (
						'value' => 'PM',
						'text'  => 'PM'
					) 
				);
			else 
				break;

			// Open select and write down selects
			echo "<select {$attr}>";

				// Loop opitopns
				foreach ( $choices as $id => $choice ) :
					$selected = $choice['isSelected'] ? 'selected' : '';
					echo "<option class='{$choice['value']}' {$selected}>{$choice['text']}</option>";
				endforeach;

			echo "</select>";

		// Default: just input
		else :
			$classes[]       = 'type_input';

			// Additional data
			$attr[]          = count( $classes ) > 0 ? 'class="' . generate_classlist($classes) . '"' : '';
			$attr[]          = "name='input_{$field['id']}_{$id}'";
			$attr[]          = 'type="text"';
			$attr[]          = $input['label'] ? "data-label='{$input['label']}'" : '';
			$attr[]          = $input['placeholder'] ? "placeholder='{$input['placeholder']}'" : '';
			$attr            = generate_classlist($attr);
			?>

			<div class="gform-group__wrap">
				<input <?=$attr;?> />
				<label class="gform-group--label"><?=$input['label'];?></label>
			</div>

			<?php
		endif;
	endif;
endforeach;

echo '</div>';