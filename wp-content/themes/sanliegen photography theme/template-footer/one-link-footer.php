<?php
/*

@package sanliegen photo template
-- centered footer
*/
$oneLinkFooterName = get_field('one_link_footer_name', 'option');
$oneLinkFooterID = get_field('one_link_footer_id', 'option');
?>
<footer class="one__link__footer">
  <?php if ($oneLinkFooterID) :?>
    <a class="one__link__footer__link" href="<?php echo get_page_link($oneLinkFooterID); ?>"><?php echo $oneLinkFooterName; ?></a>
  <?php endif; ?>
</footer>
