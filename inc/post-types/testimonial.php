<?php 
/**
 * Testimonial post type
 *
 * @package Dev_Theme
 * @author  team-name
 */

add_action('init', 'init_testimonial_post_type');

function init_testimonial_post_type(){

    register_post_type('testimonial', array(
        'labels'                 => array(
            'name'               => 'Testimonials', 
            'singular_name'      => 'Testimonial', 
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new Testimonial',
            'edit_item'          => 'Edit Testimonial',
            'new_item'           => 'New Testimonial',
            'view_item'          => 'View Testimonial',
            'search_items'       => 'Find Testimonial',
            'not_found'          => 'There are not any Testimonial',
            'not_found_in_trash' => 'There are not any Testimonial in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Testimonial'

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