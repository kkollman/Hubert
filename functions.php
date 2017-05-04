<?php

function hilscherResources()
{
  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'hilscherResources');



// Change excerpt length
function new_excerpt_length($length) {
return 75;
}
add_filter('excerpt_length', 'new_excerpt_length');

function hilscherSetup(){

  // Register navigation menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
  ));


  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 570, 150, true);
  add_image_size('page-banner', 1170, 250, true);

};

add_action('after_setup_theme', 'hilscherSetup');

//Register sidebar
register_sidebar(array(
  'name' => 'Home right sidebar',
  'id' => 'home_right_1',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2 class="rounded">',
  'after_title' => '</h2>',
  ));﻿


 ?>
