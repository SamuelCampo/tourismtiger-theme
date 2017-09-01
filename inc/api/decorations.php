<?php 
/**
 * Decorations
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

/**
 * That function generates section attributes to background
 * According with which a javascript will generate
 *
 * Also here the actions run to print video background 
 * 
 * @return array 
 *         $output['attrs'] = list of attributes; 
 *         $output['style'] = list of styles
 */
function get_background_attrs() {
    $background = get_sub_field( 'background' );

    $output     = array( 'attrs' => array(), 'style' => array() );
    
    if ( !$background )
        return $output;

    /**
     * Below we use field keys instead of fields name 
     * because $the_row variable keeps just keys
     */
    $type              = $background['type'];
    $color             = $background['color'] ? $background['color'] : '';
    $map               = $background['map']; // $map['lat'],  $map['lng'], 

    $output['style'][] = $color ? "background-color:{$color};" : '';

    /**
     * Set attrributes 
     * according background type
     */
    switch ( $type ) :
        case 'image':
            $image             = $background['image'];
            $output['attrs'][] = "data-bg-image='{$image}'";
            $output['style'][] = "background-repeat:no-repeat;";

            if ( $background['display'] == 'fixed' ) :
                $output['style'][] = "background-attachment:fixed;";
            elseif ( $background['display'] == 'expand' ) :
                $output['attrs'][] = "data-bg-equal='1'";
            endif;

            break;

        case 'texture':
            $image             = wp_get_attachment_image_src( $background['image'], 'full' );
            $output['attrs'][] = "data-section-image='{$image[0]}'";
            break;

        case 'map':
            $output['attrs'][] = "data-section-lat='{$map['lat']}'";
            $output['attrs'][] = "data-section-lng='{$map['lng']}'";
            break;
        
        /* Add video html to views/core/section.php */
        case 'video':
            //
            break;

        /* Add video html to views/core/section.php */        
        case 'video-embed':
            //
            break;

        default:
            break;

    endswitch;

    /**
     * Overlay of the background
     */
    switch ( $background['overlay'] ) :
        case 'color':
            $color             = $background['overlay-color']; 
            $output['attrs'][] = "data-bg-overlay-color='{$color}'";
            $output['attrs'][] = "data-bg-overlay='1'";
            break;

        case 'texture':
            $image             = $background['overlay-image']; 
            $opacity           = $background['overlay-opacity']; 
            $output['attrs'][] = "data-bg-overlay-image='{$image}'";
            $output['attrs'][] = "data-bg-overlay-opacity='{$opacity}'";
            $output['attrs'][] = "data-bg-overlay='1'";
            break;
    endswitch;

    $output['attrs'] = generate_classlist( $output['attrs'] );
    $output['style'] = generate_classlist( $output['style'] );

    return $output;
}


/**
 * Return section background video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function get_background_video( $background ) {
    $poster = wp_get_attachment_image_src( $background['image'], 'full' );
    $webm   = $background['webm'];  
    $ogv    = $background['ogv'];  
    $mp4    = $background['mp4']; 

    $video = generate_video_bg_html( $webm, $ogv, $mp4, $poster );

    return $video;
}


/**
 * Echo section background video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function the_background_video( $background ) {
    $video = get_background_video( $background );
    echo "<div class='primary-content--bg_video'>{$video}</div>";
    return null;
}


/**
 * Return section background oembed video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function get_background_oembed( $background ) {

    $iframe = '<iframe src="' . $background['oembed'] . '"></iframe>';

    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];
    $params = array(
        'controls'    => 0,
        'autoplay'    => 1,
        'rel'         => 0,
        'showinfo'    => 0,
        'controls'    => 0,
        'loop'        => 1,
    );
    $new_src    = add_query_arg($params, $src);
    $iframe     = str_replace($src, $new_src, $iframe);
    $attributes = 'frameborder="0"';
    $iframe     = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

    return $iframe;
}


/**
 * Echo section background oembed video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function the_background_oembed( $background ) {
    $video = get_background_oembed( $background );
    echo "<div class='primary-content--bg_video'>{$video}</div>";
    return null;
}


/**
 * Function returns attributes 
 * to generate dividers
 * 
 * @var $d (array) - contains dividers acf data
 */
function get_dividers_attrs() {
    $d = get_sub_field( 'dividers' );

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


/**
 * Return margins attrs
 * From special acf fiels
 */
function get_margins_attrs() {
    $margins = get_sub_field( 'margins' );

    if ( ! is_array( $margins ) || count( $margins ) < 1 ) 
        return '';

    $html              = '';

    $margins['top']    = $margins['top'] ? $margins['top'] / 10 : false;
    $margins['bottom'] = $margins['bottom'] ? $margins['bottom'] / 10 : false;

    $html             .= $margins['top'] ? "margin-top:{$margins['top']}rem;" : '';
    $html             .= $margins['bottom'] ? "margin-bottom:{$margins['bottom']}rem;" : '';

    return $html;
}