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
							src="//borasite2.lightningbasehosted.com/wp-content/uploads/2016/12/papers_co-ml63-mountain-high-sky-nature-rocky-22-wallpaper-1-1920x650.jpg" 
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

			<div class="hero-area--overlay"></div>

			<div class="hero-area--container">
				<div class="hero-area--container__inner <?=$container_classes;?>">
					<div class="hero-area--content wysiwyg">
						<h1>Heroarea title</h1>
						<p>Wellcome to Hero area</p>
					</div>
				</div>
			</div>

			<div class="hero-area--divider">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/temperary/divider.png" alt="" class="hero-area--divider__image" />
			</div>

			<?php 
			/**
			 * Includer arrow
			 */
			if ( $is_arrow ) 
				include THEME_VIEWS . 'core/hero-area-arrow.php';
			?>
		</div>
	</section>

	<div class="hero-area--search">
		
	</div>
</div>