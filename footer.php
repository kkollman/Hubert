<!-- close container for the main page -->
</div>


<footer class="site-footer">

  <nav class="nav nav__menu nav__footer">
    <?php

    $menu_elements = array(
      'theme_location' => 'footer',
    );

    wp_nav_menu($menu_elements);
    ?>
  </nav>

  <p>
    <?php bloginfo('name'); ?> – &copy <?php echo date('Y');  ?>
  </p>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

</script>
<?php wp_footer(); ?>
</body>
</html>
