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
		$d['open']  = $icon['url'] ? "a href='{$icon['url']}'" : 'div'; 
		$d['close'] = $icon['url'] ? "a" : 'div'; 
		?>

		<<?=$d['open'];?> class="icons-list--item">
			<div class="icons-list--item__icon">
				<?=$icon['icon'];?>
			</div>

			<div class="icons-list--item__text" <?=$icon['font-size'];?>><?=$icon['text'];?></div>
		</<?=$d['close'];?>>
		
		<?php
	endforeach;
	?>

</div>