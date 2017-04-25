<?php
/*

@package sanliegen photo template
-- single vertical video
*/
$iframe = get_sub_field( "layout_single_content_vertical_video_url" );
$videoImage = get_sub_field( "layout_single_content_vertical_video_image" );
?>
<?php if ($iframe) : ?>
  <figure class="vertical__widget">

    <?php echo '<img src="' . $videoImage . '" />'; ?>
    <span class="photography__icon icon-play">
      <figcaption class="vertical__widget__figcaption__video">
        <?php echo '<a class="magnific-youtube item" href="'. $iframe .'"></a>';?>
      </figcation>
    </span>
  </figure>
<?php endif; ?>
