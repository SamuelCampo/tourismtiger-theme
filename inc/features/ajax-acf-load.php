<?php 
/**
 * AJAX Load ACF fields
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */


// TODO: TEST


add_action('wp_ajax_ajax_acf_load', 'ajax_acf_load');
add_action('wp_ajax_nopriv_ajax_acf_load', 'ajax_acf_load');

function ajax_acf_load() {
	
	/**
	 * Verify current user
	 */
	if ( !isset($_POST['nonce']) || !wp_verify_nonce( $_POST['nonce'], 'field_nonce' ) ) :
		echo json_encode( array( 'content' => 'Please wait...', 'more' => false, 'offset' => 1 ) );
		exit;
	endif;
	
	/**
	 * If post ID or offset was missed, return promisse 
	 */
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) :
		echo json_encode( array( 'content' => 'Please wait...', 'more' => false, 'offset' => 1 ) );
		exit;
	endif;

	/**
	 * Common variables
	 */
	$show    = 1; 
	$start   = $_POST['offset'];
	$end     = $start + $show;
	$post_id = $_POST['post_id'];
	$field   = $_POST['field'];

	ob_start();

	if ( have_rows( $field, $post_id ) ) :
		$total = count( get_field( $field, $post_id ) );
		$count = 0;

		while ( have_rows( $field, $post_id ) ) :
			the_row();

			if ( $count < $start ) :
				$count++;
				continue;
			endif;

			// include file

			$count++; 
			if ($count == $end) break; 
		endwhile;
	endif;

	$content = ob_get_clean();

	$more = false;
	if ($total > $count) $more = true;

	echo json_encode( array( 'content' => $content, 'more' => $more, 'offset' => $end ) );
	exit;

}


?>