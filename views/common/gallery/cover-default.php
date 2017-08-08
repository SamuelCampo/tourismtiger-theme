<?php
/**
 * View: Default gallery cover
 *
 * $iframe  (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="gallery-slider--loop">
	
	<?php 
	/**
	 * Loop all images from gallery
	 */
	foreach ( $d['gallery'] as $image ) : 
		?>

		<div class="gallery-slider--loop__image">
			<img data-lazy="<?=$image['sizes']['850-size'];?>" alt="<?=$image['alt'];?>" />
		</div>

		<?php
	endforeach;
	?>
</div>