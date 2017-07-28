<?php
/**
 * View: WYSIWYG
 *
 * $d       (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="image-box">
	<?="<{$d['start']} class='image-wrap shape_{$d['shape']} width_{$d['width']}' {$attrs}>";?>
	<?php 
	/**
	 * Return image element
	 */
	echo wp_get_attachment_image( 
		$d['image'], 
		'full', 
		true
	); ?>
	<?="</{$d['end']}>";?>
</div>