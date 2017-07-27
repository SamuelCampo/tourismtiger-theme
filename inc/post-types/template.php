<?php 
/**
 * Example post type
 *
 * Change Template to post type name and template to Slugname
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

add_action('init', 'init_template_post_type');

function init_template_post_type(){

    register_taxonomy('template-type', array('template'), array(
        'label'                 => 'Template type', 
        'labels'                => array(
            'name'              => 'Template types',
            'singular_name'     => 'Template type',
            'search_items'      => 'Search Template types',
            'all_items'         => 'All Types'
        ),
        'public'                => true,
        'show_in_nav_menus'     => false, 
        'show_ui'               => true, 
        'show_tagcloud'         => false, 
        'hierarchical'          => true,
        'show_admin_column'     => false,
        'has_archive'           => true,
    ) );

    /**
     * Setup default categories
     */
    wp_insert_term( 'Section', 'template-type', array( 'slug' => 'section' ) );
    wp_insert_term( 'Row', 'template-type', array( 'slug' => 'row' ) );
    wp_insert_term( 'Product section', 'template-type', array( 'slug' => 'product-section' ) );
    wp_insert_term( 'Sidebar widget', 'template-type', array( 'slug' => 'sidebar-widget' ) );

    register_post_type('template', array(
        'labels'                 => array(
            'name'               => 'Templates', 
            'singular_name'      => 'Template', 
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new Template',
            'edit_item'          => 'Edit Template',
            'new_item'           => 'New Template',
            'view_item'          => 'View Template',
            'search_items'       => 'Find Template',
            'not_found'          => 'There are not any Template',
            'not_found_in_trash' => 'There are not any Template in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Templates'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-welcome-widgets-menus'
    ) );

}

?>