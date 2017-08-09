<?php
/**
 * View: Content of flexicard
 *
 * $d       (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="<?=$classes;?>">
	<?php 
	if ( $d['title'] ) 
		echo "<div class='flexicard--title'>{$d['title']}</div>";

	if ( $d['description'] ) 
		echo "<div class='flexicard--description'>{$d['description']}</div>";

	if ( $d['price'] ) 
		echo "<div class='flexicard--price'>{$d['price']}</div>";

	if ( $d['label'] ) 
		echo "<div class='flexicard--label'>{$d['label']}</div>";
	?>
</div>