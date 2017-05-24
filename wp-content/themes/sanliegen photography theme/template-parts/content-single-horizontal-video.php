<?php
/*

@package sanliegen photo template
-- single horizontal video
*/

$iframe = get_sub_field( "layout_single_content_horizontal_video_url" );
$videoImage = get_sub_field( "layout_single_content_horizontal_video_image" );
?>
<?php if ($iframe) : ?>
  <div class="horizontal__gallery__box" >
    <?php echo '<a class="magnific-youtube item" href="'. $iframe .'">'; ?>
      <?php echo '<img  src="' . $videoImage . '" />'; ?>
    <?php echo '</a>'; ?>
  </div><!-- .horizontal__gallery__box -->
<?php endif; ?>
