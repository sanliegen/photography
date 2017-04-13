<?php
/*

@package sanliegen photo template
-- single vertical gallery
*/
$images = get_sub_field('layout_single_content_vertical_gallery_images');
?>

<?php if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    <figure class="vertical__widget">
      <?php echo '<img src="' . $image['url'] . '" />'; ?>
      <figcaption class="vertical__widget__figcaption">
        <?php echo '<a class="magnific item" href="'. $image['url'] .'"></a>';?>
      </figcation>
    </figure>
  <?php endforeach; ?>
<?php endif; ?>
