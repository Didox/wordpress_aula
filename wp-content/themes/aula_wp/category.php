<?php
get_header();
?>

<div class="container-fluid cursos" style="margin-top: 20px">
  <h3 class="curso-h1">Categorias</h3>
  <br>
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
