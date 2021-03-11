<!DOCTYPE html>
<html>

  <head>
    <?php wp_head();?>
  </head>

<body <?php body_class();?>> 

<header class="container sticky-top">

  <?php
    wp_nav_menu(
      array(
        'theme_location' => 'primary-menu',
        'menu_class'     => 'navigation' //css style
      )
    );
  ?>

</header>