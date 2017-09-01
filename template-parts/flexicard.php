<?php 
/**
 * Flexi card
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

/**
 * Check whether Content card has any rows
 */
if ( have_rows( 'components' ) ) :

	/**
	 * Loop each content card sub-layout
	 */
	while ( have_rows( 'components' ) ) :
		$the_contentcard_row = the_row();
		$layout              = get_row_layout(); 

		/**
		 * Include layout model template
		 */
		get_template_part( "template-parts/flexicard/{$layout}" );
	endwhile;

endif;