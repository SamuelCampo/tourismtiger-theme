<?php
/**
 * View: Row
 *
 * @var $the_row - variable that contains row's subfields data 
 * @var $classes
 * @var $attrs
 * @var $type
 * @var $row_id
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="<?=$classes;?>" <?=$attrs;?>>

	<?php 
	/**
	 * Run functions after open tag.
	 * 
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_row_tag', $the_row, $row_id ); 
	remove_all_actions( 'after_open_row_tag', 10);


	/**
	 * Get row type view
	 */
	include THEME_VIEWS . 'core/row/' . $type . '.php';


	/**
	 * Run functions after open tag.
	 *
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_row_tag', $the_row, $row_id ); 
	remove_all_actions( 'after_open_row_tag', 10);
	?>

</div>