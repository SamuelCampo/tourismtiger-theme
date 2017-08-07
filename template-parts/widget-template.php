<?php 
/**
 * Sidebar: Widget
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$widget_object = get_sub_field( 'sidebar-widget-id' );

// override $post
$post = $widget_object;
setup_postdata( $post );

if ( have_rows( 'widget-template', $post->ID  ) ) :
	while ( have_rows( 'widget-template', $post->ID  ) ) :
		$the_component = the_row();
		$layout        = get_row_layout();

		get_template_part( "template-parts/common/{$layout}", 'sidebar' );
	endwhile;
endif;

wp_reset_postdata();