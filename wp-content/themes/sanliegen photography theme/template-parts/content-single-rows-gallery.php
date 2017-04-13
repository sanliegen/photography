<?php
/*

@package sanliegen photo template
-- single rows gallery
*/
$title = get_sub_field('layout_single_content_rows_title');
$images = get_sub_field('layout_single_content_rows_gallery_images');
?>
<?php if ($title): ?>
  <div class="rows__header">
    <?php echo $title; ?>
  </div>
<?php endif; ?>
<ul class="rows__gallery">
<?php if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    <li>
      <?php echo '<a class="magnific item" href="'. $image['url'] .'"><img class="rows__images"   src="' . $image['url'] . '"  /></a>'; ?>
    </li>
  <?php endforeach; ?>
<?php endif; ?>
</ul>
