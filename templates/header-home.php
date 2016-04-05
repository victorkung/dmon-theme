<!-- TODOs -->
<!-- Update Header Text -->

<div class="body-container">
  <div class="home-header row" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
    <header class="row main-navigation">
      <div class="container">
        <div class="col-xs-12">
          <div class="logo"><a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></<div></div>
          <nav class="desktop-nav nav-primary">

            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation']);
            endif;
            ?>

          </nav>


          <nav class="mobile-nav"><a href="#">
            <img src="<?= get_template_directory_uri() . '/dist/images/menu-icon-white.png'; ?>" width="30"></a>
          </nav>
          
          <ul class="mobile-nav-popup row"><a id="close-btn">X</a>
            <div class="col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8">

              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation']);
              endif;
              ?>

            </div>
          </ul>
        </div>
      
      </div>
    </header>
    
    <section class="row cta">
      <div class="container">
        <div class="col-xs-12 col-md-6">

          <!-- MAKE THIS SECTION DYNAMIC -->
          <h2>To respond to industry challenges new voices must be heard</h2>
          <a href="http://www.proxyvote.com/" target="_blank" class="button">VOTE NOW</a>
          <div class="padding"></div>

        </div>
      </div>
    </section>

  </div>
</div>
