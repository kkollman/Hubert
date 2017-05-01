<?php

function hubertResources()
{
  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'hubertResources');

//register navigation menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));


// Change excerpt length
function new_excerpt_length($length) {
return 75;
}
add_filter('excerpt_length', 'new_excerpt_length');


 ?>
