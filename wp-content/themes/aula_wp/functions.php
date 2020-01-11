<?php
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/custom_post_type/aula.php';
require get_template_directory() . '/shortcode/render_aulas.php';
require get_template_directory() . '/shortcode/render_api_cep.php';
require get_template_directory() . '/shortcode/render_api_pedidos.php';
