<?php
/**
 * Wordpress Kit functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dev_Theme
 * @author  team-name
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
include THEME_PATH . 'common/setup.php';


/**
 * Enqueue assets
 *
 * 1. Enqueue styles and scripts
 * 2. Include JS variables
 */
include THEME_PATH . 'common/enqueue.php';


/**
 * Product post type
 */
include THEME_PATH . 'post-types/product.php';


/**
 * Testimonial post type
 */
include THEME_PATH . 'post-types/testimonial.php';


/**
 * ACF Options
 *
 * 1. Include ACF Pro
 * 2. Include ACF Accordion
 */
include THEME_PATH . 'common/acf.php';


/**
 * ACF Option page: Primary Styles
 */
include THEME_PATH . 'option-pages/primary-styles.php';


/**
 * ACF Local Fields for Primary Content 
 */
include THEME_PATH . 'local-fields/primary-content.php';


/**
 * ACF Local Fields for Hero Area
 */
include THEME_PATH . 'local-fields/hero-area.php';


/**
 * ACF Local Fields for Product page
 */
include THEME_PATH . 'local-fields/product-page.php';


/**
 * ACF Local Fields for Testimonials page
 */
include THEME_PATH . 'local-fields/testimonials-page.php';


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
include THEME_PATH . 'common/class-tgm-plugin-activation.php';


/**
 * Mailbox
 *
 * 1. Register AJAX functions for send messages
 */
include THEME_PATH . 'features/mailbox.php';

/**
 * Navigations
 */
include THEME_PATH . 'features/navigations.php';

/**
 * Image sizes
 */
include THEME_PATH . 'features/image-sizes.php';

/**
 * Add additional myme types
 *
 * 1. SVG
 */
include THEME_PATH . 'features/myme-types.php';

/**
 * Breadcrumbs
 */
include THEME_PATH . 'snippets/breadcrumbs.php';

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
 */
include THEME_PATH . 'snippets/common.php';

/**
 * ACF css helper functions 
 *
 * Full list:
 * - get_font_css()
 * - get_font_corner_style()
 * - get_font_border_styles()
 */
include THEME_PATH . 'snippets/acf-css-functions.php';

/**
 * Paningation
 */
include THEME_PATH . 'snippets/paningation.php';


