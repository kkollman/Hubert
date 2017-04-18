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



<?php wp_footer(); ?>
</body>
</html>
