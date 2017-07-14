<?php
/**
 * View: Column
 *
 * @var $the_row - variable that contains row's subfields data 
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
	 * 
	 * After completing assigned functions 
	 * that acton will be cleaned up except 
	 * the functions under 'priority 10'
	 */
	do_action( 'after_open_column_tag' ); 
	remove_all_actions( 'after_open_column_tag', 10);


	/**
	 * Get column view
	 */
	$sizes = rand(200,500) . 'x' . rand(200,300);
	echo "<img src='https://placehold.it/{$sizes}' />";


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