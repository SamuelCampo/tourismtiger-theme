<?php
/**
 * View: Testmonial
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<div class="testimonials--item__meta layout_vertical">
		<div class="testimonials--item__image"><?=$d['photo'];?></div>
		<div class="teatimonials--item__author">
			<div class="testimonials--item__name"><?=$d['name'];?></div>
			<div class="testimonials--item__additional"><?=$d['additional'];?></div>
		</div>
	</div>
	
	<div class="testimonials--item__body text-align_center wysiwyg"><?=$d['shortly'];?></div>
</div>