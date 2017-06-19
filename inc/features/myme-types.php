<?php  
/**
 * Add additional myme types
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function add_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'add_myme_types', 1, 1);

?>