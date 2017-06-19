<?php 
/**
 * Example post type
 *
 * Change _EXAMPLE_ to post type name and _EXAMPLESLUG_ to Slugname
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

add_action('init', 'init__EXAMPLESLUG__post_type');

function init__EXAMPLESLUG__post_type(){

    register_post_type('_EXAMPLESLUG_', array(
        'labels'                 => array(
            'name'               => '_EXAMPLE_', 
            'singular_name'      => '_EXAMPLE_', 
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new _EXAMPLE_',
            'edit_item'          => 'Edit _EXAMPLE_',
            'new_item'           => 'New _EXAMPLE_',
            'view_item'          => 'View _EXAMPLE_',
            'search_items'       => 'Find _EXAMPLE_',
            'not_found'          => 'There are not any _EXAMPLE_',
            'not_found_in_trash' => 'There are not any _EXAMPLE_ in trash',
            'parent_item_colon'  => '',
            'menu_name'          => '_EXAMPLE_'

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
        'menu_position'      => 6,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );

}

?>