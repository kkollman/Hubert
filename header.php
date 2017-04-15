<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo(charset); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600,800|Roboto:400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- site header -->
    <header class="header">
      <h1 class="header-heading"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <h5 class="header-motto"><?php bloginfo('description'); ?></h5>
    </header>
    <!-- site header end -->

    <!-- open container for main page -->
    <div class="container">
