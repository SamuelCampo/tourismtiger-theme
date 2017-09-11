<?php  
/**
 * Add additional myme types
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

function add_mime_types($mime_types){
    $mime_types['svg']   = 'image/svg+xml';
    $mime_types['eot']   = 'application/octet-stream'; 
    $mime_types['ttf']   = 'application/octet-stream'; 
    $mime_types['woff']  = 'application/font-woff'; 
    $mime_types['woff2'] = 'application/octet-stream'; 
    return $mime_types;
}
add_filter('upload_mimes', 'add_mime_types', 1, 1);

?>