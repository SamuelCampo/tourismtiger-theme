<?php
/**
 * View: Gallery
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<div class="gallery-slider__cover">

		<?php
		/**
		 * Include cover component according to 
		 * current gallery type
		 */
		include THEME_VIEWS . "common/gallery/cover-{$d['cover']}.php";
		?>

	</div>

	<?php
	/**
	 * Include additional slider 
	 * if it's required
	 */
	if ( $d['additional'] ) : 
		?>

		<div class="gallery-slider--additional">

			<?php
			/**
			 * Include cover component according to 
			 * current gallery type
			 */
			include THEME_VIEWS . "common/gallery/additional-{$d['additional']}.php";
			?>

		</div>

		<?php
	endif;
	?>
</div>