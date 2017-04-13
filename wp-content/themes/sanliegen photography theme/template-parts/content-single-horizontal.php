<?php
/*

@package sanliegen photo template
-- single horizontal
*/
?>
<div class="horizontal__container" >
  <div class="horizontal__title__box">
    <h1 class="horizontal__title"><?php the_title(); ?></h1>
  </div>
  <section class="horizontal__gallery__wrap" >
    <div class="horizontal__gallery" id="work__gallery__js">
    <?php if( have_rows('layout_single_content_horizontal_content') ):?>
     <?php while ( have_rows('layout_single_content_horizontal_content') ) : the_row(); ?>
       <?php if( get_row_layout() == 'layout_single_content_horizontal_gallery' ): ?>
         <?php get_template_part( 'template-parts/content-single-horizontal-gallery' );?>
       <?php elseif( get_row_layout() == 'layout_single_content_horizontal_editor' ): ?>
         <?php get_template_part( 'template-parts/content-single-horizontal-editor' );?>
       <?php elseif( get_row_layout() == 'layout_single_content_horizontal_video' ): ?>
         <?php get_template_part( 'template-parts/content-single-horizontal-video' );?>
       <?php endif; ?>
     <?php endwhile; ?>
    <?php endif; ?>
    </div><!-- .work__gallery -->
  </section>
</div><!-- .horizontal__container -->
