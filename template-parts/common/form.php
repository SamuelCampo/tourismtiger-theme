<?php 
/**
 * Form
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

// Common 
$d                    = array(); 
$attrs                = array();
$style                = array();
$classes              = array();
$classes[]            = 'form-wrapper';

$d['id']              = get_sub_field('id');

// margins
$style[]              = get_margins_attrs();

// Compile classes and attributes
$attrs[]              = count($style) > 0 ? 'style="' . generate_classlist( $style ) . '"' : '';
$attrs[]              = count($classes) > 0 ? 'class="' . generate_classlist( $classes ) . '"' : '';
$attrs                = generate_classlist( $attrs );

if ( $d['id'] ) :
?>

<div <?=$attrs;?>>
	<?php the_gform( $d['id'] ); ?>
</div>

<?
endif;