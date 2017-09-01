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
$attrs                = array();
$style                = array();

$d['image']           = get_sub_field('image');
$d['shape']           = get_sub_field('shape');
$d['width']           = get_sub_field('width');

// Url settings
$d['url']             = get_sub_field('url');
$d['target']          = get_sub_field('target') ? 'target="_blank"' : '';

// Get image view
$d['start'] = $d['url'] ? "a href='{$d['url']}' {$d['target']}" : 'div';
$d['end']   = $d['url'] ? "a" : 'div';

// margins
$style[]              = get_margins_attrs();

$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs                = generate_classlist( $attrs );

/**
 * Get section view
 */
if ( $d['image'] )
	include THEME_VIEWS . 'common/image.php';