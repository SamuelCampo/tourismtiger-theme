<?php
/**
 * View: Image card
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
	<div class="image-card__thumb"><?=$d['image'];?></div>
	<div class="image-card__content wysiwyg"><?=$d['content'];?></div>
</div>