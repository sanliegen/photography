<?php
/*

@package sanliegen photo template
-- simple Header
*/
?>
<header class="simple__navigation">
  <div class="simple__navigation__wrapper">
    <div class="simple__navigation simple__navigation__brand">
      <a class="brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/micki-logo.svg" id="header-logo">
      </a>
    </div><!-- .simple__navigation__brand -->
    <div class="simple__navigation simple__navigation__contact">
      <?php
        $headerMail = get_field('header_mail', 'option');
        $headerpageID = get_field('header_link_id', 'option');
        $headerpageName = get_field('header_link_name', 'option');
      ?>
      <?php if ($headerMail) :?>
        <?php echo $headerMail; ?>
      <?php endif; ?>
      <?php echo "/"; ?>
      <?php if ($headerpageID) :?>
        <a class="simple__navigation__link" href="<?php echo get_page_link($headerpageID); ?>"><?php echo $headerpageName; ?></a>
      <?php endif; ?>
    </div>
  </div>

</header>
