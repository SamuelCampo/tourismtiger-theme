<?php
/**
 * View: Button group
 *
 * $d       (array) 
 * $class   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs_wrap;?> class="button-group">
	<?=$d['before'];?>
	<a <?=$attrs;?> class="<?=$classes;?>"><?=$d['label'];?></a>
</div>