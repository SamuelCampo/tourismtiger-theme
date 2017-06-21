<?php
/**
 * View: Hero Area background
 *
 * {$is_background}
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="hero-area--bg">
	<div class="hero-area--bg__wrap">
		<?php 
		/**
		 * Return slider of images or single image
		 */
		if ( $is_background['image'] ) : 

			/**
			 * Loop slider images
			 */
			foreach ( $is_background['image'] as $image ) :
				?>

				<div class="hero-area--bg__slide">
					<?=$image;?>
				</div>

				<?php
			endforeach;

		/**
		 * Return video
		 */
		elseif ( $is_background['video'] ) : 
			?>

			<div class="hero-area--bg__slide">				
				<video 
				    autoplay 
				    loop 
				    muted 
				    poster="<?=$is_background['video']['poster'];?>" 
				    class="pc_hero-area__video">

					<?=$is_background['video']['sources'];?>
				</video>
			</div>

			<?php
		endif;
		?>
	</div>
</div>