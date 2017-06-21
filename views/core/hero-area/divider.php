<?php
/**
 * View: Hero Area Border divider
 *
 * {$is_border_divider}
 * {$border_divider_color}
 * {$border_divider_image}
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */
?>

<div class="hero-area--divider">

	<?php
	/**
	 * Put just image
	 */
	if ( $is_border_divider == 'image' ) :
		?>

		<img src="<?=$border_divider_image;?>" alt="" class="hero-area--divider__image" />

	<?php
	/**
	 * Set url into data-repeater=""
	 * Image will be placed via JS
	 */
	elseif ( $is_border_divider == 'repeater' ) :
		?>

		<div class="hero-area--divider__repeater" data-repeater="<?=$border_divider_image;?>"></div>

	<?php
	/**
	 * Set url into data-gradiend=""
	 * Color will be placed via JS
	 */
	elseif ( $is_border_divider == 'gradient' ) :
		?>

		<div class="hero-area--divider__gradient" data-gradient="<?=$border_divider_color;?>"></div>

		<?php
	endif;
	?>

</div>