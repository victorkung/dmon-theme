<!-- TODOs -->
<!-- Options for displaying social media icons -->
<!-- Options for disclaimer text -->

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
          <li>
            <a href="https://twitter.com/dmonieson"> 
              <img src="<?= get_template_directory_uri() . '/dist/images/twitter-icon.png'; ?>"></a>
            </li>
          <li>
            <a href="https://www.linkedin.com/in/douglasmonieson">
              <img src="<?= get_template_directory_uri() . '/dist/images/linkedin-icon.png'; ?>">
            </a></li>
        </ul>
      </div>
    </nav>
    <div class="row disclaimer">
      <div class="col-xs-12">
        <p>
          CME Group Inc. has filed a definitive proxy statement with the Securities and Exchange Commission ("SEC") regarding the Annual Meeting of Shareholders to be held on May 18, 2016. Shareholders of CME Group Inc. are urged to read the definitive proxy statement and any other relevant materials filed by CME Group Inc. with the SEC because they contain, or will contain, important information about CME Group Inc. and the Annual Meeting. The definitive proxy statement and other relevant materials (when they become available), and any other documents filed by CME Group Inc. with the SEC, may be obtained free of charge at the SEC's web site at www.sec.gov. In addition, shareholders may obtain free copies of these documents by contacting CME Group Inc., Shareholder Relations and Membership Services, 20 South Wacker Drive, Chicago, Illinois 60606. Shareholders are urged to read the definitive proxy statement and the other relevant materials (when they become available) before making any voting decision with respect to matters to be acted on at the Annual Meeting.
          
        </p>
        <p>
          The preceding material was prepared and distributed solely by the candidate. The views and opinions expressed therein are solely those of the candidate and do not necessarily reflect the views or opinions of CME Group Inc. or its directors, officers or employees, nor have these views or opinions been approved or sanctioned by any of them.
          
        </p>
      </div>
    </div>
    <div class="row breadcrumbs">
      <div class="col-xs-12"> <a href="http://www.tandemdesigns.co" target="_blank">Created by <span class="border-underline">Tandem Designs</span></a></div>
    </div>
  </div>
</footer>