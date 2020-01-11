<?php

// [render_aulas titulo="Aulas do torne-se um programador"]

function render_aulas( $atts ) {
  $html = "";

  $args = array(
    'post_type'  => 'aula',
    'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
  );

  $data = new WP_Query($args);

  if($data->have_posts()) :
    while($data->have_posts())  : $data->the_post();
      $html .= "<div class=\"post-container\" style=\"text-align:left\">";
      $html .= "  <div class='thumb-container'>";
      $html .= "    <a class=\" \" href=\"". get_permalink() ."\"><img class='img-shortcode' src=\"".get_the_post_thumbnail_url()."\" alt=\"\"></a> ";
      $html .= "  </div>";
      $html .= "  <div class='side-title'>";
      $html .= "    <a href=\"". get_permalink() ."\">";
      $html .= "      <h2>". get_the_title() ."</h2>";
      $html .= "      <div style=\"margin-bottom: 20px;\">";
      $html .= "        ". wp_trim_words(strip_shortcodes(get_the_content()), 20) ."";
      $html .= "      </div>";
      $html .= "    </a>";

      if(has_tag()) {
        $html .= "<p class=\"tags\">Palavras-chave: ";

        $tags = get_the_tags(false, ', ');

        foreach ($tags as &$tag):
          $html .= "<a href=\"". get_term_link($tag)."\">";
          $html .= "  ". $tag->name ."";
          $html .= "</a>";
        endforeach;

        $html .= "</p>";
      }
      
      $html .= "  </div>";
      $html .= "</div>";
    endwhile;

    $total_pages = $data->max_num_pages;

    if ($total_pages > 1){
      $html .= "  <div class='paginate-container'>";
  
      $current_page = max(1, get_query_var('paged'));
      $html .= paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'posts_per_page' => 10,
        'prev_text'    => __('« próximo'),
        'next_text'    => __('anterior »'),
      ));
      
      $html .= "  </div>";
    }  
  else
    $html .= "<h3>" . _e('404 &#58; Conteúdo não encontrado', '') . "</h3>";
  endif;

  wp_reset_postdata();

  return "<div style='text-align:center;padding:20px'><h1>{$atts["titulo"]}</h1>" . $html . "</div>";
}

add_shortcode( 'render_aulas', 'render_aulas' );

add_action('register_shortcode_ui','add_shortcode_ui_aulas');
function add_shortcode_ui_aulas(){
  shortcode_ui_register_for_shortcode('render_aulas',array(
    'label'=>'Aulas',
    'listItemImage'=>'dashicons-list-view'
  ));
}








