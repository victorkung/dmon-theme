<?php
/**
 * Template Name: Contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'contact'); ?>
  <?php get_template_part('templates/pre-footer') ?>
<?php endwhile; ?>

