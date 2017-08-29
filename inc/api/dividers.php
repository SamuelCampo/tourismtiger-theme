<?php 
/**
 * Primary area
 *
 * Functions exclusively for Hero Area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function get_dividers_attrs( $d ) {
    if ( ! $d || ! is_array( $d ) )
        return '';

    $output    = array();

    $is_top    = $d['top-divider'] && $d['top-divider'] != 'none';
    $is_bottom = $d['bottom-divider'] && $d['bottom-divider'] != 'none';

    if ( $is_top || $is_bottom ) 
        $output[] = 'data-dividers';
    else 
        return '';

    // top divider
    $output[] = $is_top ? "data-divider-top-type='{$d['top-divider']}'" : '';

    if ( $is_top ) :
        switch ( $d['top-divider'] ) :
            case 'repeater': 
            case 'image':
                $output[] = "data-divider-top-image='{$d['top-divider--image']}'";
                break;

            case 'line':
                $output[] = "data-divider-top-color='{$d['top-divider--color']}'";
                $output[] = "data-divider-top-width='{$d['top-divider--width']}'";
                break;

            case 'gradient':
                $output[] = "data-divider-top-color='{$d['top-divider--color']}'";
                $output[] = "data-divider-top-duration='{$d['top-divider--duration']}'";
                break;
        endswitch;
    endif;

    // bottom divider
    $output[]  = $is_bottom ? "data-divider-bottom-type='{$d['bottom-divider']}'" : '';

    if ( $is_bottom ) :
        switch ( $d['bottom-divider'] ) :
            case 'repeater': 
                $output[] = "data-divider-bottom-repeater='{$d['bottom-divider--image']}'";
                break;

            case 'image':
                $output[] = "data-divider-bottom-image='{$d['bottom-divider--image']}'";
                break;

            case 'line':
                $output[] = "data-divider-bottom-color='{$d['bottom-divider--color']}'";
                $output[] = "data-divider-bottom-width='{$d['bottom-divider--width']}'";
                break;

            case 'gradient':
                $output[] = "data-divider-bottom-color='{$d['bottom-divider--color']}'";
                $output[] = "data-divider-bottom-duration='{$d['bottom-divider--duration']}'";
                break;
        endswitch;
    endif;

    return generate_classlist( $output );
}