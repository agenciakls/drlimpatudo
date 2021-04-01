<?php 
function postTypeDepoimentos () {
    $labels = array(
        'name'               => _x( 'Depoimentos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Depoimentos', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Depoimentos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Depoimentos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Depoimentos', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Depoimento', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Depoimento', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Depoimento', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Depoimento', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Depoimentos', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Depoimentos Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Depoimentos encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Depoimentos encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'depoimentos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('depoimentos', $args);
    add_post_type_support( 'depoimentos', 'wps_subtitle' );
}
add_action('init', 'postTypeDepoimentos');