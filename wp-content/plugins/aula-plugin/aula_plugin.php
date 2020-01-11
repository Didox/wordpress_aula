<?php
/**
 * Aula plugin
 *
 * Plugin Name: Aula plugin
 * Plugin URI:  http://www.torneseumprogramador.com.br/plugins/aula-plugin
 * Description: Um simples plugin para criar um simples custon post type
 * Version:     1.1.1
 * Author:      Danilo Santos
 * License:     GPLv2 or later
 * Text Domain: aula-plugin
 *
 * Este é um pluin feito na aula do canal torne-se um programador
 * objetivo ensiar, ajudar e motivar novos profissionais no ramo
 * de tecnologia
**/

if ( ! defined( 'ABSPATH' ) ) {
  die( 'Invalid request.' );
}

class AulaPlugin {
  public function __construct() {
    add_action( 'init', Array($this,'create_custom_post_type_modulo') );
  }

  public function create_custom_post_type_modulo() {
    $labels = array(
      'name'                  => _x( 'Aula plugins', 'aula_plugins', 'text_domain' ),
      'singular_name'         => _x( 'Aula plugin', 'aula_plugins', 'text_domain' ),
      'menu_name'             => __( 'Aula plugins', 'text_domain' ),
      'name_admin_bar'        => __( 'Aula plugin', 'text_domain' ),
    );

    $args = array(
      'label'                 => __( 'Aula plugin', 'text_domain' ),
      'description'           => __( 'Descrição da aula plugin ', 'text_domain' ),
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

    register_post_type( 'aula_plugin', $args );
  }
  public function activate() {
    #double check
    $this->create_custom_post_type_modulo();

    flush_rewrite_rules();

    # Se vc preciar rodar algo ao iniciar
    // global $wpdb;
    // $wpdb->get_results("INSERT INTO wp_posts (post_author, post_content, post_title, post_status, comment_status, ping_status, post_type, comment_count) VALUES (1,  'Teste Danilo', 'Teste danilo', 'publish', 'open', 'open', 'aula_plugin', 0);");
  }

  public function deactivate() {
    flush_rewrite_rules();
    # Se vc preciar desabilitar algo
  }

  public function uninstall() {
    flush_rewrite_rules();
    global $wpdb;
    $wpdb->get_results("delete from wp_posts where post_type='aula_plugin';");
  }
}

if ( class_exists( 'AulaPlugin' ) ){
  $didoxModulo = new AulaPlugin();
  register_activation_hook( __FILE__, array( $didoxModulo, 'activate' ) );
  register_deactivation_hook( __FILE__, array( $didoxModulo, 'deactivate' ) );
  register_uninstall_hook( __FILE__, array( $didoxModulo, 'uninstall' ) );
}