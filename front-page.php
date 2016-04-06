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

<?php get_template_part('templates/pre-footer') ?>


