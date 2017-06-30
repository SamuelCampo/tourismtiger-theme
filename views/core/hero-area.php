<?php
/**
 * View: Hero Area
 *
 * {$core_classes}
 * {$layout_classes}
 * {$container_classes}
 * {$hero_order}
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div id="hero-area" class="<?=$core_classes;?>" <?=$core_attrs;?>>
	<section class="hero-area--banner">
		<div class="hero-area--banner__layout <?=$layout_classes;?>">

			<?php 
			/**
			 * Include banner's components
			 */
			foreach ( $hero_order as $name => $bool )
				if ( $bool ) 
					include THEME_VIEWS . "core/hero-area/$name.php";
			?>

		</div>
	</section>

	<?php 
	/**
	 * Include searchbox
	 */
	if ( $is_searchbox ) 
		include THEME_VIEWS . "core/hero-area/searchbox.php";


	/**
	 * Include additional panel on mobile devices
	 */
	if ( $is_panel ) 
		include THEME_VIEWS . "core/hero-area/panel.php";
	?>
</div>