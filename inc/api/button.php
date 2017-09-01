<?php 
/**
 * Button
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function get_button( $btn = array(), $classes = array() ) {
    if ( ! is_array( $btn ) || ! is_array( $classes ) ) 
        return null;

    // Converts classes array to string
    $classes = apply_filters( 'get_button_classes', $classes, $btn );
    $classes = 'class="' . generate_classlist( $classes ) . '"';

    switch ( $btn['type'] ) :
        case 'url':
            $html = "<a href='{$btn['url']}' target='_blank' {$classes}>{$btn['label']}</a>";
            break;

        default:    
            $html = "<a href='{$btn['page']}' {$classes}>{$btn['label']}</a>";
            break;
    endswitch;

    return $html;
}