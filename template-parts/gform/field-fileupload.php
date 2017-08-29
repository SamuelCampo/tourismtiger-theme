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
$attr[]  = 'type="file"';

// Additional data
$attr[]  = $field['maxLength'] ? 'data-length="' . $field['maxLength'] . '"' : '';
$attr[]  = $field['defaltValue'] ? 'value="' . $field['defaltValue'] . '" ' : '';
$attr[]  = $field['multipleFiles'] ? "multiple" : '';

$attr   = generate_classlist($attr);

echo "<input {$attr} />";