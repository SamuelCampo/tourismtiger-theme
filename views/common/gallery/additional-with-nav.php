<?php
/**
 * View: Gallery additional panel for with-nav type 
 *
 * $iframe  (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="gallery-slider--additional__loop">

	<?php 
	/**
	 * Loop all images from gallery
	 */
	foreach ( $d['gallery'] as $image ) : 
		?>

		<div class="gallery-slider--additional__item">
			<img data-lazy="<?=$image['sizes']['350-size'];?>" alt="<?=$image['alt'];?>" />
		</div>

		<?php
	endforeach;
	?>
	
</div>