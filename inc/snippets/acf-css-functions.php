<?php  
/**
 * ACF CSS helper functions
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * Get css via ACF Font
 *
 * @param  array $font   - ACF Typography
 * @param  string $color - color
 * @param  string $color - background color
 * @param  string $color - border color
 * 
 * @return array         - [0] - Link to Google font; [1] - css styles || false
 */

function get_font_css( $font = '', $color='', $background='', $border='' ) {

  if ( $font ) :
    $css = array( false, '' );


    /**
     * If Font-family is determined
     * Include font
     */
    if ( $font['font-family'] ) :
      $is_custom_font = get_aifonts_from_dir( $font['font-family'], true );

      if ( !$is_custom_font ) :

        $css[0] = $font['font-family'] ? "</style><style>@import url('https://fonts.googleapis.com/css?family=" . $font['font-family'] . "');" : false;

      elseif ( $is_custom_font ) :

        $css[0] = "</style>{$is_custom_font}<style>";

      endif;

      $css[1] .= "font-family:'" . $font['font-family'] . "';";
    endif;


    /**
     * Check ACF Array
     */
    $css[1] .= $font['font-weight'] ? "font-weight:" . $font['font-weight'] . ";" : '';
    $css[1] .= $font['font_size'] ? "font-size:" . $font['font_size'] . "px;" : '';
    $css[1] .= $font['line_height'] ? "line-height:" . $font['line_height'] . "px;" : '';
    $css[1] .= $font['font_style'] ? "font-style:" . $font['font_style'] . ";" : '';
    $css[1] .= $font['text_align'] ? "text-align:" . $font['text_align'] . ";" : '';
    $css[1] .= $font['letter_spacing'] ? "letter-spacing:" .$font['letter_spacing'] . "px;" : '';


    /**
     * Check additional variables
     */
    $css[1] .= $color ? 'color:' . $color . ';' : '';
    $css[1] .= $background ? 'background-color:' . $background . ';' : '';
    $css[1] .= $border ? 'border-color:' . $border . ';' : '';

    return $css;

  elseif ( !$font ) :
    return false;
  endif;
}


/**
 * Get font corner style
 * 
 * @param  string $field    - sub field value
 * @param  array  $padding  - paddings parameters
 * 
 * @return string
 */
function get_font_corner_style( $field = '', $padding = array( '.7em', '1.1em' ) ) {
    $css = '';


    /**
     * Reset paddings to zero 
     * if $padding value isn't array
     * 
     * @var array
     */
    if ( !is_array( $padding ) ) 
      $padding = array( '0', '0' );


    if ( $field == 'square' ) :
        $css .= 'border-radius: 0;';

    elseif ( $field == 'round' ) :
        $css .= 'border-radius: 50%;';

    elseif ( $field == 'corner' ) :
        $css .= 'border-radius: 4px;';

    endif;
      
    $css .= "padding: {$padding[0]} {$padding[1]};";

    return $css;
}


/**
 * Get mouseover styles
 *
 * Usually that function is used to buttons css
 * 
 * @param  string $field sub field value
 * @return array - 0 - defaul; 1 - hover 
 */
function get_font_mouseover_effect_styles( $field = '', $font_color = '', $bg_color = '' ) {
    $css = '';

    if ( $$field  ) :
        $css = array();

        if ( in_array( 'invert', $field  ) ) {
            $css[1] .= 'background-color:' . $font_color . ';';
            $css[1] .= 'color:' . $bg_color . ';';
        }

        if ( in_array( 'decor', $field  ) ) $css[0] .= 'text-decoration: underline;';
    endif;

    return $css;
}


/**
 * Get font border styles
 * 
 * @param  string $style - sign how to im;lement hover effect
 * @param  string $color - border color
 * @param  number $width - border width
 * 
 * @return array - [0] - static state; [1] - hover 
 */
function get_font_border_styles( $style = '', $color = 'transparent', $width = 0 ) {
    $css = '';

    if ( $style == 'yes' || $style == 'hover' ) :

        $css[1] .= 'border:' . $width . 'px solid ' . $color . ';';
        $css[0] .= 'box-sizing: border-box;';

        if ( $style == 'yes' ) :
            $css[0] .= 'border:' . $width . 'px solid ' . $color . ';';
        elseif ( $style == 'hover' ) :
            $css[0] .= 'border:' . $width . 'px solid transparent;';
        endif;

    endif; 

    return $css;
}