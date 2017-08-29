<?php
/**
 * View: Hero Area
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div id="hero-area" <?=$attrs;?>>
	<?php 
	/**
	 * Loop slides (components)
	 */
	if ( have_rows( 'components' ) ) :
		?>

		<div class="hero-area--wrapper">

			<?php
			/**
			 * Loop banners
			 */
			while ( have_rows( 'components' ) ) :
				the_row();
				$component = get_row_layout();

				get_template_part( "template-parts/hero-area/$component" ); 
			endwhile;
			?>

		</div>

		<?php
	endif;
	?>
</div>