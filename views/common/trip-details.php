<?php
/**
 * View: Trip details
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<h6 class="trip-details__label"><?=$d['icon'];?> <?=$d['label'];?></h6>
	<p class="trip-details__detail"><?=$d['detail'];?> <?=$d['link-label'];?></p>

	<?php
	/**
	 * Accordion
	 */
	if ( $d['hidden-content'] ) : 
		?>

		<div class="trip-details__hidden wysiwyg"><?=$d['hidden-content'];?></div>

		<?php
	endif;
	?>
</div>