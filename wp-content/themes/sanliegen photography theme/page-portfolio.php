<?php
/*
Template Name: Page Portfolio
*/

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( have_rows('portfolio_layout') ):?>
			<div class="portfolio__layout__container">
				<?php while ( have_rows('portfolio_layout') ) : the_row(); ?>
					<?php get_template_part( 'template-parts/content-portfolio-horizontal-gallery' );?>
				<?php endwhile; ?>
			</div><!-- .portfolio__layout__container -->
		<?php endif; ?>
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
