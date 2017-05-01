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

    <!-- site header -->
    <header class="header container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <!-- header first row -->
          <div class="row header__row header__row--first">
            <div class="col-md-6">
              <h1 class="header__heading">
                <a href="<?php echo home_url(); ?>">
                  <?php bloginfo('name'); ?>
                </a>
              </h1>
            </div>
          </div>
          <!-- end of first row -->

        </div>
      </div>
      <!-- site navigation -->
      <div class="row">
        <div class="col-sm-12">
          <nav class="nav nav__menu nav__header">
            <!-- display blog info -->
            <div class="col-md-6 header__motto">
              <h5>
                <?php bloginfo('description'); ?>
              </h5>
            </div>
            <!-- end of blog info -->
            <!-- display blog menu -->
            <div class="col-md-6">
              <?php
              $menu_elements = array(
                'theme_location' => 'primary',
              );
              wp_nav_menu($menu_elements);
              ?>
            </div>
            <!-- end of blog menu -->
          </nav>
        </div>
      </div>

      <!-- end of navigation -->
    </header>
    <!-- site header end -->

    <!-- open container for main page -->
    <div class="container">
