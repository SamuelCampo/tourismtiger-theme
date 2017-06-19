<?php 
/**
 * Example post type
 *
 * Change Product to post type name and product to Slugname
 *
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

add_action('init', 'init_product_post_type');

function init_product_post_type(){

    register_post_type('product', array(
        'labels'                 => array(
            'name'               => 'Products', 
            'singular_name'      => 'Product', 
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new Product',
            'edit_item'          => 'Edit Product',
            'new_item'           => 'New Product',
            'view_item'          => 'View Product',
            'search_items'       => 'Find Product',
            'not_found'          => 'There are not any Product',
            'not_found_in_trash' => 'There are not any Product in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Product'

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