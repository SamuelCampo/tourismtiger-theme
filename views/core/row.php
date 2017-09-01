<?php
/**
 * View: Row
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>

	<?php 
	/**
	 * Get row type view
	 */
	get_template_part( "template-parts/$type", 'row' );
	?>

</div>