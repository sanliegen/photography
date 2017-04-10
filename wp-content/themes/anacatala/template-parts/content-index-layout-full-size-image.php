<?php
/*

@package anacatala
-- index full size image
*/
?>

<?php if( get_sub_field('index_layout_full_size_image') ): ?>
  <a href="<?php echo get_page_link(150); ?>">
    <div class="image__wrapper" style="background-image: url(<?php the_sub_field('index_layout_full_size_image'); ?>);"></div>
  </a>
<?php endif; ?>
