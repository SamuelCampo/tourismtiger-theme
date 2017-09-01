<?php
/**
 * View: Accordion
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<a href="javascript:" class="accordion--head">
		<h6 class='accordion--head__label'><?=$d['label'];?></h6>
		<div class='accordion--head__open'><?=$d['open'];?></div>
		<div class='accordion--head__close hidden'><?=$d['close'];?></div>
	</a>
	
	<div class="accordion--body wysiwyg">
		<div class='accordion--wysiwyg wysiwyg'><?=$d['wysiwyg'];?></div>
	</div>
</div>