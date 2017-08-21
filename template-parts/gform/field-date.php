<?php 
/**
 * gForm component: Field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field = $GLOBALS['field'];

$attr    = array();

// General
$attr[]  = "name='input_{$field['id']}'";
$attr[]  = "id='input_{$field['formId']}_{$field['id']}'";
$attr[]  = 'type="text"';

// Additional data
$attr[]  = 'data-toggle="datepicker"';
$attr[]  = $field['maxLength'] ? 'data-length="' . $field['maxLength'] . '"' : '';
$attr[]  = $field['defaltValue'] ? 'value="' . $field['defaltValue'] . '" ' : '';
$attr[]  = $field['placeholder'] ? "placeholder='{$field['placeholder']}'" : '';

$attr   = generate_classlist($attr);

echo "<input " . $attr . " />";