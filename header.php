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
    <header class="header">
      <h1 class="header__heading">
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <h5 class="header__motto">
        <?php bloginfo('description'); ?>
      </h5>
      <nav class="nav nav__menu nav__header">
        <?php

        $menu_elements = array(
          'theme_location' => 'primary',
        );

        wp_nav_menu($menu_elements);
        ?>
      </nav>
    </header>
    <!-- site header end -->

    <!-- open container for main page -->
    <div class="container">
