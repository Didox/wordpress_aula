<?php

// [render_pedido titulo="Renderiza api de Pedido"]

function render_pedido( $atts ) {
  $html = "";

  $url = "http://localhost:3001/pedidos.json";
  $options = array(
    'http'=>array(
      'method'=>"GET",
    )
  );

  $context = stream_context_create($options);
  try {
    $pedidos = json_decode(file_get_contents($url, false, $context), TRUE);
  } catch (Expedidotion $e) {
    $pedidos = array();
  }
  if(count($pedidos) > 0){
    foreach ($pedidos as &$pedido){
      $html .= "<div class=\"post-container\" style=\"text-align:left\">";
      $html .= "  <div class='thumb-container'><b>Pedido ID: </b>" . $pedido["id"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Itens: </b> " . $pedido["itens"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Valor Total: </b> " . $pedido["valor_total"] . "</div>";
      $html .= "</div><hr>";
    }
  }

  return "<div style='text-align:center;padding:20px'><h1>{$atts["titulo"]}</h1>" . $html . "</div>";
}

add_shortcode( 'render_pedido', 'render_pedido' );

add_action('register_shortcode_ui','add_shortcode_ui_pedido');
function add_shortcode_ui_pedido(){
  shortcode_ui_register_for_shortcode('render_pedido',array(
    'label'=>'pedido',
    'listItemImage'=>'dashicons-list-view'
  ));
}








