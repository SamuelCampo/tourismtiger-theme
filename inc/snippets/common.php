<?php  
/**
 * Common functions
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * Create style prefix.
 * Convert number to string 
 * 
 * @param  string $i 
 * @return string    
 */
function create_style_prefix( $i = '' ) {
    switch ( $i ) :
        
        case 1:
            $prefix = 'one';
            break;
        
        case 2:
            $prefix = 'two';
            break;
        
        case 3:
            $prefix = 'three';
            break;
        
        case 4:
            $prefix = 'four';
            break;
        
        case 5:
            $prefix = 'five';
            break;
        
        case 6:
            $prefix = 'six';
            break;
        
        case 7:
            $prefix = 'seven';
            break;
        
        case 8:
            $prefix = 'eight';
            break;
        
        case 9:
            $prefix = 'nine';
            break;
        
        case 10:
            $prefix = 'ten';
            break;
        
        default:
            $prefix = 'zero';
            break;

    endswitch;

    return $prefix;
}


/**
 * Transform name for using in strings/slugs/urls
 * 
 * @param  string $name  - handle string
 * @param  string $itype - on which symbol will be chenged ' ' 
 * @return string
 */
function transform_name( $name = '', $type = '' ) {
    $word = array( ' ' => $type, '&' => '' );
    $new = strtr( $name, $word );
    $new = strtolower( $new );

    return $new;
}

/**
 * Adapt image
 *
 * - Return an image in the more better size.
 * - Make circle if it's required.
 * - Wrap into <a href=""> if $link is existed
 * 
 * @param  integer $id     
 * @param  integer $width  
 * @param  integer $height 
 * @param  boolean $link   optional
 * @param  [type]  $attr   
 * @param  boolean $circle 
 * @return null         
 */
function adapt_image( $id=0, $width=0, $height=0, $link=false, $attr=null, $circle=false, $blank=false ) {

    $html = '';

    if ( $circle !== false ) :
        if ( $width > $height ) : 
            $width = $height;
        elseif ( $width <= $height ) : 
            $height = $width;
        endif;

        $html .= '<div class="is-circle">';
    endif;

    $link_attrs  = $link ? "href='{$link}'" : "href='#.'";
    $link_attrs .= $blank ? " target='_blank'" : '';

    $html .= $link ? "<a {$link_attrs}>" : '';
    $html .= wp_get_attachment_image( $id, array( $width, $height ), true, $attr );
    $html .= $link ? '</a>' : '';

    if ( $circle !== false )
        $html .= '</div>'; 

}


/**
 * Column borders
 *
 * - Add borders to column
 * 
 * @param  array  $border 
 * @return string
 */
function print_content_card_border( $border = array() ) {

    $html = '';
    $attr = '';

    if ( $border['is'] == 'pc--c__border-left' ) :

        $attr .= "border-left: {$border['width']} {$border['style']} {$border['color']};";
        $attr .= "left: 0;";
        $attr .= "height: {$border['size']};";

        $html .="<div class='pc--c__border pc--c__border-side_left' style='{$attr}'></div>";

    elseif ( $border['is'] == 'pc--c__border-right' ) :

        $attr .= "border-right: {$border['width']} {$border['style']} {$border['color']};";
        $attr .= "right: 0;";
        $attr .= "height: {$border['size']};";

        $html .="<div class='pc--c__border pc--c__border-side_right' style='{$attr}'></div>";

    elseif ( $border['is'] == 'pc--c__border-both' ) :

        $attr .= "border-right: {$border['width']} {$border['style']} {$border['color']};";
        $attr .= "height: {$border['size']};";

        $html .="<div class='pc--c__border pc--c__border-side_left' style='{$attr} left: 0;'></div>";
        $html .="<div class='pc--c__border pc--c__border-side_right' style='{$attr} right: 0;'></div>";

    endif;

    return $html;
}


/**
 * Just generate random string.
 * Uses numbers and latin words.
 * 
 * @param number $length - count of symbols
 * 
 * @return string
 */
function generate_random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) :
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    endfor;

    return $randomString;
} 


/**
 * Insert reCaptch html
 *
 * 1. Generate HTML if key is exist
 * 2. Enqueue recaptcha script
 * 
 * @return string
 */
function insert_recaptcha_html() {

    $html = get_field('re_captcha', 'apikey') ? '<div class="g-recaptcha" data-sitekey="'.get_field('re_captcha', 'apikey').'"></div>' : '';

    return $html;
}


/**
 * Crop content
 */

function crop_content( $charlength = 50, $text = '', $end = '[...]' ) {
    $charlength++;
    $string = $text;

    if ( mb_strlen( $text ) > $charlength ) :
        $subex = mb_substr( $text, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );

        if ( $excut < 0 ) :
            $string = mb_substr( $subex, 0, $excut );
        else :
            $string = $subex;
        endif;

        $string .= $end;
    endif;

    return $string;
}

/**
 * Generate classlist from array
 */
function generate_classlist( $array ) {
    if ( !is_array( $array ) || empty( $array ) ) 
        return '';

    // That will be returned
    $classlist = '';
    $counter   = 0;

    foreach ( $array as $class ) :
        if ( $class != '' ) : 
            if ( $counter !== 0 )  
                $classlist .= ' ';

            $classlist .= "{$class}";
        endif;
        
        $counter++;
    endforeach;

    return $classlist;
}


/**
 * Generate video background html
 * 
 * @param  string $webm   
 * @param  string $ogv    
 * @param  string $mp4    
 * @param  array  $poster [0] - url 
 * @param  bool   echo
 * @param  bool   autolay attr
 * @param  bool   loop attr
 * 
 * @return string
 */
function generate_video_bg_html( $webm = '', $ogv = '', $mp4 = '', $poster = '', $echo = false, $autoplay = true, $loop = true ) {
    $attr_auto   = $autoplay ? 'autoplay' : '';
    $attr_loop   = $loop ? 'loop' : '';
    $attr_poster = $poster[0] ? "poster='{$poster[0]}'" : '';
    $source_webm = $webm ? "<source src='{$webm}' type='video/mp4' />" : '';
    $source_ogv  = $ogv ? "<source src='{$ogv}' type='video/webm' />" : '';
    $source_mp4  = $mp4 ? "<source src='{$mp4}' type='video/ogg' />" : '';
    $img_poster  = $poster[0] ? "<img src='{$poster[0]}' alt='' />" : '';
    $is_sources  = ($source_webm || $source_ogv || $source_mp4 || $poster);

    /* If there is anything that we can show, go on */
    $output = $is_sources ? "
        <video class='background-video' {$attr_poster} {$attr_auto} {$attr_loop}>
            {$source_webm}
            {$source_ogv}
            {$source_mp4}
            {$img_poster}
        </video>       
    " : '';

    if ($echo) :
        echo $output;
    else : 
        return $output;
    endif;
}