<?php 
/**
 * Primary area
 *
 * Functions exclusively for Hero Area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * That function generates section attributes
 * According with which a javascript will generate
 *
 * Also here the actions run to print video background 
 * 
 * @return array 
 *         $output['attrs'] = list of attributes; 
 *         $output['style'] = list of styles
 */
function get_section_background( $type, $the_row ) {

    $output = array( 'attrs' => array(), 'style' => array() );
    
    if ( !$type || $type == 'color' || !$the_row )
        return $output;

    /**
     * Below we use field keys instead of fields name 
     * because $the_row variable keeps just keys
     */
    $color             = $the_row['field_5821d89ecaee3'];
    $is_fixed          = $the_row['field_5821d7db6de3b'] === 'yep' ? true : false; 
    $is_expand         = $the_row['field_582si7ez6imbg'] === 'yep' ? true : false; 
    $map               = $the_row['field_5821d8c5caee4']; // $map['lat'],  $map['lng'], 

    $output['style'][] = "background-color:{$color};";

    /**
     * Set attrributes 
     * according background type
     */
    switch ($type) :
        case 'image':
    		$image             = wp_get_attachment_image_src( $the_row['field_5821d6db6de3a'], 'full' );
            $output['attrs'][] = "data-section-image='{$image[0]}'";
            $output['style'][] = "background-repeat:no-repeat;";

            if ( $is_fixed ) 
                $output['style'][] = "background-attachment:fixed;";

            if ( $is_expand ) 
                $output['attrs'][] = "data-section-expanded='1'";

            break;

        case 'texture':
    		$image             = wp_get_attachment_image_src( $the_row['field_5821d6db6de3a'], 'full' );
            $output['attrs'][] = "data-section-image='{$image[0]}'";
            break;

        case 'map':
            $output['attrs'][] = "data-section-lat='{$map['lat']}'";
            $output['attrs'][] = "data-section-lng='{$map['lng']}'";
            break;
        
        /* Add video html to views/core/section.php */
        case 'video':
            add_action( 'after_open_section_tag', 'the_section_video_bg', 10, 1 );
            break;

        /* Add video html to views/core/section.php */        
        case 'video-embed':
            add_action( 'after_open_section_tag', 'the_section_embed_bg', 10, 1 );
            break;

        default:
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
function get_section_video_bg( $the_section_row ) {
    $poster = wp_get_attachment_image_src( $the_section_row['field_5821d6db6de3a'], 'full' );
    $webm   = $the_section_row['field_5821d944caee7'];  
    $ogv    = $the_section_row['field_5821d972caee8'];  
    $mp4    = $the_section_row['field_5821d983caee9']; 

	$video = generate_video_bg_html( $webm, $ogv, $mp4, $poster );

	return $video;
}


/**
 * Echo section background video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function the_section_video_bg( $the_section_row ) {
	$video = get_section_video_bg( $the_section_row );
	echo "<div class='primary-content--bg_video'>{$video}</div>";
    return null;
}


/**
 * Return section background oembed video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function get_section_embed_bg( $the_section_row ) {

	$iframe = '<iframe src="' . $the_section_row['field_5821d9b6caeea'] . '"></iframe>';

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
	$new_src = add_query_arg($params, $src);
	$iframe = str_replace($src, $new_src, $iframe);
	$attributes = 'frameborder="0"';
	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

	return $iframe;
}


/**
 * Echo section background oembed video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function the_section_embed_bg( $the_section_row ) {
	$video = get_section_embed_bg( $the_section_row );
	echo "<div class='primary-content--bg_video'>{$video}</div>";
    return null;
}