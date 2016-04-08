<!-- TODOs -->
<!-- Disclaimer section -->

<section class="pre-footer row">
  <div class="container">
    <div class="col-xs-12">
  
      <!-- This section can be configured in the Theme Options Footer section -->
      <?php if(get_field('pre_footer_text', 'option')) { ?>
        <p><?php echo the_field('pre_footer_text', 'option') ?></p>
      <?php } ?>

      <a href="http://www.proxyvote.com/" target="_blank" class="button">VOTE NOW</a>
      <div class="padding"></div>
    
    </div>
  </div>
</section>