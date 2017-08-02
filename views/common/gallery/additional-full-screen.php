<?php
/**
 * View: Gallery additional panel for fullscreen type 
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
			<div class="gallery-slider--additional__image">
				<img data-lazy="<?=$image['sizes']['1450-size'];?>" alt="<?=$image['alt'];?>" />
			</div>
		</div>

		<?php
	endforeach;
	?>
	
</div>