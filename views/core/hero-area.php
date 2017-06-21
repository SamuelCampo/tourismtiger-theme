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

<div id="hero-area" class="hero-area <?=$core_classes;?>">
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

	<div class="hero-area--search">
		
	</div>
</div>