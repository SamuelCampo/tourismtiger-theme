<?php 
/**
 * gForm component: Field textarea
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field = $GLOBALS['field'];

$attr    = array();

// General
$attr[]  = "name='input_{$field['id']}'";
$attr[]  = "id='input_{$field['formId']}_{$field['id']}'";

// Additional data
$attr[]  = $field['maxLength'] ? 'data-length="' . $field['maxLength'] . '"' : '';
$attr[]  = $field['placeholder'] ? "placeholder='{$field['placeholder']}'" : '';

$attr   = generate_classlist($attr);

echo "<textarea " . $attr . ">{$field['defaltValue']}</textarea>";