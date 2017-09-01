<?php
/**
 * View: Gallery cover for fullscreen type =
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<a href="javascript:" class="gallery-slider--current">
	<div class="gallery-slider--current__image">
		<?php echo wp_get_attachment_image( $d['gallery'][0]['ID'], '850-size' ); ?>
	</div>
</a>

<?php 
/**
 * Panel over a current image
 */
if ( $d['label'] ) : 
	?>

	<div class="gallery-slider--panel">
		<span class="gallery-slider--panel__btn"><?=$d['label'];?></span>
	</div>

	<?php
endif;
?>