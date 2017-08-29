<?php
/**
 * View: Banner
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<div class="banner--box wysiwyg">
		
		<?php 
		/**
		 * Loop components of the banner
		 */ 
		while ( have_rows('content') ) :
			the_row(); 
			$component = get_row_layout();

			get_template_part( "template-parts/common/$component" );
		endwhile;
		?>

	</div>
</div>