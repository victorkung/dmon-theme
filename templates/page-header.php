<?php use Roots\Sage\Titles; ?>


<?php
  if (is_front_page() ) {
    // Don't display page title if it's the homepage
  } else { ?>

    <div class="page-title">
      <div style="background: url(<?= the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover" class="row">
        <div class="container">
          <div class="lead">
            <h1><?= Titles\title(); ?></h1>

            <!-- Tagline uses ACF 'page_subtitle' -->
            <?php
              if(get_field('page_subtitle'))
              {
                echo '<p>' . get_field('page_subtitle') . '</p>';
              }
            ?>

          </div>
        </div>
      </div>
    </div>

  <?php
  }
?>