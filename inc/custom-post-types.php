<?php 
defined( 'ABSPATH' ) || exit;

// Custom Post type will register here


function vh_register_custom_cpt(){

    register_post_type( 'news',    
        [
            'labels' => array(
                'name' => __( 'News', 'vh' ),
                'all_items' => __( "All News", 'vh' ),
                'singular_name' => __( "News", 'vh' )
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-edit-large',
            'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
            'menu_position' => 6
        ]
    );

}

add_action('init', 'vh_register_custom_cpt');

// Hooking up our function to theme setup

