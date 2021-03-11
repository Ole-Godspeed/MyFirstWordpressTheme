<?php


function load_stylesheets() {

  //wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  //wp_enqueue_style('bootstrap-css');

  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('oleg-css', get_template_directory_uri() . '/style.css', array(), false, 'all'); //always put our own styles as last

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery() {

  wp_deregister_script('jquery'); //incase it's already registered
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true); //true -> put in the footer
  add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');


function load_js() {

  wp_enqueue_script('oleg-js', get_template_directory_uri() . '/js/scripts.js', '', 1, true); //true -> put in the footer

}
add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true); //crop it 300p
add_image_size('largest', 800, 800, true); //crop it 800p


register_nav_menus(

  array(
    'primary-menu'   => __('Primary Menu', 'theme'),
    'secondary-menu' => __('Secondary Menu', 'theme')
  )

  );