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
		while ( have_rows( 'components' ) ) :
			the_row();
			get_template_part( "template-parts/hero-area/$component" ); 
		endwhile;
	endif;
	?>
</div>