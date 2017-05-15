  <!-- start page footer -->
  <footer class="site-footer col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
    <!-- open widgets row only if any of the footer is active -->
    <?php if (is_active_sidebar('sidebar_footer_1') || is_active_sidebar('sidebar_footer_2') || is_active_sidebar('sidebar_footer_3')) :
    ?>
    <div class="row footer__widgets">
      <!-- load widgets only if they are active -->
      <!-- leftmost footer widget -->
        <div class="footer__widget footer_widget--left widget col-md-4">
          <?php
            if(is_active_sidebar('sidebar_footer_1')) :
              dynamic_sidebar('sidebar_footer_1');
            endif;
          ?>
        </div>
      <!-- middle footer widget -->
        <div class="footer__widget footer_widget--middle widget col-md-4">
          <?php
            if(is_active_sidebar('sidebar_footer_2')) :
              dynamic_sidebar('sidebar_footer_2');
            endif;
          ?>
        </div>
      <!-- rightmost footer widget -->
        <div class="footer__widget footer_widget--right widget col-md-4">
          <?php
            if(is_active_sidebar('sidebar_footer_3')) :
              dynamic_sidebar('sidebar_footer_3');
            endif;
          ?>
        </div>
    </div>
  <?php endif; ?>
    <!-- end of footer widget row -->
    <nav class="nav nav__menu nav__footer">
      <div class="row">
        <!-- show footer navigation -->
        <div class="col-sm-12">
          <?php
          $menu_elements = array(
            'theme_location' => 'footer',
          );
          wp_nav_menu($menu_elements);
          ?>
        </div>
        <!-- show footer navigation -->
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-4">
        <p class="footer__info">
          <?php bloginfo('name'); ?> – &copy <?php echo date('Y');  ?>
        </p>
      </div>
    </div>
  </footer>
  <!-- end page footer -->

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <?php wp_footer(); ?>
  <!-- close main container for page -->
  </div>
  </body>
</html>
