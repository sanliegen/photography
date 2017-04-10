<?php
/*

@package anacatala
-- single horizontal gallery
*/
?>

<div class="work__gallery__title__box">
  <h1 class="work__gallery__title"><?php the_title(); ?></h1>
</div>
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
      $iframe = get_sub_field( "work_single_content_horizontal_gallery_url" );
      $videoImage = get_sub_field( "work_single_content_horizontal_gallery_video_image" );
      if ($iframe) { ?>
        <div class="work__gallery__box">
          <?php echo '<a class="magnific-youtube item" href="'. $iframe .'">'; ?>
            <?php echo '<img src="' . $videoImage . '" />'; ?>
            <svg id="videobutton" width="77px" height="77px" viewBox="0 0 77 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="video" transform="translate(1.000000, 1.000000)">
                  <polygon id="Rectangle" fill="#FFFFFF" opacity="0.9" transform="translate(32.387378, 37.387379) rotate(-315.000000) translate(-32.387378, -37.387379) " points="12.5 28.9904854 52.2747564 17.5 40.7842708 57.2747574"></polygon>
                  <circle id="Oval" stroke="#FFFFFF" cx="37.5" cy="37.5" r="37.5"></circle>
                </g>
              </g>
            </svg>
            <?php echo '</a>'; ?>
        </div>
      <?php }
    ?>
    <?php
    $images = get_sub_field('work_single_content_horizontal_gallery_images');
    if( $images ): ?>
      <?php foreach( $images as $image ): ?>
        <div class="work__gallery__box">
          <?php
            echo '<a class="magnific item" href="'. $image['url'] .'"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></a>'
          ;?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div><!-- .work__gallery -->
</section>
