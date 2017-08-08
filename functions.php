<?php
/**
 * Wordpress Kit functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

/**
 * Path to theme
 */
define( 'THEME_PATH', get_template_directory() );
define( 'THEME_PATH_URI', get_template_directory_uri() );


/**
 * Path to includes folder
 */
define( 'THEME_INC_PATH', THEME_PATH . '/inc/' );
define( 'THEME_INC_PATH_URI', THEME_PATH_URI . '/inc/' );


/**
 * Path to views
 */
define( 'THEME_VIEWS', THEME_PATH . '/views/' );
define( 'THEME_VIEWS_URI', THEME_PATH_URI . '/views/' );


/**
 * Path to assets
 */
define( 'THEME_ASSETS', THEME_PATH . '/assets/' );
define( 'THEME_ASSETS_URI', THEME_PATH_URI . '/assets/' );


/**
 * Setup theme
 *
 * 1. Load languages
 * 2. Add default posts and comments RSS feed links to head.
 * 3. Add title to head
 * 4. Support post-thumbnails
 * 5. Add theme support HTML5
 * 6. Custom login logo
 * 7. Footer copyrate
 * 8. Change default responce when user fills wrong log/pass
 * 9. Remove WP version
 *10. F**k off bad responces
 *11. Forbid to edit theme's and plug-ins' code
 */
include THEME_INC_PATH . '/common/setup.php';


/**
 * Enqueue assets
 *
 * 1. Enqueue styles and scripts
 * 2. Include JS variables
 */
include THEME_INC_PATH . '/common/enqueue.php';


/**
 * Product post type
 */
include THEME_INC_PATH . '/post-types/product.php';


/**
 * Testimonial post type
 */
include THEME_INC_PATH . '/post-types/testimonial.php';


/**
 * Templates post type
 */
include THEME_INC_PATH . '/post-types/template.php';


/**
 * ACF Options
 *
 * 1. Include ACF Pro
 * 2. Include ACF Accordion
 */
include_once THEME_INC_PATH . '/common/acf.php';


/**
 * ACF Option page: Primary Styles
 */
include THEME_INC_PATH . '/option-pages/primary-styles.php';


/**
 * Mailbox
 *
 * 1. Register AJAX functions for send messages
 */
include THEME_INC_PATH . '/features/mailbox.php';


/**
 * Seo data
 *
 * Prints SEO meta data into <head>
 */
include THEME_INC_PATH . '/features/seo-data.php';

/**
 * Navigations
 */
include THEME_INC_PATH . '/features/navigations.php';

/**
 * Image sizes
 */
include THEME_INC_PATH . '/features/image-sizes.php';

/**
 * Add additional myme types
 *
 * 1. SVG
 */
include THEME_INC_PATH . '/features/myme-types.php';

/**
 * Breadcrumbs
 */
include THEME_INC_PATH . '/snippets/breadcrumbs.php';

/**
 * Common fetures
 *
 * Full list:
 * - create_style_prefix()
 * - transform_name()
 * - adapt_image()
 * - print_content_card_border()
 * - generate_random_string()
 * - crop_content()
 * - generate_classlist()
 */
include THEME_INC_PATH . '/snippets/common.php';

/**
 * Paningation
 */
include THEME_INC_PATH . '/snippets/paningation.php';


/**
 * Theme option styling pages
 */
include_once THEME_INC_PATH . '/stylings/init.php';


/**
 * Init local fields
 */
include THEME_INC_PATH . '/local-fields/init.php';


/**
 * Plugin activation
 *
 * This code can force-activate nessesarily files.
 * Also it can make plugins "recomended to install" 
 *
 * Plugins which will be recomended after setup this theme:
 * 1. SEO Yoast and add-on ACF Content Analysis
 * 2. Dublicate page
 * 3. Polylang
 * 4. Rus to lat
 * 5. True Instagram
 * 6. Types
 * 7. WP BackitUP
 * 8. GitHub Updater
 */
include THEME_INC_PATH . '/common/class-tgm-plugin-activation.php';


/**
 * Functions related exclusively with Hero Area
 *
 * List of functons:
 * - get_heroarea_title_from_acf()
 * - get_heroarea_bg_from_acf()
 */
include THEME_INC_PATH . '/api/hero-area.php';


/**
 * Functions related exclusively with Hero Area
 *
 * List of functons:
 * - get_section_background_attrs()
 */
include THEME_INC_PATH . '/api/primary-content.php';