<?php get_header(); ?>
<div class="container" style="padding-top:30px;">
  <?php
  while (have_posts()) {
    the_post();
  ?>
    <h1><?php the_title() ?></h1>
    <h3><?php the_field('modulo'); ?></h3>
    <div class="materias">
      <?php the_content(); ?>
    </div>

    <?php if(has_category()) { ?>
      <p class="categories">Categorias: <?php the_category(', ') ?></p>
    <?php } ?>

    <?php if(has_tag()) { ?>
      <p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
    <?php } 
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    ?>
  <?php } ?>
</div>
<?php get_footer(); ?>