<?php

function custom_post_type_aula() {

	$labels = array(
		'name'                  => _x( 'Aulas', 'Aulas', 'text_domain' ),
		'singular_name'         => _x( 'Aula', 'Aulas', 'text_domain' ),
		'menu_name'             => __( 'Aulas', 'text_domain' ),
		'name_admin_bar'        => __( 'Aula', 'text_domain' ),
		'archives'              => __( 'Item arquivos', 'text_domain' ),
		'attributes'            => __( 'Item atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os Itens', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar novo item', 'text_domain' ),
		'add_new'               => __( 'Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Aula', 'text_domain' ),
		'description'           => __( 'Descrição da aula ', 'text_domain' ),
		'labels'                => $labels,
        'supports' 				=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'), 
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'menu_icon'           	=> 'dashicons-format-video',
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',    
	);
	register_post_type( 'aula', $args );

}
add_action( 'init', 'custom_post_type_aula', 0 );