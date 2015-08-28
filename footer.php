 <?php global $brew_options; ?>
  </section> <!-- main section -->
   <!-- =========================
     GOOGEL MAP 
    ============================== -->
    <!-- <div id="container-fluid">
        <div id="cd-google-map">
            <div id="google-container">
            </div>
            <address class="color-bg">Glen Road, E13 8 London, UK</address>
        </div>
    </div> -->

    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <!-- <div id="sub-floor">
        <div class="container"> -->

      <footer class="footer grey-bg">
        &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>

        <!-- OPTIONAL FOOTER LINKS -->
        <ul class="footer-links small-text">
            <li><a href="" class="dark-text">About</a>
            </li>
            <li><a href="" class="dark-text">Terms</a>
            </li>
            <li><a href="" class="dark-text">Privacy</a>
            </li>
        </ul>

        <!-- SOCIAL ICONS -->
        <ul class="social-icons">
          <?php 
          if (isset($brew_options['facebook-text']) && !empty($brew_options['facebook-text'])) {
            echo '<li><a href="'.$brew_options['facebook-text'].'"><span class="icon-social-facebook transparent-text-dark"></span></a></li>';
          }
          if (isset($brew_options['twitter-text']) && !empty($brew_options['twitter-text'])) {
            echo '<li><a href="'.$brew_options['twitter-text'].'"><span class="icon-social-twitter transparent-text-dark"></span></a></li>';
          }
          if (isset($brew_options['pinterest-text']) && !empty($brew_options['pinterest-text'])) {
            echo '<li><a href="'.$brew_options['pinterest-text'].'"><span class="icon-social-pinterest transparent-text-dark"></span></a></li>';
          }
          if (isset($brew_options['googleplus-text']) && !empty($brew_options['googleplus-text'])) {
            echo '<li><a href="'.$brew_options['googleplus-text'].'"><span class="icon-social-googleplus transparent-text-dark"></span></a></li>';
          }
          if (isset($brew_options['dribbble-text']) && !empty($brew_options['dribbble-text'])) {
            echo '<li><a href="'.$brew_options['dribbble-text'].'"><span class="icon-social-dribbble transparent-text-dark"></span></a></li>';
          }
        ?>
        </ul>

    </footer>

          

    </footer> <!-- end footer -->

    <script>
        /* PRE LOADER */
        jQuery(window).load(function () {
            "use strict";
            jQuery(".status").fadeOut();
            jQuery(".preloader").delay(1000).fadeOut("slow");
        })
    </script>
    

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
