<?php
/**
 * View: Content of flexicard
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<?php 
	if ( $d['title'] ) 
		echo "<h5 class='flexicard--title'>{$d['title']}</h5>";

	if ( $d['description'] ) 
		echo "<p class='flexicard--description'>{$d['description']}</p>";

	if ( $d['price'] ) 
		echo "<div class='flexicard--price'>{$d['price']}</div>";

	if ( $d['label'] ) 
		echo "<a href='#.' class='flexicard--label button'>{$d['label']}</a>";
	?>
</div>