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
        $aboutID = get_field('about_id', 'option');
        $aboutMail = get_field('about_mail', 'option');
      ?>
      <?php if ($aboutMail) :?>
        <?php echo $aboutMail; ?>
      <?php endif; ?>
      <?php echo "/"; ?>
      <?php if ($aboutID) :?>
        <a class="simple__navigation__link" href="<?php echo get_page_link($aboutID); ?>">about</a>
      <?php endif; ?>
    </div>
  </div>

</header>
