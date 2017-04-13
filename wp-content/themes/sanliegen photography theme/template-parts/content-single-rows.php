<?php
/*

@package sanliegen photo template
-- single rows
*/
?>
<div class="rows__container" id="work__gallery__js">
<?php if( have_rows('layout_single_content_rows_content') ):?>
 <?php while ( have_rows('layout_single_content_rows_content') ) : the_row(); ?>
   <?php if( get_row_layout() == 'layout_single_content_rows_gallery' ): ?>
     <?php get_template_part( 'template-parts/content-single-rows-gallery' );?>
   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
</div><!-- .rows__container -->
