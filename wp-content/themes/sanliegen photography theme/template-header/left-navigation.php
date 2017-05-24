<?php
/*

@package sanliegen photo template
-- left Header
*/

?>
<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'container'         => 'nav',
        'menu_id'        => 'js-navigation-menu',
        'menu_class'        => 'navigation-menu show',
      ));
    ?>
  </div>
</header>
