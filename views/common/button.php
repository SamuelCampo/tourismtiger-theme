<?php
/**
 * View: Button 
 *
 * $d       (array) 
 * $classes (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?> class="sidebar--button">
	<a <?=$d['href'];?> class="<?=$classes;?>"><?=$d['label'];?></a>
</div>