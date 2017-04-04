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

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php the_field('header_brand', 'option'); ?></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'primary',
            'container'         => false,
            'menu_class'        => 'nav navbar-nav navbar-right',
            'walker'            => new wp_bootstrap_navwalker()
          ));
        ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

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
