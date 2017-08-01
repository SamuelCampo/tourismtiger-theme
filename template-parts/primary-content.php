<?php 
/**
 * Primnary content
 *
 * Here we get all nesesarily variables 
 * of Primary Content component and include Primary Content template view
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

if ( have_rows( 'primary-content' ) ) :
	$section_count = count( get_field('primary-content') );
	$section_lack  = $section_count - 1;
	$section_number = 0;
	?>

	<div 
		id="primary-content"
		class="primary-content__wrapper"
		data-status="1"
		data-field="primary-content"
		data-offset="5"
		data-lack="<?=$section_lack;?>"
		data-method="get_section_ajax">

		<?php
		while ( have_rows( 'primary-content' ) ) :
			$the_section_row = the_row();
			$section_id      = 'pr-co';
			$section_number++;

			/**
			 * Get section template part
			 */
			include get_template_directory() . '/template-parts/' . get_row_layout() . '.php';

			break;
		endwhile;
		?>

	</div>

	<?php
endif;

?>