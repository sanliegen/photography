<?php
/*

@package sanliegen photo template
-- work single
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main" id="post-<?php the_ID(); ?>">
	   <?php if( have_rows('layout_single_content') ):?>
			<?php while ( have_rows('layout_single_content') ) : the_row(); ?>
				<?php if( get_row_layout() == 'layout_single_content_vertical' ): ?>
	        <?php get_template_part( 'template-parts/content-single-vertical' );?>
				<?php elseif( get_row_layout() == 'layout_single_content_horizontal' ): ?>
					<?php get_template_part( 'template-parts/content-single-horizontal' );?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
  </main>
</div><!-- .content-area -->
<?php get_footer(); ?>
