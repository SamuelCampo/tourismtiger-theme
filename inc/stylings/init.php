<?php
/**
 * Initialization Styling Cards Classes
 *
 * This file does following things:
 * - Register functions related to styles Classes
 * - Hang wordpress hooks
 * - Includes Styling Classes
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
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
 * Get list of available style groups.
 * Used for local fields choise lists
 */
function get_available_styles_list( $slug = '' ) {
	$count = get_acf_styles_count( $slug );
	$array = array();

	for ( $i = 1; $i <= $count; $i++ ) :
		$class = "{$slug}-{$i}";
		$array[$class] = "Style {$i}";
	endfor;

	return $array;
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
			 * Add styling group
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
			 * Remove stuling group
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

			/**
			 * Refresh styles
			 */
			$('#refresh-style').click(function(){
				var data = {
					action: 'refresh_styling_cache'
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

	$count = get_acf_styles_count( $field['styling_group'] );

	/* Add button */
	$attributes = array( 'data-style-object' => $field['styling_group'] );
	$button_add = get_submit_button( 
		'Add style', 
		'delete', 
		'add-style', 
		false,
		$attributes
	);


	/* Remove button */
	$attributes = array( 'data-style-object' => $field['styling_group'] );
	if ( $count <= 1 ) $attributes['disabled'] = 'disabled';

	$button_remove = get_submit_button( 
		'Remove latest group', 
		'delete', 
		'remove-style', 
		false,
		$attributes
	); 


	/* Refresh button */
	$attributes = array( 'style' => 'width:100%;' );
	$button_refresh = get_submit_button( 
		'Refresh styles cache', 
		'primary', 
		'refresh-style', 
		false,
		$attributes
	); 

?>

	<form metod="POST">
		<p><?php echo $button_add . ' ' . $button_remove; ?></p>
		<p><?php echo $button_refresh; ?></p>
	</form>

<?php 
}


/**
 * Get style sheet
 */
function get_styling_stylesheet_file() {
	$site_url      = get_bloginfo( 'url' );
	$site_name     = explode( '://', $site_url )[1];
	$assets_path   = get_template_directory() . '/assets';
	$css_path      = $assets_path . '/css';
	$self_css_dir  = $css_path . '/' . $site_name;
	$self_css_file = $self_css_dir . '/styling.css';

	/* Check assets dir, create that */
	if ( !is_dir( $assets_path ) )
	    mkdir( $assets_path, 0777, true );

	/* Check css dir, create that */
	if ( !is_dir( $css_path ) )
	    mkdir( $css_path, 0777, true );

	/* Check self dir, create that */
	if ( !is_dir( $self_css_dir ) )
	    mkdir( $self_css_dir, 0777, true );

	/* Create file */
	if ( !file_exists( $self_css_file ) ) {
		$fp = fopen($self_css_file, "w"); 
	    fwrite($fp, "// Init");
	    fclose($fp);
	}

	return $self_css_file;	
}


/**
 * Get stylesheet uri
 *
 * @return string
 */
function get_styling_stylesheet_uri() {
	$site_url   = get_bloginfo( 'url' );
	$site_name  = explode( '://', $site_url )[1];
	$output     = get_template_directory_uri() . '/assets/css/' . $site_name;

	return $output;
}


/**
 * Re-build css and input that to styling file
 *  
 * @return bool true
 */
function refresh_styling_cache() {
	$file = get_styling_stylesheet_file();

	// Generate css
	$objects = array (
		HeroArea::get_css()
	);

	$input = implode($objects);

	$handle = fopen($file, 'w');
	fwrite($handle, $input);
	fclose($handle);

	return true;
}


/* Register AJAX function add style */
add_action( 'wp_ajax_add_acf_style_row', 'add_acf_style_row' );

/* Register AJAX function remove style */
add_action( 'wp_ajax_remove_acf_style_row', 'remove_acf_style_row' );

/* Register AJAX function count styles */
add_action( 'wp_ajax_get_acf_styles_count', 'get_acf_styles_count' );

/* Enqueue AJAX functions on manage option page */
add_action( 'admin_print_footer_scripts', 'acf_styles_ajax_option_page', 99 );

/* Create styling file */
add_action( 'init', 'get_styling_stylesheet_file' );

/* Refresh styling cache */
add_action( 'wp_ajax_refresh_styling_cache', 'refresh_styling_cache' );

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