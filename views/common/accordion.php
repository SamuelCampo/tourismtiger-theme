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
	<a href="javascript:" class="accordion--head">
		<?php 
		// Head Content
		echo $d['label'] ? "<div class='accordion--head__label'>{$d['label']}</div>" : ''; 
		echo $d['open'] ? "<div class='accordion--head__open'>{$d['open']}</div>" : ''; 
		echo $d['close'] ? "<div class='accordion--head__close hidden'>{$d['close']}</div>" : ''; 
		 ?>
	</a>
	
	<div class="accordion--body wysiwyg">
		<?php 
		// WYSIWYG Content
		echo $d['wysiwyg'] ? "<div class='accordion--wysiwyg'>{$d['wysiwyg']}</div>" : '';  ?>
	</div>
</div>