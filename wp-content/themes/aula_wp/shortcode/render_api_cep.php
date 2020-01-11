<?php

// [render_cep titulo="Renderiza api de CEP"]

function render_cep( $atts ) {
  $html = "";

  $url = "http://localhost:3000/cep";
  $options = array(
    'http'=>array(
      'method'=>"GET",
    )
  );

  $context = stream_context_create($options);
  try {
    $ceps = json_decode(file_get_contents($url, false, $context), TRUE);
  } catch (Exception $e) {
    $ceps = array();
  }
  if(count($ceps) > 0){
    foreach ($ceps as &$cep){
      $html .= "<div class=\"post-container\" style=\"text-align:left\">";
      $html .= "  <div class='thumb-container'><b>Cep: </b>" . $cep["cep"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Endereço: </b> " . $cep["endereco"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Bairro: </b> " . $cep["bairro"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Cidade: </b> " . $cep["cidade"] . "</div>";
      $html .= "  <div class='thumb-container'><b>Estado: </b> " . $cep["estado"] . "</div>";
      $html .= "</div><hr>";
    }
  }

  return "<div style='text-align:center;padding:20px'><h1>{$atts["titulo"]}</h1>" . $html . "</div>";
}

add_shortcode( 'render_cep', 'render_cep' );

add_action('register_shortcode_ui','add_shortcode_ui_cep');
function add_shortcode_ui_cep(){
  shortcode_ui_register_for_shortcode('render_cep',array(
    'label'=>'cep',
    'listItemImage'=>'dashicons-list-view'
  ));
}








