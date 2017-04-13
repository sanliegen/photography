<?php
/*

@package sanliegen photo template
-- simple footer
*/
$footerpageID = get_field('footer_link_id', 'option');
$footerpageName = get_field('footer_link_name', 'option');
?>
<footer class="simple__footer">
  <div class="simple__footer__disclaimer">
    © <?php echo date('Y'); ?> <?php echo esc_html( get_bloginfo('name') ); ?>. All Rights Reserved.
  </div>
  <div class="simple__footer__link">
    <?php if ($footerpageID) :?>
      <a class="simple__navigation__link" href="<?php echo get_page_link($footerpageID); ?>"><?php echo $footerpageName; ?></a>
    <?php endif; ?>
  </div>
</footer>
