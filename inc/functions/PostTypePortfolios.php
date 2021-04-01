<?php 
function postTypePortfolio () {
    $labels = array(
        'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Portfolio', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Portfolio', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Portfolio', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Portfolio', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Portfolio', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Portfolio', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Portfolio Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Portfolio encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Portfolio encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolios' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('portfolios', $args);
    add_post_type_support( 'portfolios', 'wps_subtitle' );
}
add_action('init', 'postTypePortfolio');