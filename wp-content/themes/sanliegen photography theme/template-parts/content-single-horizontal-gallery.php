<?php
/*

@package sanliegen photo template
-- single horizontal gallery
*/
$images = get_sub_field('layout_single_content_horizontal_gallery_images');
?>
<?php if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    <div class="horizontal__gallery__box">
      <?php echo '<a class="magnific item" href="'. $image['url'] .'"><img class="js-image-width" src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></a>'; ?>
    </div><!-- .horizontal__gallery__box -->
  <?php endforeach; ?>
<?php endif; ?>
