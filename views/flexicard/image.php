<?php
/**
 * View: Image card
 *
 * $d       (array) 
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	<div class="flexicard--image__thumb"><?=$d['image'];?></div>
	
	<?php
	/**
	 * Get additional layouts 
	 */
	if ( $d['layouts'] ) 
		get_template_part( 'template-parts/flexicard/layout' );
	?>
</div>