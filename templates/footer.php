<footer class="row">
  <div class="container">
    <nav class="row">
      <div class="col-xs-12 col-sm-10">
        <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation']);
        endif;
        ?>
      </div>
      <div class="col-xs-12 col-sm-2">
        <ul class="social-media-icons">

        <!-- Footer Social Links called using ACF Theme Options - Footer page -->
        <!-- Hence we need to pass in a second variable 'option' so that it will render on the pages -->
        <?php if(get_field('twitter_profile', 'option')) { ?>
          <li>
            <a href="<?php the_field('twitter_profile', 'option'); ?>" target="_blank"> 
              <img src="<?= get_template_directory_uri() . '/dist/images/twitter-icon.png'; ?>"></a>
          </li>
        <?php } ?>

         <?php if(get_field('linkedin_profile', 'option')) { ?>
          <li>
            <a href="<?php the_field('linkedin_profile', 'option'); ?>" target="_blank"> 
              <img src="<?= get_template_directory_uri() . '/dist/images/linkedin-icon.png'; ?>"></a>
          </li>
        <?php } ?>

        </ul>
      </div>
    </nav>

    <!-- Footer Disclaimer called using ACF 'footer_disclaimer' -->
    <?php if(get_field('footer_disclaimer')) { ?>
      <div class="row disclaimer">
        <div class="col-xs-12">

        <?php echo get_field('footer_disclaimer'); ?>

        </div>
      </div>
    <?php } ?>


    <div class="row breadcrumbs">
      <div class="col-xs-12"> <a href="http://www.tandemdesigns.co" target="_blank">Created by <span class="border-underline">Tandem Designs</span></a></div>
    </div>
  </div>
</footer>