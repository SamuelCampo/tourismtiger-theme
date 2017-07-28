<?php 
/**
 * Grabbing data of Content card Map field
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array();
$d['content']         = '';

$d['id']              = get_sub_field('id');
$d['shape']           = get_sub_field('shape');

// Url settings
$d['url']             = get_sub_field('url');
$d['target']          = get_sub_field('target') ? 'target="_blank"' : '';

// Get image view
$d['image'] = wp_get_attachment_image( 
	$d['id'], 
	'full', 
	true, 
	array(
		'class' => "shape_{$d['shape']}"
	)
);

/**
 * Generate Content
 */
$d['content'] .= $d['url'] ? "<a href='{$d['url']}' {$d['target']}>" : '';
$d['content'] .= "<a href='{$d['url']}' {$d['target']}>";
$d['content'] .= $d['url'] ? '</a>' : '';