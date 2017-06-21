<?php
/**
 * View: Hero Area
 *
 * {$core_classes}
 * {$layout_classes}
 * {$container_classes}
 * {$is_arrow}
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div id="hero-area" class="hero-area <?=$core_classes;?>">
	<section class="hero-area--banner">
		<div class="hero-area--banner__layout <?=$layout_classes;?>">
			<div class="hero-area--bg">
				<div class="hero-area--bg__wrap">
					<div class="hero-area--bg__slide">
						<img 
							class="hero-area--bg__image"
							src="//tofinopaddlesurf.com/wp-content/uploads/2017/05/JK__9371-e1497370264629-1920x650.jpg" 
							alt="" />
					</div>

					<div class="hero-area--bg__slide">
						<img 
							class="hero-area--bg__image"
							src="//tofinopaddlesurf.com/wp-content/uploads/2017/05/JK__9371-e1497370264629-1920x650.jpg" 
							alt="" />
					</div>
				</div>
			</div>

			<?php 
			/**
			 * Include overlay
			 */
			if ( $is_overlay ) 
				include THEME_VIEWS . 'core/hero-area/overlay.php';
			?>

			<div class="hero-area--container">
				<div class="hero-area--container__inner <?=$container_classes;?>">
					<div class="hero-area--content wysiwyg">
						<h1>Heroarea title</h1>
						<p>Wellcome to Hero area</p>
					</div>
				</div>
			</div>

			<?php 
			/**
			 * Include divider
			 */
			if ( $is_border_divider ) 
				include THEME_VIEWS . 'core/hero-area/divider.php';

			/**
			 * Include arrow
			 */
			if ( $is_arrow ) 
				include THEME_VIEWS . 'core/hero-area/arrow.php';
			?>
		</div>
	</section>

	<div class="hero-area--search">
		
	</div>
</div>