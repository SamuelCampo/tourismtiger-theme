<?php 
/**
 * Paningation
 *
 * @package Dev_Theme
 * @author  team-name
 */

function wp_corenavi() {
    global $wp_query;

    $pages = '';
    $html  = '';
    $max   = $wp_query->max_num_pages;

    if ( ! $current = get_query_var('paged') ) 
        $current = 1;

    $a['base']    = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total']   = $max;
    $a['current'] = $current;

    /**
     * $total
     * @var 1 - Return a text "Page N of N" || 0 - no, thanks
     */
    $total = 0; 

    /**
     * Common
     */
    $a['mid_size']  = 1; 
    $a['end_size']  = 1; 
    $a['prev_text'] = '&laquo;';
    $a['next_text'] = '&raquo;'; 

    if ( $max > 1 ) 
        $html .= '<div class="navigation">';

    if ( $total == 1 && $max > 1 ) 
        $pages = '<span class="pages">Page ' . $current . ' of ' . $max . '</span>'."\r\n";

    $html .= $pages . paginate_links($a);

    if ($max > 1) 
        $html .= '</div>';

    return $html;
}

?>