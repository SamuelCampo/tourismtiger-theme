<?php 
/**
 * gForm component: Field textarea
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field   = $GLOBALS['field'];

$attr    = array();

// General
$attr[]  = "name='input_{$field['id']}'";
$attr[]  = "id='input_{$field['formId']}_{$field['id']}'";
$attr[]  = $field['type'] == 'multiselect' ? 'multiple' : '';

$attr    = generate_classlist($attr);

echo "<select {$attr}>";

// Loop opitopns
foreach ( $field['choices'] as $option ) :
	$selected = $option['isSelected'] ? 'selected' : '';
	echo "<option class='{$option['value']}' {$selected}>{$option['text']}</option>";
endforeach;

echo "</select>";