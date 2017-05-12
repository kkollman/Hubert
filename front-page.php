<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo(charset); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--open main container for frontpage -->
    <div class="container-fluid">
      <div class="cover">
        <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
            <!-- if front-page is set-up -->

            <div class="row">
              <!-- left side of split-screen -->
              <div class="col-sm-6 cover__cover-picture" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                <div class="cover__color-layer">
                </div>
              </div>
              <!-- right side of split-screen -->
              <div class="col-sm-6 cover__cover-text">
                <div class="cover__text-wrapper">
                  <h1 class="cover__cover-title">
                      <?php the_title(); ?>
                  </h1>
                  <div class="cover__cover-subtitle">
                      <?php the_content(); ?>
                  </div>
                  <!-- display the site menu -->
                  <nav class="cover__menu ">
                      <?php
                      $menu_elements = array(
                        'theme_location' => 'cover',
                      );
                      wp_nav_menu($menu_elements);
                      ?>
                  </nav>
                  <!-- end of the site menu -->
                </div>
              </div>
            </div>
            <!-- if front-page is not set-up, then display default screen -->
          <?php endwhile;

          else : ?>

          <div class="row">
            <!-- left side of split-screen -->
            <div class="col-sm-6 cover___cover-picture--unset">
            </div>
            <!-- right side of split-screen -->
            <div class="col-sm-6 cover__cover-text">
              <h1 class="cover__cover-title">
                  <?php bloginfo('name'); ?>
              </h1>
              <div class="cover__cover-text">
                  <<?php bloginfo('description'); ?>
              </div>
            </div>
          </div>

          <?php
          endif;
          ?>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
     integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

    </script>
    <?php wp_footer(); ?>
    <!-- close main container for page -->
    </div>
    </body>
  </html>
