<?php
/**
 * View: Icons list
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div <?=$attrs;?>>
	
	<?php
	/**
	  * Loop each icon though template
	  */
	foreach ( $d['icons'] as $icon ) :
		$d['open']  = $icon['url'] ? "a href='{$icon['url']}'" : 'div'; 
		$d['close'] = $icon['url'] ? "a" : 'div'; 
		?>

		<<?=$d['open'];?> class="icons-list--item">
			<div class="icons-list--item__icon"><?=$icon['icon'];?></div>
			<div class="icons-list--item__text" <?=$icon['attrs'];?>><?=$icon['text'];?></div>
		</<?=$d['close'];?>>
		
		<?php
	endforeach;
	?>

</div>