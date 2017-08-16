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
    $classes = generate_classlist( $classes );

    switch ( $btn['type'] ) :
        case 'url':
            $html = "<a href='{$btn['url']}' target='_blank' class='{$classes}'>{$btn['label']}</a>";
            break;

        default:    
            $html = "<a href='{$btn['page']}' class='{$classes}'>{$btn['label']}</a>";
            break;
    endswitch;

    return $html;
}