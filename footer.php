<!-- close container for the main page -->
</div>

<!-- start page footer -->
<footer class="site-footer container">

    <!-- show blog info -->
    <nav class="row nav nav__menu nav__footer">
      <div class="col-sm-4 footer__info">
        <p>
          <?php bloginfo('name'); ?> – &copy <?php echo date('Y');  ?>
        </p>
      </div>
    <!-- end blog info -->
    <!-- show footer navigation -->
      <div class="col-sm-8">
        <?php
        $menu_elements = array(
          'theme_location' => 'footer',
        );
        wp_nav_menu($menu_elements);
        ?>
      </div>
      </nav>

    <!-- show footer navigation -->

</footer>
<!-- end page footer -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

</script>
<?php wp_footer(); ?>
</body>
</html>
