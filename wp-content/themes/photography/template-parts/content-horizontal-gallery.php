<?php
/*

@package photography
-- single horizontal gallery
*/
?>

<section class="work__gallery__wrap">
  <div class="work__gallery">
    <?php
      $workInfo = get_field( "work_info" );
      if( $workInfo ) {?>
        <div class="work__gallery__box">
          <article class="work__gallery__article">
            <?php echo $workInfo; ?>
          </article>
        </div>
    <?php }
    ?>
    <?php
    $images = get_sub_field('work_single_content_horizontal_gallery_images');
    if( $images ): ?>
      <?php foreach( $images as $image ): ?>
        <div class="work__gallery__box">
          <?php
            echo '<a class="work__gallery__image" href="'. $image['url'] .'" data-fancybox="group" data-caption="'.  $image['title'] .'"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></a>'
          ;?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div><!-- .work__gallery -->
</section>
