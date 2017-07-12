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
function get_section_background( $type, $the_row, $id ) {

    $output = array( 'attrs' => array(), 'style' => array() );
    
    if ( !$type || $type == 'color' || !$the_row )
        return $output;

    /**
     * Below we use field keys instead of fields name 
     * because $the_row variable keeps just keys
     */
    $color             = $the_row[$id . '_5821d89ecaee3'];
    $is_fixed          = $the_row[$id . '_5821d7db6de3b'] === 'yep' ? true : false; 
    $is_expand         = $the_row[$id . '_582si7ez6imbg'] === 'yep' ? true : false; 
    $map               = $the_row[$id . '_5821d8c5caee4']; // $map['lat'],  $map['lng'], 

    $output['style'][] = "background-color:{$color};";

    /**
     * Set attrributes 
     * according background type
     */
    switch ($type) :
        case 'image':
    		$image             = wp_get_attachment_image_src( $the_row[$id . '_5821d6db6de3a'], 'full' );
            $output['attrs'][] = "data-section-image='{$image[0]}'";
            $output['style'][] = "background-repeat:no-repeat;";

            if ( $is_fixed ) 
                $output['style'][] = "background-attachment:fixed;";

            if ( $is_expand ) 
                $output['attrs'][] = "data-section-expanded='1'";

            break;

        case 'texture':
    		$image             = wp_get_attachment_image_src( $the_row[$id . '_5821d6db6de3a'], 'full' );
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
function get_section_video_bg( $the_section_row, $id ) {
    $poster = wp_get_attachment_image_src( $the_section_row[$id . '_5821d6db6de3a'], 'full' );
    $webm   = $the_section_row[$id . '_5821d944caee7'];  
    $ogv    = $the_section_row[$id . '_5821d972caee8'];  
    $mp4    = $the_section_row[$id . '_5821d983caee9']; 

	$video = generate_video_bg_html( $webm, $ogv, $mp4, $poster );

	return $video;
}


/**
 * Echo section background video
 * 
 * @param  array $the_section_row 
 * @return string
 */
function the_section_video_bg( $the_section_row, $id ) {
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
function get_section_embed_bg( $the_section_row, $id ) {

	$iframe = '<iframe src="' . $the_section_row[$id . '_5821d9b6caeea'] . '"></iframe>';

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
function the_section_embed_bg( $the_section_row, $id ) {
	$video = get_section_embed_bg( $the_section_row );
	echo "<div class='primary-content--bg_video'>{$video}</div>";
    return null;
}


/**
 * Get section dividers
 *
 * Returns array of top and bottom divider 
 * values related with current section, 
 * besides includes html tags to showing 
 * dividers on a page.
 *
 * @param $type (array) type of top and bottom dividers
 * @param $the_section_row (array) list of fields' values 
 *        of current's loop the_row() 
 */
function get_section_dividers( $type, $the_section_row, $id ) {

    // Assign action to output top divider if it's exist
    if ( $type['top'] && $type['top'] != 'none'  ) 
        add_action( 'after_open_section_tag', 'the_section_top_divider', 20, 1 );

    // Assign action to output bottom divider if it's exist
    if ( $type['bottom'] && $type['bottom'] != 'none' ) 
        add_action( 'before_close_section_tag', 'the_section_bottom_divider', 20, 1 );

    return null;
}


/**
 * Echo scurrent section's top divider
 * 
 * @param  $the_section_row (array) current the-_row loop array
 * @return null && echo html element
 */
function the_section_top_divider( $the_section_row, $id ) {
    $html = get_section_top_divider( $the_section_row );
    echo $html;
    return null;
}


/**
 * Generate html element of top divider
 * 
 * @param  $the_section_row (array) current the-_row loop array
 * @return string - html element 
 */
function get_section_top_divider( $the_section_row, $id ) {
    $output = '';

    if ( $the_section_row[$id . '_5821df8eabd7d'] === 'repeater' ) :
        $image   = wp_get_attachment_image_src( $the_section_row[$id . '_5821e00cabd7e'], 'full' );
        $output .= "<div class='top-divider top-divider_repeater' data-image='{$image[0]}'></div>";

    elseif ( $the_section_row[$id . '_5821df8eabd7d'] === 'image' ) :
        $image   = wp_get_attachment_image_src( $the_section_row[$id . '_5821e00cabd7e'], 'full' );
        $output .= "<div class='top-divider top-divider_image' data-image='{$image[0]}'></div>";

    elseif ( $the_section_row[$id . '_5821df8eabd7d'] === 'line' ) :
        $color   = $the_section_row['tour_pc-td--line-color'] ? $the_section_row['tour_pc-td--line-color'] : '#fff';
        $width   = $the_section_row['tour_pc-td--line-thickess'] ? $the_section_row['tour_pc-td--line-thickess'] : 0;
        $output .= "<hr class='top-divider top-divider_line' style='border-color:{$color};border-width:{$width}px;' />";

    endif;

    return $output;
}


/**
 * Echo scurrent section's bottom divider
 * 
 * @param  $the_section_row (array) current the-_row loop array
 * @return null && echo html element
 */
function the_section_bottom_divider( $the_section_row, $id ) {
    $html = get_section_bottom_divider( $the_section_row );
    echo $html;
    return null;
}


/**
 * Generate html element of bottom divider
 * 
 * @param  $the_section_row (array) current the-_row loop array
 * @return string - html element 
 */
function get_section_bottom_divider( $the_section_row, $id ) {
    $output = '';

    if ( $the_section_row[$id . '_5821e14dd0f11'] === 'repeater' ) :
        $image   = wp_get_attachment_image_src( $the_section_row[$id . '_5821e1b1d0f13'], 'full' );
        $output .= "<div class='bottom-divider bottom-divider_repeater' data-image='{$image[0]}'></div>";

    elseif ( $the_section_row[$id . '_5821e14dd0f11'] === 'image' ) :
        $image   = wp_get_attachment_image_src( $the_section_row[$id . '_5821e1b1d0f13'], 'full' );
        $output .= "<div class='bottom-divider bottom-divider_image' data-image='{$image[0]}'></div>";

    elseif ( $the_section_row[$id . '_5821e14dd0f11'] === 'line' ) :
        $color   = $the_section_row['tour_pc-bd--line-color'] ? $the_section_row['tour_pc-bd--line-color'] : '#fff';
        $width   = $the_section_row['tour_pc-bd--line-thickess'] ? $the_section_row['tour_pc-bd--line-thickess'] : 0;
        $output .= "<hr class='bottom-divider bottom-divider_line' style='border-color:{$color};border-width:{$width}px;' />";

    endif;

    return $output;
}


add_action('wp_ajax_get_section_ajax', 'get_section_ajax');
add_action('wp_ajax_nopriv_get_section_ajax', 'get_section_ajax');

function get_section_ajax() {
    
    /**
     * Verify current user
     */
    if ( !isset($_POST['nonce']) || !wp_verify_nonce( $_POST['nonce'], 'ajax_nonce' ) ) :
        echo json_encode( array( 'content' => '(1)Please wait...', 'more' => false, 'offset' => 1 ) );
        exit;
    endif;
    
    /**
     * If post ID or offset was missed, return promisse 
     */
    if (!isset($_POST['post_id']) || !isset($_POST['offset'])) :
        echo json_encode( array( 'content' => '(2)Please wait...', 'more' => false, 'offset' => 1 ) );
        exit;
    endif;

    /**
     * Common variables
     */
    $start   = $_POST['status'];
    $post_id = $_POST['post_id'];
    $field   = $_POST['field'];
    $offset  = $_POST['offset'];
    $more = false;

    ob_start();

    if ( have_rows( $field, $post_id ) ) :
        $total = count( get_field( $field, $post_id  ) );
        $count = 1;
        $times = 0;

        while ( have_rows( $field, $post_id ) ) :
            $the_section_row = the_row();

            if ( $count > $start ) :
                include get_template_directory() . '/template-parts/section.php';
                $times++;

                if ( $times >= $offset )
                    break;
            endif;

            $count++; 
        endwhile;
    endif;

    $content = ob_get_clean();

    if ($total > $count) 
        $more = true;

    echo json_encode( array( 'content' => $content, 'more' => $more, 'status' => $count ) );
    exit;

}