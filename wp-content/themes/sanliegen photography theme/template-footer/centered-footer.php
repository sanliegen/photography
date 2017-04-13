<?php
/*

@package sanliegen photo template
-- centered footer
*/
$socialFacebook = get_field('social_media_facebook', 'option');
$socialInstagram = get_field('social_media_instagram', 'option');
$socialTwitter = get_field('social_media_twitter', 'option');
$socialPinterest = get_field('social_media_pinterest', 'option');
$socialYoutube = get_field('social_media_youtube', 'option');
$socialVimeo = get_field('social_media_vimeo', 'option');
$footerpageID = get_field('footer_link_id', 'option');
$footerpageName = get_field('footer_link_name', 'option');
?>
<footer class="centered__footer">
  <div class="centered__footer__col centered__footer__disclaimer">
    © <?php echo date('Y'); ?> <?php echo esc_html( get_bloginfo('name') ); ?>. All Rights Reserved. |
    <?php if ($footerpageID) :?>
      <a class="simple__navigation__link" href="<?php echo get_page_link($footerpageID); ?>"><?php echo $footerpageName; ?></a>
    <?php endif; ?>
  </div>
  <div class="centered__footer__col centered__footer__social">
    <?php if ($socialFacebook) { ?>
      <a href="<?php echo $socialFacebook; ?>" target="_blank"><span class="photography__social icon-facebook"></span></a>
    <?php } ?>
    <?php if ($socialInstagram) { ?>
      <a href="<?php echo $socialInstagram; ?>" target="_blank"><span class="photography__social icon-instagram"></span></a>
    <?php } ?>
    <?php if ($socialTwitter) { ?>
      <a href="<?php echo $socialTwitter; ?>" target="_blank"><span class="photography__social icon-twitter"></span></a>
    <?php } ?>
    <?php if ($socialPinterest) { ?>
      <a href="<?php echo $socialPinterest; ?>" target="_blank"><span class="photography__social icon-pinterest"></span></a>
    <?php } ?>
    <?php if ($socialYoutube) { ?>
      <a href="<?php echo $socialYoutube; ?>" target="_blank"><span class="photography__social icon-youtube"></span></a>
    <?php } ?>
    <?php if ($socialVimeo) { ?>
      <a href="<?php echo $socialVimeo; ?>" target="_blank"><span class="photography__social icon-vimeo"></span></a>
    <?php } ?>
  </div>
</footer>
