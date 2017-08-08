<?php
/**
 * View: Testmonial
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
	<div class="testimonials--item__meta layout_vertical">
		<div class="testimonials--item__image"><?=$d['photo'];?></div>
		<div class="teatimonials--item__author">
			<div class="testimonials--item__name"><?=$d['name'];?></div>
			<div class="testimonials--item__additional"><?=$d['additional'];?></div>
		</div>
	</div>
	<div class="testimonials--item__body text-align_center"><?=$d['shortly'];?></div>
</div>