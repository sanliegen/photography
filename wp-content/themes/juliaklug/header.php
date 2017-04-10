<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>


<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'secondary',
        'container'         => 'nav',
        'menu_id'        => 'js-navigation-menu',
        'menu_class'        => 'navigation-menu show',
      ));
    ?>
  </div>
</header>
