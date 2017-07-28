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
	 * Get row type view
	 */
	get_template_part( 'template-parts/row', $type );
	?>

</div>