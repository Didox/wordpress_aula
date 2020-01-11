<?php
get_header();
?>

<div class="container-fluid cursos" style="margin-top: 20px">
  <div style="text-align: center;margin-top: 50px;">
    <h1><?php _e( 'Resultado de busca para:'); ?> <?php echo get_search_query(); ?></h1>
  </div>

  <div class="container">
    <?php
    while ( have_posts() ) : the_post(); ?>
      <a href="<?php echo get_permalink(); ?>" class="link-aula">
        <h4>
          <?php the_title(); ?>
        </h4>
        <div style="margin-bottom: 20px;">
          <?php echo wp_trim_words( strip_shortcodes(get_the_content()), 20 ) ?>
        </div>
        <?php if(has_tag()) { ?>
          <p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
        <?php } ?>
      </a>
      <hr>
    <?php endwhile; ?>

    <div class="paginacao">
      <?php echo paginate_links() ?>
    </div>
  </div>
</div>

<?php
get_footer();