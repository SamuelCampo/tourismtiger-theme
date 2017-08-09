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
		echo "<h4 class='flexicard--title'>{$d['title']}</h4>";

	if ( $d['description'] ) 
		echo "<p class='flexicard--description'>{$d['description']}</p>";

	if ( $d['price'] ) 
		echo "<div class='flexicard--price'>{$d['price']}</div>";

	if ( $d['label'] ) 
		echo "<a href='#.' class='flexicard--label button'>{$d['label']}</a>";
	?>
</div>