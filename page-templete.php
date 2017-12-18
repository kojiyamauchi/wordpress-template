<?php
/*
Template Name: Paged Template Page
*/
?>
<?php get_header(); ?>
<main>
  <?php while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
