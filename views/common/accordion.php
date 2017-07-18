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

<div class="<?=$classes;?>" <?=$attrs;?>>
	<button class="accordion--head">
		<?php 
		// Head Content
		echo $d['label'] ? "<div class='accordion--label'>{$d['label']}</div>" : ''; 
		echo $d['open'] ? "<div class='accordion--open'>{$d['open']}</div>" : ''; 
		echo $d['close'] ? "<div class='accordion--close'>{$d['close']}</div>" : ''; 
		 ?>
	</button>
	
	<div class="accordion--body wysiwyg">
		<?php 
		// WYSIWYG Content
		echo $d['wysiwyg'] ? "<div class='accordion--wysiwyg'>{$d['wysiwyg']}</div>" : '';  ?>
	</div>
</div>