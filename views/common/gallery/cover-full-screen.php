<?php
/**
 * View: Gallery cover for fullscreen type 
 *
 * $iframe  (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="gallery-slider--current">
	<div class="gallery-slider--current__image">
		<?php echo wp_get_attachment_image( $d['gallery'][0]['ID'], '850-size' ); ?>
	</div>
</div>

<?php 
/**
 * Panel over a cuurent image
 */
if ( $d['label'] ) : 
	?>

	<div class="gallery-slider--panel">
		<span class="gallery-slider--panel__btn"><?=$d['label'];?></span>
	</div>

	<?php
endif;
?>