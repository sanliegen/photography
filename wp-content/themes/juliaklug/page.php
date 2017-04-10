<?php

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if (get_field('header_image', 'option')): ?>
			<img class="portfolio__layout__header__image" src="<?php the_field('header_image', 'option'); ?>" alt="">
		<?php endif; ?>
		<div class="default__container">
			<h1 class="default__header"><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else :  ?>
			<?php endif ?>
		</div><!-- .default__container -->
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
