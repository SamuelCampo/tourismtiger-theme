<?php
/**
 * Sidebar of Propduct page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

/**
 * Show sidebar just for desktop devices
 */
if ( have_rows( 'widgets' ) && !wp_is_mobile() ) :
	?>

	<div class="sidebar">

		<?php
		/**
		 * Loop widgets
		 */
		while ( have_rows( 'widgets' ) ) :
			$the_widget = the_row();
			$layout     = get_row_layout();
			?>
				
			<div class="sidebar__widget card-wrapper wysiwyg">

				<?php
				/**
				 * Widget model
				 */
				get_template_part( "template-parts/{$layout}" );
				?>

			</div>

			<?php
		endwhile;
		?>

	</div>

	<?php
endif;