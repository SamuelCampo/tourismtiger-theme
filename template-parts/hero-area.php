<?php 
/**
 * Hero area
 *
 * Here we get all nesesarily variables 
 * of Hero Area component and include Hero Area template view
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows( 'hero_area' ) ) : 
	while ( have_rows( 'hero_area' ) ) : 
		$the_hero_area = the_row();

		$d           = array();
		$classes     = array();
		$attrs       = array();

		$classes[]   = 'hero-area';

		$attrs[]     = count( $classes ) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
		$attrs       = count( $attrs ) > 0 ? generate_classlist( $attrs ) : '';

		/**
		 * Get section view
		 */
		include THEME_VIEWS . 'core/hero-area.php';
	endwhile;
endif;
?>