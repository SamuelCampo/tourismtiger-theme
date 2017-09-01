<?php
/**
 * View: Section
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	
	<?php 
	/**
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_section_tag', $the_section_row, $section_id ); 
	remove_all_actions( 'after_open_section_tag', 10);


	/**
	 * Get row model data and loop views.
	 *
	 * Now, let's check are there any rows in database.
	 */		
	if ( have_rows( 'rows' ) ) :
		$the_section_rows_id = 0; // rows counter
		?>

		<div id="<?=$row_id;?>" class="rows" <?=$row_attrs;?>>

			<?php
			/**
			 * Loop rows
			 */
			while ( have_rows( 'rows' ) ) :
				$the_row = the_row();
				$layout  = get_row_layout();
				$the_section_rows_id++;
				
				/**
				 * Include the row, 
				 * also in can be the template of row.
				 */
				get_template_part( "template-parts/$layout" );

				/**
				 * Stop loop 
				 * if AJAX rows loading
				 * is activated
				 */
				if ( $the_section_rows_id === $the_section_rows_limit ) 
					break;
			endwhile; 
			?>

		</div>

		<?php
	endif;

	/**
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'before_close_section_tag', $the_section_row, $section_id );
	remove_all_actions( 'before_close_section_tag', 10);
	?>

</div>