<?php
/**
 * View: Icons list
 *
 * $d       (array) 
 * $class   (string)
 * $attrs   (string)
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="<?=$classes;?>" <?=$attrs;?>>
	
	<?php
	/**
	  * Loop each icon though template
	  */
	foreach ( $d['icons'] as $icon ) :
		?>

		<div class="icons-list--item">
			<div class="icons-list--item__icon">
				<i class="fa <?=$icon['icon'];?>" <?=$icon['size'];?>></i>
			</div>

			<div class="icons-list--item__text"><?=$icon['text'];?></div>
		</div>
		
		<?php
	endforeach;
	?>

</div>