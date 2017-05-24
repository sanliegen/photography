<?php
/*

@package sanliegen photo template
-- portfolio horizontal loop gallery
*/
?>
<?php if( get_row_layout() == 'portfolio_layout_horizontal_gallery_container' ): ?>

  <?php $galleryTitle = get_sub_field('portfolio_layout_horizontal_title'); ?>
  <?php if ($galleryTitle): ?>
    <div class="portfolio__layout__gallery__header">
      <?php echo $galleryTitle; ?>
    </div><!-- .portfolio__layout__gallery__header -->
  <?php endif; ?>

  <!-- GALLERY -->
  <?php if( have_rows('portfolio_layout_horizontal_gallery') ): ?>
  <ul class="portfolio__layout__gallery" id="js-portfoli-layout-gallery">
    <?php while ( have_rows('portfolio_layout_horizontal_gallery') ) : the_row(); ?>
      <?php $images = get_sub_field('portfolio_layout_horizontal_gallery'); ?>

      <?php foreach( $images as $image ): ?>
        <?php echo '<a class="magnific item" href="'. $image['url'] .'"><img class="portfolio__layout__gallery__images" src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></a>'; ?>
      <?php endforeach; ?>

    <?php endwhile; ?>
  </ul><!-- .portfolio__layout__gallery -->
  <?php endif; ?>
<?php endif; ?>
