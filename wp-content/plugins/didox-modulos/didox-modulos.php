<?php
/**
 * Didox Modulos
 *
 * Plugin Name: Didox Modulos
 * Plugin URI:  http://www.torneseumprogramador.com.br/plugins/didox-modulos
 * Description: Um simples plugin para criar um simples custon post type
 * Version:     0.0.1
 * Author:      Danilo Aparecido
 * License:     GPLv2 or later
 * Text Domain: didox-modulos
 *
 * Este é um pluin feito na aula do canal torne-se um programador
 * objetivo ensiar, ajudar e motivar novos profissionais no ramo
 * de tecnologia
**/

if ( ! defined( 'ABSPATH' ) ) {
  die( 'Invalid request.' );
}

class DidoxModulo {
  public function __construct() {
    add_action( 'init', Array($this,'create_custom_post_type_modulo') );
  }

  public function create_custom_post_type_modulo() {
    $labels = array(
      'name'                  => _x( 'Modulos', 'modulos', 'text_domain' ),
      'singular_name'         => _x( 'Modulo', 'modulos', 'text_domain' ),
      'menu_name'             => __( 'Modulos', 'text_domain' ),
      'name_admin_bar'        => __( 'Modulo', 'text_domain' ),
    );

    $args = array(
      'label'                 => __( 'modulo', 'text_domain' ),
      'description'           => __( 'Descrição da modulo ', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'), 
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 3,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'menu_icon'             => 'dashicons-format-video',
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',    
    );

    register_post_type( 'modulo', $args );
  }
  public function activate() {
    #double check
    $this->create_custom_post_type_modulo();

    flush_rewrite_rules();

    # Se vc preciar rodar algo ao iniciar
    global $wpdb;
    $wpdb->get_results("INSERT INTO wp_posts (post_author, post_content, post_title, post_status, comment_status, ping_status, post_type, comment_count) VALUES (1,  'Teste Danilo', 'Teste danilo', 'publish', 'open', 'open', 'modulo', 0);");
  }

  public function deactivate() {
    flush_rewrite_rules();
    # Se vc preciar desabilitar algo

    // global $wpdb;
    // $wpdb->get_results("delete from wp_posts where post_type='modulo';");
  }

  public function uninstall() {
    # Se vc preciar apagar algo arquivos ou dados no banco de dados
    // global $wpdb;
    // $wpdb->get_results("delete from wp_posts where post_type='modulo';");
  }
}

if ( class_exists( 'DidoxModulo' ) ){
  $didoxModulo = new DidoxModulo();
  register_activation_hook( __FILE__, array( $didoxModulo, 'activate' ) );
  register_deactivation_hook( __FILE__, array( $didoxModulo, 'deactivate' ) );
  register_uninstall_hook( __FILE__, array( $didoxModulo, 'uninstall' ) );
}

