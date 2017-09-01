<?php
/**
 * View: Column
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>

	<?php 
	/**
	 * Run functions after open tag.
	 * 
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_column_tag' ); 
	remove_all_actions( 'after_open_column_tag', 10);


	/**
	 * Echo component.
	 */
	get_template_part( "template-parts/$layout", 'column' );


	/**
	 * Run functions after open tag.
	 *
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_column_tag' ); 
	remove_all_actions( 'after_open_column_tag', 10);
	?>

</div>