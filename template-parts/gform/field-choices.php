<?php 
/**
 * gForm component: Field textarea
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field  = $GLOBALS['field'];

// Common
$count  = count($field['choices']);

echo '<ul class="gform-choices">';

// Loop each choice
for ( $id = 0; $id < $count; $id++ ) :
	$choice = $field['choices'][$id];
	$id_1   = $id + 1;
	$hash   = generate_random_string(6);
	$attr   = array();
	$attr[] = $field['type'] == 'radio' ? "name='input_{$field['id']}'" : "name='input_{$field['id']}_{$id_1}'";
	$attr[] = $field['type'] ? "type='{$field['type']}'" : '';
	$attr[] = $choice['label'] ? "data-label='{$choice['label']}'" : "data-label='{$field['label']}'";
	$attr[] = $choice['isSelected'] ? 'checked ' : '';
	$attr[] = "value='{$choice['value']}'";
	$attr[] = "id='choice-{$hash}'";
	$attr   = generate_classlist($attr);

	$label_attr   = array();
	$label_attr[] = 'class="gform-choices--label"';
	$label_attr[] = "for='choice-{$hash}'";
	$label_attr   = generate_classlist($label_attr);

	echo "<li class='gform-choices--item'><input {$attr} /><label {$label_attr}>{$choice['text']}</label></li>";
endfor;

// Additional variant
if ( $field['enableOtherChoice'] ) :
	$id++;
	$id_1   = $id + 1;

	$attr   = array();
	$attr[] = $field['type'] == 'radio' ? "name='input_{$field['id']}'" : "name='input_{$field['id']}_{$id_1}'";
	$attr[] = $field['type'] ? "type='{$field['type']}'" : '';
	$attr[] = 'data-more="1" ';
	$attr   = generate_classlist($attr);

	// text input attrs
	$more_attr   = array();
	$more_attr[] = 'class="gform-choices--item__more"';
	$more_attr[] = "data-field-label='{$field['label']}'";
	$more_attr[] = 'type="text"';
	$more_attr[] = 'style="display:none;"';
	$more_attr   = generate_classlist($more_attr);
	
	$li_items .= "<li class='gform-choices--item'><input {$attr} /><input {$more_attr} /></li>";
endif;

echo '</ul>';
