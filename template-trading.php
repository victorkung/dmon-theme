<?php
/**
 * Template Name: Trading Experience
 */
?>

<?php get_template_part('templates/page', 'header'); ?>



<div class="two-col-text">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <?php echo get_field('trading_top_section_text'); ?>
      </div>
      <div class="col-xs-12 col-sm-6">
        <img src="<?php the_field('trading_top_section_image') ?>" alt="Douglas Monieson at Work">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <img src="<?php the_field('trading_top_section_image_2') ?>" alt="Douglas Monieson with Senator John McCain">
      </div>
      <div class="col-xs-12 col-sm-6">
        <p class="padding-top">
          <?php echo get_field('trading_top_section_text_2'); ?>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="testimonial">
  <div class="row">
    <div class="container">
      <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
        <blockquote>
          <?php echo get_field('trading_testimonial'); ?>
        </blockquote>
        <cite>
          <?php echo get_field('trading_testimonial_author'); ?>
        </cite>
        <cite>
          <?php echo get_field('trading_testimonial_author_role'); ?>
        </cite>
      </div>
    </div>
  </div>
</div>

<div class="two-col-text">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-offset-2 col-sm-8">
        <h4>
          <?php echo get_field('trading_bottom_section_title'); ?>
        </h4>
        <?php echo get_field('trading_bottom_section_text'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('templates/pre-footer') ?>
