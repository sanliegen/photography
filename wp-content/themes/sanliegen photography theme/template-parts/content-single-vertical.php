<?php
/*

@package sanliegen photo template
-- single vertical
*/
?>
<div class="vertical__container">
  <div class="vertical__header">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="vertical__gallery" id="work__gallery__js">
  <?php if( have_rows('layout_single_content_vertical_content') ):?>
   <?php while ( have_rows('layout_single_content_vertical_content') ) : the_row(); ?>
     <?php if( get_row_layout() == 'layout_single_content_vertical_gallery' ): ?>
       <?php get_template_part( 'template-parts/content-single-vertical-gallery' );?>
     <?php elseif( get_row_layout() == 'layout_single_content_vertical_editor' ): ?>
       <?php get_template_part( 'template-parts/content-single-vertical-editor' );?>
     <?php elseif( get_row_layout() == 'layout_single_content_vertical_video' ): ?>
       <?php get_template_part( 'template-parts/content-single-vertical-video' );?>
     <?php endif; ?>
   <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
