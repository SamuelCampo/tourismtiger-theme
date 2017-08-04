<?php 
/**
 * Product: Primary area's Section
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows( 'components' ) ) :
	while ( have_rows( 'components' ) ) :
		$the_component = the_row();
		$layout        = get_row_layout();

		get_template_part( "template-parts/product/{$layout}" );
	endwhile;
endif;
