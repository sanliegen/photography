<?php
/*

@package photography
-- single video
*/
?>
<div class="work__video__container container">
  <div class="work__video__row row">
    <div class="work__video__col col-xs-12 col-md-4">
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
    </div>
    <div class="work__video__col col-xs-12 col-md-8">
      <?php
        $iframe = get_sub_field( "work_single_content_video_oEmbed" );
        if ($iframe) { ?>
          <div class="video__wrapper">
            <!-- <?php echo $iframe; ?> -->
            <iframe src="" width="" height=""></iframe>
          </div>
        <?php }
      ?>
    </div>
  </div>
</div>
