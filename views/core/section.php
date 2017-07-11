<?php
/**
 * View: Section
 *
 * @var $the_section_row - variable that contains section's subfields data 
 * @var $classes
 * @var $attrs
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="<?=$classes;?>" <?=$attrs;?>>
	
	<?php 
	/**
	 * Run functions after open tag.
	 * For exampe it can be used to video background 
	 * and border divider.
	 *
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_section_tag', $the_section_row ); 
	remove_all_actions( 'after_open_section_tag', 10);


	/**
	 * Run functions before close tag.
	 * For exampe it can be used to border divider
	 *
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'before_close_section_tag', $the_section_row );
	remove_all_actions( 'before_close_section_tag', 10);
	?>

</div>