<?php 
/**
 * Font functions
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

/**
 * Get array with font data
 * 
 * @var $field - acf field name
 * @var $field - post id, or false if it's subfield
 */
function get_font_media_array( $field = '', $key = false ) {
    if ($key == false) :
        $font_media   = get_sub_field( $field );
    else :
        $font_media   = get_field( $field, $key );
    endif;

    if ( is_array( $font_media ) )
        return $font_media['fonts'];
    else
        return false;
}

/**
 * Get prepared rules to each media
 * 
 * @var $field - acf field name
 * @var $field - post id, or false if it's subfield
 */
function get_font_media_rules( $field = '', $key = false ) {
    $font_media = get_font_media_array( $field, $key );

    if ( !is_array($font_media) )
        return array();

    $array      = array();

    /**
     * Loop each rule
     */
    foreach ( $font_media as $value ) :
        $media         = $value['acf_fc_layout'];
        $font          = get_font_rules_array( $value['font'] );
        $array[$media] = $font;
    endforeach;

    return $array;
}

/**
 * Get prepared rules to field
 * 
 * @var font array
 */
function get_font_rules_array( $font = array() ) {
    if ( ! is_array( $font ) )
        return array();

    $array = array();

    /**
     * Add each existed rule
     */
    foreach ( $font as $name => $rule ) :

        /**
         * Go through each rule
         * Handle each one if it exists
         */
        if ($rule) :
            switch ($name) :
                case 'font-family':
                    $array[$name] = "{$name}:'{$rule}';";
                    break;

                case 'line-height':
                    $array[$name] = "{$name}:{$rule}%;";
                    break;

                case 'letter-spacing':
                case 'font-size':
                    $array[$name] = "{$name}:{$rule}px;";
                    break;

                case 'color-type':
                    $type           = $font['color-type'];
                    $value          = $font["color-{$type}"];
                    $array['color'] = "color:{$value};";
                    break;

                case 'color-rgba':
                case 'color-custom':
                    break;

                default:
                    $array[$name] = "{$name}:{$rule};";
                    break;
            endswitch;
        endif;
    endforeach;

    /**
     * Special sign in json file
     * To load the font on the page
     */
    add_font_to_queue($font);

    return $array;
}

/**
 * Get font family array
 */
function get_font_family_array() {
    $path     = get_template_directory() . '/assets/json/fonts/fonts.json';
    $is_json  = file_exists( $path );

    if ( ! $is_json )
        return false;

    $json     = file_get_contents( $path );
    $jsonData = json_decode( $json, true );

    return $jsonData['items'];
}

/**
 * Get font family array
 */
function get_font_family_queue_uri() {
    $path    = get_styling_json_path() . 'fonts-queue.json';
    $is_json = file_exists( $path );

    if ( ! $is_json ) :
        $handle = fopen($path, 'w');
        fwrite($handle, '{}');
        fclose($handle);
    endif;

    return $path;
}

/**
 * List of available fonts
 */
function get_font_family_choices() {
    $list    = get_font_family_array();
    $choices = array();

    if ( $list ) :
        // Loop each font
        foreach ( $list as $font ) :
            $family           = $font['family'];
            $choices[$family] = $family;
        endforeach;
    else :
        $choices['null'] = 'There ain\'t any fonts available.';
    endif;

    return $choices;
}

/**
 * List of available fonts
 */
function get_font_weight_choices() {
    $choices = array(
        100       => 'Thin',
        300       => 'Light',
        'regular' => 'Regular',
        600       => 'Medium',
        700       => 'Bold',
    );

    return $choices;
}

/**
 * List of available fonts
 */
function get_text_align_choices() {
    $choices = array(
        'inherit' => 'Auto',
        'left'    => 'Left',
        'center'  => 'Center',
        'right'   => 'Right',
        'justify' => 'Justify',
    );

    return $choices;
}

/**
 * List of available fonts
 */
function get_font_color_choices() {
    $choices = array();
    $json    = get_rules_json('constants');
    $json    = file_get_contents( $json );
    $json    = json_decode( $json, true );

    if ( is_array( $json ) ) 
        foreach ( $json['color-custom'] as $value => $name )
            $choices[$value] = "<span style='color:{$value}'>◉</span> {$name}";

    return $choices;
}

/**
 * List of available fonts
 */
function get_font_styles_choices() {
    $choices = array(
        'normal' => 'Normal',
        'italic' => 'Italic',
    );

    return $choices;
}

/**
 * List of available fonts
 */
function get_text_decoration_choices() {
    $choices = array(
        'none' => 'None',
        'underline' => 'Underline',
        'line-through' => 'Line through',
    );

    return $choices;
}

/**
 * List of available fonts
 */
function get_text_transform_choices() {
    $choices = array(
        'none' => 'None',
        'uppercase' => 'Uppercase',
        'lowercase' => 'Lowercase',
    );

    return $choices;
}

/**
 * Refresh the queue of fonts
 */
function refresh_font_queue() {
    $queue    = get_font_family_queue_uri();
    $handle   = fopen($queue, 'w');
    fwrite($handle, '{}');
    fclose($handle);
}

/**
 * Add the font in queue of loading fonts
 * @var $font -- font array
 */
function add_font_to_queue( $font ) {
    if ( ! is_array( $font ) )
        return null;

    $queue    = get_font_family_queue_uri();
    $json     = file_get_contents( $queue );
    $jsonData = json_decode( $json, true );

    if ( $jsonData === null )
        return 1;

    /**
     * Check whether font is written
     * If yes, finish him!!
     */
    if ( $font['font-family'] == '' || array_key_exists( $font['font-family'], $jsonData ) ) :
        return null;

    /**
     * So if there isn't that font, 
     * Let's white it down
     */
    else :
        $jsonData[$font['font-family']] = get_font_source( $font );
        $jsonEncoded                    = json_encode( $jsonData );
        $handle                         = fopen($queue, 'w');
        fwrite($handle, $jsonEncoded);
        fclose($handle);
    endif;

    // Finally returns null
    return null;
}

/**
 * Gets the url of the font accordin it's font and weight
 * @var $font -- font array
 */
function get_font_source( $font ) {
    if ( !is_array( $font ) )
        return '';

    $source = ''; // there will be a link to source file of .ttf

    /**
     * Put sign of the font family to special file 
     * To load it on any page
     */
    if ( array_key_exists( 'font-family', $font ) ) :
        $family = $font['font-family'];
        $weight = $font['font-weight'];
        $list   = get_font_family_array();
        $exists = false;

        /**
         * Find that font in the list of fonts
         * And set the url to $source variable
         */
        foreach ( $list as $loaded ) 
            if ( $loaded['family'] == $family && is_array( $loaded['files'] ) )
                $source = array_key_exists( $weight, $loaded['files'] ) ? $loaded['files'][$weight] : $loaded['files']['regular'];
    endif;

    return $source;
}