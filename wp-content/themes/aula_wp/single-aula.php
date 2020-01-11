get_header();
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
  <?php } ?>
</div>
<?php get_footer(); ?>