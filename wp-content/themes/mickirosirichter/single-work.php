<?php
/*

@package photography
-- work single
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main" id="post-<?php the_ID(); ?>">
	    <?php if( have_rows('work_single_content') ):?>
				<?php while ( have_rows('work_single_content') ) : the_row(); ?>
					<?php if( get_row_layout() == 'work_single_content_horizontal_gallery' ): ?>
						<div class="work__single__container__gallery" >
	          	<?php get_template_part( 'template-parts/content-horizontal-gallery' );?>
						</div>
					<?php elseif( get_row_layout() == 'work_single_content_video' ): ?>
		         <?php get_template_part( 'template-parts/content-video' );?>
	        <?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

  </main>
</div><!-- .content-area -->
<?php get_footer(); ?>
