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
    'cover' => __('Cover Menu'),
  ));


  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 570, 150, true);
  add_image_size('page-banner', 1170, 250, true);

};

add_action('after_setup_theme', 'hilscherSetup');

//Add widget for sidebar
function hilscherWidgetsInit() {
  //register left sidebar
  register_sidebar(array(
    'name' => 'Left sidebar',
    'id' => 'sidebar_left'
  ));

  //register the left-most footer widget
  register_sidebar(array(
    'name' => 'Footer area 1',
    'id' => 'sidebar_footer_1'
  ));

  //register the middle footer widget
  register_sidebar(array(
    'name' => 'Footer area 2',
    'id' => 'sidebar_footer_2'
  ));

  //register the right-most footer widget
  register_sidebar(array(
    'name' => 'Footer area 3',
    'id' => 'sidebar_footer_3'
  ));

}
add_action('widgets_init', 'hilscherWidgetsInit');
 ?>
