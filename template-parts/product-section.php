<?php 
/**
 * Product: Section
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows( 'components' ) ) :
	?>

	<div class="primary-area__section card-wrapper">
		
		<?php 
		while ( have_rows( 'components' ) ) :
			$the_component = the_row();
			$layout        = get_row_layout();

			echo "<!-- {$layout} -->";

			//get_template_part( "template-parts/product/{$layout}" );
		endwhile;
		?>

	</div>

	<?php
endif;
