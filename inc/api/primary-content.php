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
 * Loads hidden sections to primary area 
 * through ajax request
 */
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
    define( 'GET_SECTION_AJAX', true );
    $start   = $_POST['status'];
    $post_id = $_POST['post_id'];
    $field   = $_POST['field'];
    $offset  = $_POST['offset'];
    $more = false;

    ob_start();

    if ( have_rows( $field, $post_id ) ) :
        $total          = count( get_field( $field, $post_id ) );
        $count          = 1;
        $section_number = 0;
        $times          = 0;

        while ( have_rows( $field, $post_id ) ) :
            $the_section_row = the_row();
            $section_id      = 'pr-co';
            $section_number++;

            if ( $count > $start ) :
                include get_template_directory() . '/template-parts/' . get_row_layout() . '.php';
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
add_action('wp_ajax_get_section_ajax', 'get_section_ajax');
add_action('wp_ajax_nopriv_get_section_ajax', 'get_section_ajax');


/**
 * Get list of attrs which help JavaScript 
 * to handle AJAX request to get new rows.
 *
 * Assigns function to 
 * 'before_close_section_tag' action
 * in case of use under-rows button type
 * 
 * @param  $type - type of ajax. false || underneath
 * @param  $the_row - array contains current's repeater loop fields
 * @param  $id - key to acf fields
 *
 * @return return list of attrs
 */
function get_section_ajax_attrs( $type = false, $the_row = array() , $id = 0, $section_number = 0 ) {
    if ( $type == 'false' || !$type ) 
        return '';

    /**
     * Common variables used for ajax request
     */
    $rows_count = intval(count($the_row[$id . '_5821e254f6599'])); // total rows in the repeater fiels
    $status     = intval($the_row[$id . '_5a2jea1x1a0v8']); // how many rows are already printed
    $lack       = $rows_count - $status; 
    $offset     = $the_row[$id . '_5a2jea1x1a9v9'];
    $show_all   = intval($offset != 'all');
    $offset     = $offset && $offset != 'all' ? $the_row[$id . '_5a2jea1x1a9v9'] : $lack;
    $name       = 'rows'; // fields name
    $trigger    = $the_row[$id . '_5a2jea1x2a8c9'] ? $the_row[$id . '_5a2jea1x2a8c9'] : 'none';
    $method     = 'get_row_ajax'; // php method returns new rows

    /**
     * Show/Hide trigger
     */
    $button  = $the_row[$id . '_5a2jea1x2a2d6'];

    /**
     * Set attributes to rows' wrapper
     */
    $attrs    = array();
    $attrs[]  = "data-offset='{$offset}'";
    $attrs[]  = "data-status='{$status}'";
    $attrs[]  = "data-init='{$status}'";
    $attrs[]  = "data-show-all='{$show_all}'";
    $attrs[]  = "data-lack='{$lack}'";
    $attrs[]  = "data-field='{$name}'";
    $attrs[]  = "data-rows-button='{$button}'";
    $attrs[]  = "data-method='{$method}'";
    $attrs[]  = "data-parent-id='{$section_number}'";

    /**
     * Do actions according the trigger
     */
    if ( $button == 'under-rows' ) :

        /**
         * Add button in end of section but before bottom divider
         */
        add_action( 'before_close_section_tag', 'the_section_ajax_buttons', 10, 2 );

    elseif ( $button == 'in-context' ) :
        $attrs[] = "data-rows-trigger='{$trigger}'";
    endif;

    return generate_classlist( $attrs );
}


/**
 * Loads hidden sections to rows container
 * through ajax request
 */
function get_row_ajax() {
    
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
    define( 'GET_ROW_AJAX', true );
    $start         = +$_POST['status'];
    $post_id       = $_POST['post_id'];
    $field         = $_POST['field'];
    $offset        = $_POST['offset'];
    $more          = false;
    $section_id    = $_POST['section_id'];
    $section_count = 0;

    ob_start();

    /**
     * Loop sections. 
     * It's necessarily to be able to get Row loop 
     */
    while ( have_rows( 'primary-content', $post_id ) ) :
        the_row();
        $section_count++;

        /**
         * Find a section from which was sent AJAX request.
         * Sections before will be ignored, and next sections will be left.
         */
        if ( $section_count == $section_id ) :

            /**
             * Loop rows. However we get just those rows 
             * wich matched to followign criteria:
             * - aren't displayed on the front-end part so far.
             * - if $_POST['offset'] == 'all' -
             *      - return lack rows 
             *   else 
             *      - return just one more
             */
            if ( have_rows( $field, $post_id ) ) :
                $total = count( get_field( $field, $post_id ) );
                $count = 0;
                $times = 0;

                while ( have_rows( $field, $post_id ) ) :
                    $the_row = the_row();
                    $layout  = get_row_layout();
                    $count++;

                    if ( $count > $start ) :

                        /**
                         * Loop rows.
                         * Usually it's row.php file
                         */
                        get_template_part( "template-parts/$layout" );
                        $times++;

                        if ( $times >= $offset )
                            break;
                    endif;
                endwhile;
            endif;
    
            /**
             * If there are rows user can request
             * allow him to use 'Show more' button on front-end
             */
            if ( $total > $count ) 
                $more = true;

        endif;
    endwhile;

    $content = ob_get_clean();

    if ($total > $count) 
        $more = true;

    echo json_encode( array( 'content' => $content, 'more' => $more, 'status' => $count ) );
    exit;
}
add_action('wp_ajax_get_row_ajax', 'get_row_ajax');
add_action('wp_ajax_nopriv_get_row_ajax', 'get_row_ajax');


/**
 * Generate and return section ajax controlls 
 *
 * @param $the_section_row - fields list of current acf loop
 * @param $id - key to fields
 * 
 * @return $html (string)
 */
function get_section_ajax_buttons( $the_section_row, $id ) {
    $label_show = $the_section_row[$id . '_5a2jea1x2a0d8'] ? $the_section_row[$id . '_5a2jea1x2a0d8'] : 'Show more';
    $label_hide = $the_section_row[$id . '_5a2jea1x2a9c9'] ? $the_section_row[$id . '_5a2jea1x2a9c9'] : 'Show less';

    $html       = "
        <div class='primary-content--ajax'>
            <a href='javascript:' data-ajax-rows='1' class='primary-content--ajax__btn button js-show'>{$label_show}</a>
            <a href='javascript:' data-ajax-rows='1' style='display:none;' class='primary-content--ajax__btn button js-hide'>{$label_hide}</a>
        </div>
    ";

    return $html;
}


/**
 * Echo section's ajax controlls
 *
 * @param $the_section_row - fields list of current acf loop
 * @param $id - key to fields
 * 
 * @return null
 */
function the_section_ajax_buttons( $the_section_row, $id ) {
    $html = get_section_ajax_buttons( $the_section_row, $id );
    echo $html;
    return null;
}


/**
 * Get columns count
 */
function set_image_width() {
    global $cols;
    $size = '1150-size';

    if ( isset( $cols ) ) {
        switch ($cols) :
            case 2:
                $size = '1000-size';
                break;

            case 3:
            case 4:
                $size = '700-size';
                break;

            case 5:
            case 6:
                $size = '500-size';
                break;
        endswitch;
    } 

    return $size;
}