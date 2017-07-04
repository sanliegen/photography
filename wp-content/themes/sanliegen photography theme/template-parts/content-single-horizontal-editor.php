<?php
/*

@package sanliegen photo template
-- single horizontal editor
*/

$editor = get_sub_field( "layout_single_content_horizontal_editor_text" );
?>

<?php if( $editor ) :?>
  <div class="horizontal__gallery__box" class="js-image-width">
    <article class="horizontal__widget__article">
      <?php echo $editor; ?>
    </article>
  </div><!-- .horizontal__gallery__box -->
<?php endif; ?>
