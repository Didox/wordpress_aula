<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; else: ?>
  <div class="artigo">
     <h2>Nada Encontrado</h2>
     <p>Erro 404</p>
     <p>Pagina não encontrada.</p>
  </div>
<?php endif; ?>