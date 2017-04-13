<?php
/*

@package sanliegen photo template
-- centered Header
*/
?>
<header class="centered-navigation" role="banner">
  <div class="centered-navigation-wrapper">
    <a class="brand" href="<?php echo home_url(); ?>"><?php the_field('header_brand', 'option'); ?></a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <nav role="navigation">
      <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'container'         => 'ul',
          'menu_class'        => 'centered-navigation-menu show',
          'menu_id'           => 'js-centered-navigation-menu',
          'walker'            => new Walker_Nav_Primary(),
        ));
      ?>
    </nav>
  </div>
</header>
