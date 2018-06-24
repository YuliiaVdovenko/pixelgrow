<?php
add_action( 'init', 'brands_register' );


function brands_register() {
    $labels = array(
        'name'               => _x( 'Brands', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Brands', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Brands', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Brands', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Brand item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Brand item', 'understrap' ),
        'new_item'           => __( 'New Brand item', 'understrap' ),
        'edit_item'          => __( 'Edit Brand item', 'understrap' ),
        'view_item'          => __( 'View Brand item', 'understrap' ),
        'all_items'          => __( 'All Brand items', 'understrap' ),
        'search_items'       => __( 'Search Brand items', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Brand items:', 'understrap' ),
        'not_found'          => __( 'No Brands members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Brands members found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Brands', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Brands' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor')
    );

    register_post_type( 'brands', $args );
}

add_action( 'init', 'projects_register' );


function projects_register() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Projects', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Project item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Project item', 'understrap' ),
        'new_item'           => __( 'New Project item', 'understrap' ),
        'edit_item'          => __( 'Edit Project item', 'understrap' ),
        'view_item'          => __( 'View Project item', 'understrap' ),
        'all_items'          => __( 'All Projects', 'understrap' ),
        'search_items'       => __( 'Search Projects', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'understrap' ),
        'not_found'          => __( 'No Projects found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Projects', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt')
    );

    register_post_type( 'projects', $args );
}

add_action( 'init', 'clients_register' );

function clients_register() {
    $labels = array(
        'name'               => _x( 'Clients', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Clients', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Clients', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Client item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Client item', 'understrap' ),
        'new_item'           => __( 'New Clients item', 'understrap' ),
        'edit_item'          => __( 'Edit Client item', 'understrap' ),
        'view_item'          => __( 'View Client item', 'understrap' ),
        'all_items'          => __( 'All Clients', 'understrap' ),
        'search_items'       => __( 'Search Clients', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Clients:', 'understrap' ),
        'not_found'          => __( 'No Clients found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Clients found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Clients', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Clients' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt')
    );

    register_post_type( 'clients', $args );
}