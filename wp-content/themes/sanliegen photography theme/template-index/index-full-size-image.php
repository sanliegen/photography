<?php
/*

@package sanliegen photo template
-- index full size image
*/
$thumbnail = get_the_post_thumbnail_url();
$mainID = get_field('main_id', 'option');
?>
<?php if( $thumbnail ): ?>
  <a href="<?php echo get_page_link($mainID); ?>">
    <div class="image__wrapper" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
  </a>
<?php endif; ?>
