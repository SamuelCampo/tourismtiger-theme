<?php 
/**
 * Hero Area
 *
 * Functions exclusively for Hero Area
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


/**
 * That function returns us just exist fields 
 * and doesn't query unnessesarily requests
 * 
 * @return html string
 */
function get_heroarea_title_from_acf( $the_row = array() ) {
    $html = '';

    for ( $i = 1; $i <= 3; $i++ ) :

        // This this acf field key 
        $ii = $i + 12;

        // get text from database
        $text = $the_row["pc_ha_0{$ii}-1-1"];

        // if text is exist proceed script
        if ( $text ) : 
            $is_hr = $the_row["pc_ha_0{$ii}-1-2"];
            $tag   = $the_row["pc_ha_0{$ii}-1-3"];
            $html .= "<div class='hero-area--title hero-area--title_$i'><$tag>$text</$tag></div>";

            // add hr if it's checked
            if ( $is_hr ) : 
                $color      = $the_row["pc_ha_0{$ii}-2-3-1"];
                $width      = $the_row["pc_ha_0{$ii}-2-3-2"];
                $html      .= "<hr data-color='$color' data-width='$width' />";
            endif; 
        endif;
    endfor;

    if ( $html === '' ) 
        return false;

    return $html;
}


/**
 * Generates source files for banner background 
 * @return array
 */
function get_heroarea_bg_from_acf( $the_row = array() ) {
    $data = $the_row ? array( 'image' => false, 'video' => false ) : false; 

    /**
     * Loop slider images
     */
    if ( $the_row['pc_ha_001'] === 'slider' ) :
        foreach ( $the_row['pc_ha_004'] as $attachment_id ) : 
            $data['image'][] = wp_get_attachment_image( $attachment_id, 'full', false, array( 'class' => 'hero-area--bg__image' ) );
        endforeach;

    /**
     * Get single image
     */
    elseif ( $the_row['pc_ha_001'] === 'single' ) :
        $data['image'][] = wp_get_attachment_image( $the_row['pc_ha_002'], 'full', false, array( 'class' => 'hero-area--bg__image' ) );

    /**
     * Get video sources
     */
    elseif ( $the_row['pc_ha_001'] === 'video' ) :
        $data['video']['poster']   = $the_row['pc_ha_008'] ? $the_row['pc_ha_008'] : '';
        $data['video']['sources']  = '';
        $data['video']['sources'] .= $the_row['pc_ha_005'] ? "<source src='{$the_row['pc_ha_005']}' type='video/mp4'>" : '';
        $data['video']['sources'] .= $the_row['pc_ha_006'] ? "<source src='{$the_row['pc_ha_006']}' type='video/webm'>" : '';
        $data['video']['sources'] .= $the_row['pc_ha_007'] ? "<source src='{$the_row['pc_ha_007']}' type='video/ogv'>" : '';
    endif;

    return $data;
}


function get_heroarea_searchbox_from_acf( $the_row = array() ) {
    $html        = '';
    $date_format = 'Y-m-d';

    if ( $the_row['pc_ha_014_1'] === 'range' ) :
        $html .= '<input type="text" class="hero-area--search__field hero-area--search__start" data-pmu-format="'.$date_format.'" />';
        $html .= '<input type="text" class="hero-area--search__field hero-area--search__end" data-pmu-format="'.$date_format.'" />';

    elseif ( $the_row['pc_ha_014_1'] === 'range' ) :
        $html .= '<input type="text" class="hero-area--search__field hero-area--search__single" data-pmu-format="'.$date_format.'" />';

    endif;

    $html .= '<button type="submit">'.$the_row['pc_ha_013'].'</button>';

    return $html;
}