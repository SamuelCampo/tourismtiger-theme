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

$d['image']           = get_sub_field('image');
$d['shape']           = get_sub_field('shape');
$d['width']           = get_sub_field('width');

// Url settings
$d['url']             = get_sub_field('url');
$d['target']          = get_sub_field('target') ? 'target="_blank"' : '';

// Get image view
$d['start'] = $d['url'] ? "a href='{$d['url']}' {$d['target']}" : 'div';
$d['end']   = $d['url'] ? "a" : 'div';

echo "<{$d['start']} class='image-wrap shape_{$d['shape']} width_{$d['width']}'>";
echo wp_get_attachment_image( 
	$d['image'], 
	'full', 
	true
);
echo "</{$d['end']}>";