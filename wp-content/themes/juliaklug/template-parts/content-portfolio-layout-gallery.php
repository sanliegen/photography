<?php
/*

@package juliaklug
-- portfolio layout gallery
*/
?>



<?php

if( have_rows('portfolio_layout_gallery') ):?>

<?php while ( have_rows('portfolio_layout_gallery') ) : the_row(); ?>
  <?php $title = get_sub_field('portfolio_layout_gallery_title');?>

  <?php if ($title): ?>
    <div class="portfolio__layout__gallery__header">
      <?php echo $title; ?>
    </div>
  <?php endif; ?>
  <ul class="portfolio__layout__gallery">
  <?php $images = get_sub_field('portfolio_layout_gallery_images');?>
  <?php foreach( $images as $image ): ?>
    <li>
      <a href="<?php echo $image['url']; ?>" data-fancybox="group" data-caption="'.  $image['title'] .'">
        <img class="portfolio__layout__gallery__images" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
      </a>
    </li>
  <?php endforeach; ?>
  </ul>
<?php endwhile; ?>

<?php endif; ?>
