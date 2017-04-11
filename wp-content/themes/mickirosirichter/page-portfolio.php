<?php
/*
Template Name: Page Portfolio
*/

get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( have_rows('portfolio_layout') ):?>
			<?php while ( have_rows('portfolio_layout') ) : the_row(); ?>
				<?php if (get_field('header_image', 'option')): ?>
					<img class="portfolio__layout__header__image" src="<?php the_field('header_image', 'option'); ?>" alt="">
				<?php endif; ?>
				<?php if( get_row_layout() == 'portfolio_layout_gallery_container' ): ?>
					<div class="portfolio__layout__gallery__container">
						<?php get_template_part( 'template-parts/content-portfolio-layout-gallery');?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
