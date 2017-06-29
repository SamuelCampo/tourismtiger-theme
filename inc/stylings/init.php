<?php
/**
 * Initialization Styling Cards Classes
 *
 * This file does next^
 * - Register functions related to styles Classes
 * - Hang wordpress hooks
 * - Includes Styling Classes
 */


/**
 * Returns path to styling json file of that site
 * @return string
 */
function get_styling_json_path() {
	$site_url  = get_bloginfo( 'url' );
	$site_url  = explode( '://', $site_url )[1];
	$json_path = get_template_directory() . '/json';
	$site_path = $json_path . '/' . $site_url;
	$path      = $site_path . '/';

	/* Check json dir, create that */
	if ( !is_dir( $json_path ) )
	    mkdir( $json_path, 0777, true );

	/* Check site dir, create that */
	if ( !is_dir( $site_path ) )
	    mkdir( $site_path, 0777, true );

	return $path;
}


/**
 * Function creates new style in espesial json file.
 * Calls after creating a table in json file
 * And then someone clicks on button 'add style'
 * 
 * @return intenger
 */
function add_acf_style_row( $slug = '' ) {
	
	if ( $slug === '' ) 
		$slug = isset( $_POST['slug'] ) ? $_POST['slug'] : 'empty';

	$path     = get_styling_json_path() . 'styles-count.json';
	$is_json  = file_exists( $path );

	if ( $is_json ) :
		$json     = file_get_contents( $path );
		$jsonData = json_decode( $json, true );

		/**
		 * If there isn't current class data
		 * set initial value and rewrite a file
		 */
		if ( ! array_key_exists( $slug, $jsonData ) ) :
			$jsonData[$slug] = 1;
		elseif ( $jsonData[$slug] < 11 ) :
			$jsonData[$slug] = $jsonData[$slug] + 1;
		endif;

		$jsonEncoded = json_encode( $jsonData );
		$handle      = fopen($path, 'w+');
		fwrite($handle, $jsonEncoded);
		fclose($handle);
	endif;

	return null;
}


/**
 * Function removes the latest row from json file.
 * Calls then someone clicks on button 'remove card'
 * 
 * @return intenger
 */
function remove_acf_style_row( $slug = '' ) {
	
	if ( $slug === '' ) 
		$slug = isset( $_POST['slug'] ) ? $_POST['slug'] : 'empty';

	$path     = get_styling_json_path() . 'styles-count.json';
	$is_json  = file_exists( $path );

	if ( $is_json ) :
		$json     = file_get_contents( $path );
		$jsonData = json_decode( $json, true );

		/**
		 * If there isn't current class data
		 * set initial value and rewrite a file
		 */
		if ( $json ) :
			if ( ! array_key_exists( $slug, $jsonData ) ) :
				$jsonData[$slug] = 1;

				$handle = fopen($path, 'w+');
				fwrite($handle, $jsonData);
				fclose($handle);
			elseif ( $jsonData[$slug] > 1 ) :
				$jsonData[$slug] = $jsonData[$slug] - 1;

				$handle = fopen($path, 'w+');
				fwrite($handle, $jsonData);
				fclose($handle);
			endif;
		endif;
	endif;

	return null;
}


/**
 * Get count of rows in json file
 * 
 * @return integer 
 */
function get_acf_styles_count( $slug = '' ) {
	
	if ( $slug === '' ) 
		$slug = isset( $_POST['slug'] ) ? $_POST['slug'] : 'empty';

	$path     = get_styling_json_path() . 'styles-count.json';
	$is_json  = file_exists( $path );
	$count    = 1;

	if ( $is_json ) : 
		$json     = file_get_contents( $path );
		$jsonData = json_decode( $json, true );


		if ( $jsonData === null ) {
			return 1;
		}

		/**
		 * If there isn't current class data
		 * set initial value and rewrite a file
		 */
		if ( ! array_key_exists( $slug, $jsonData ) ) :
			$jsonData[$slug] = $count;
			$jsonEncoded     = json_encode( $jsonData );
			$handle = fopen($path, 'w+');
			fwrite($handle, $jsonEncoded);
			fclose($handle);

		/**
		 * Just get a count
		 */
		elseif ( array_key_exists( $slug, $jsonData ) ) :
			$count = $jsonData[$slug];
		endif;
	endif;

	return $count;
}


/**
 * JavaScript functions 
 * for option page "Manage styles"
 */
function acf_styles_ajax_option_page() { 
	?>
	<script>
		jQuery(document).ready(function($) {

			/** 
			 * AJAX Request
			 */
			function request_styles( data, reload ) {
				jQuery.post( ajaxurl, data, function(response) {

					if ( reload ) { 
						location.reload();
					}

					return true;
				});
			}

			/**
			 * Add flexi style
			 */
			$('#add-style').click(function(){
				var object = $(this).attr('data-style-object');

				var data = {
					action: 'add_acf_style_row',
					slug: object
				};

				request_styles( data, true );

				return false;
			});

			/**
			 * Remove flexi style
			 */
			$('#remove-style').click(function(){
				var object = $(this).attr('data-style-object');

				var data = {
					action: 'remove_acf_style_row',
					slug: object
				};

				request_styles( data, true );

				return false;
			});
		});
	</script>
	<?php
}


/**
 * Return list of available styles 
 * 
 * @param  string $name class slug
 * @return array       
 */
function get_acf_styles_list( $name = '' ) {
	$name  = transform_name( $name, '_' );
	$count = get_acf_styles_count( $name );
	$list  = array();

	for ( $i = 1; $i <= $count; $i++ ) {
		$number = $name . '_style-' . create_style_prefix($i);
		$list[$number] = 'Style ' . $i;
	}  

	return $list;
}


/**
 * Call back which builds 
 * HTML of "Manage styles option page"
 */
function render_styles_option_page( $field = array() ) {

	$other_attributes = array( 'data-style-object' => $field['styling_group'] );

	$button_add = get_submit_button( 
		'Add style', 
		'primary', 
		'add-style', 
		false,
		$other_attributes
	);

	$count = get_acf_styles_count( $field['styling_group'] );

	if ( $count <= 1 ) 
		$other_attributes['disabled'] = 'disabled';

	$button_remove = get_submit_button( 
		'Remove latest group', 
		'delete', 
		'remove-style', 
		false,
		$other_attributes
	); 

?>

	<form metod="POST">
		<p><?php echo $button_add . ' ' . $button_remove; ?></p>
	</form>

<?php 
}


/* Register AJAX function add style */
add_action( 'wp_ajax_add_acf_style_row', 'add_acf_style_row' );

/* Register AJAX function remove style */
add_action( 'wp_ajax_remove_acf_style_row', 'remove_acf_style_row' );

/* Register AJAX function count styles */
add_action( 'wp_ajax_get_acf_styles_count', 'get_acf_styles_count' );

/* Enqueue AJAX functions on manage option page */
add_action( 'admin_print_footer_scripts', 'acf_styles_ajax_option_page', 99 );

/**
 * Functions which generate css code
 */
include_once( THEME_INC_PATH . 'stylings/api.php' );

/**
 * Abstract class StylingCard
 */
include_once( THEME_INC_PATH . 'stylings/class-styling-card.php' );

/**
 * Hero Area Styling Class
 */
include_once( THEME_INC_PATH . 'stylings/class-styling-heroarea.php' );



?>