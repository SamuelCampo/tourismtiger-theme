<?php
/**
 * Sidebar of propduct page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package TourismTiger_Theme
 */

if ( have_rows( 'widgets' ) ) :
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