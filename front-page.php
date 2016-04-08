<!-- Home Page -->


<?php get_template_part('templates/page', 'header'); ?>


<!-- Press Banner -->
<?php if( have_rows('press_banner') ): ?>

  <section class="press-banner row">
    <div class="container clearfix">
      <div class="col-xs-12">

        <?php while( have_rows('press_banner') ): the_row(); 

          // Saving variables
          $text = get_sub_field('press_banner_text');
          $image1 = get_sub_field('press_banner_image_1');
          $image2 = get_sub_field('press_banner_image_2');
          $image3 = get_sub_field('press_banner_image_3');
          $image4 = get_sub_field('press_banner_image_4');
          $image5 = get_sub_field('press_banner_image_5');

        ?>
    
        <?php if( $text ): ?>
          <p><?php echo $text ?></p>
        <?php endif; ?>
        
        <!-- Press Images -->
        <ul class="press-links">

          <?php if( $image1 ): ?>
            <li>
              <a href="http://articles.chicagotribune.com/2000-05-27/business/0005270207_1_nasdaq-stocks-futures-contracts-stock-market" target="_blank">
                <img src="<?php echo $image1 ?>">
              </a>
            </li>
          <?php endif; ?>

          <?php if( $image2 ): ?>
            <li>
              <a href="http://www.chicagobusiness.com/article/20140610/BLOGS11/140619999/oconnor-stepping-down-as-head-of-hyde-park-angels" target="_blank">
                <img src="<?php echo $image2 ?>">
              </a>
            </li>
          <?php endif; ?>


          <?php if( $image3 ): ?>
            <li>
              <a href="http://www.crowdfundinsider.com/2015/12/77733-crowdfunding-counselor-sam-guzik-a-voice-galvanizing-advocating-for-the-crowd/" target="_blank">
                <img src="<?php echo $image3 ?>">
              </a>
            </li>
          <?php endif; ?>

          <?php if( $image4 ): ?>
            <li>
              <a href="http://bluesky.chicagotribune.com/originals/chi-hyde-park-angels-karin-oconnor-steps-down-bsi,0,0.story" target="_blank">
                <img src="<?php echo $image4 ?>">
              </a>
            </li>
          <?php endif; ?>

          <?php if( $image5 ): ?>
            <li>
              <a href="https://drive.google.com/file/d/0B0Y4GDBgkFHTQnQzMVc0RDdUODQ/view?usp=sharing" target="_blank">
                <img src="<?php echo $image5 ?>">
              </a>
            </li>
          <?php endif; ?>
        
        </ul>

      <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>

<?php the_content(); ?>


<!-- CME Letter -->
<div class="cme-letter">


  <!-- Top Section-->

  <?php if( get_field('cme_letter_title') ): ?>
  
    <div class="row">
      <div class="container">
        <div class="col-xs-12 col-sm-7">
          <h3><?php echo get_field('cme_letter_title') ?></h3>

          <?php echo get_field('cme_letter_top_section_text'); ?>
        </div>

        <div class="col-xs-12- col-sm-5">
          <img src="<?php the_field('cme_letter_top_section_image') ?>" alt="Douglas Monieson Portrait" class="portrait">
        </div>
      </div>
    </div>



  <!-- Middle Section: 4 Tiles -->
  <!-- We created a repeater module in ACF for a row of 2 tiles -->

  <?php if( have_rows('cme_letter_middle_section') ): ?>


    <?php while( have_rows('cme_letter_middle_section') ): the_row(); 

      // Saving variables
      $title1 = get_sub_field('tile_1_title');
      $title2 = get_sub_field('tile_2_title');

      $text1 = get_sub_field('tile_1_text');
      $text2 = get_sub_field('tile_2_text');

      $image1 = get_sub_field('tile_1_image');
      $image2 = get_sub_field('tile_2_image');

    ?>  

    <div class="row">
      <div class="container">
        <div class="col-xs-12 col-sm-6">
          <figure class="margin-top">
            <img src="<?php echo $image1 ?>" class="icon">
          </figure>

          <figcaption>
            <?php echo $title1 ?>
          </figcaption>

          <p>
            <?php echo $text1 ?>
          </p>
        </div>

        <div class="col-xs-12 col-sm-6">
          <figure class="margin-top">
            <img src="<?php echo $image2 ?>" class="icon">
          </figure>
          <figcaption>
            <?php echo $title2 ?>
          </figcaption>
          <p>
            <?php echo $text2 ?>
          </p>
        </div>
      </div>
    </div>

    <?php endwhile; ?>

  <?php endif; ?>



    <!-- Bottom Section -->
    <div class="row margin-top">
      <div class="container">
        <div class="col-xs-12 col-sm-6">

          <?php echo get_field('cme_letter_bottom_section_text'); ?>

        </div>

        <div class="col-xs-12- col-sm-6"><img src="<?php the_field('cme_letter_bottom_section_image') ?>" alt="Douglas Monieson Family Traders" class="family-portrait"></div>
      </div>
    </div>


<?php endif; ?>







</div>




<?php get_template_part('templates/pre-footer') ?>


