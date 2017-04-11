<?php
/*
Template Name: Page Index
*/

if(is_page(162)) { get_header('index'); } else { get_header(); } wp_head();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( have_rows('index_layout') ):?>
			<?php while ( have_rows('index_layout') ) : the_row(); ?>
				<?php if( get_row_layout() == 'index_layout_full_size_image_container' ): ?>
					<?php get_template_part( 'template-parts/content-index-layout-full-size-image');?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
</div><!-- .content-area -->

<?php get_footer(); ?>
