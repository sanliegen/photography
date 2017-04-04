<?php

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="default__container container">
			<div class="default__row row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-12 col-md-5">
					<div class="default__page__image">
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-12 col-md-7">
					<?php the_content(); ?>
				</div>
			<?php endwhile; else :  ?>
			<?php endif ?>
			</div><!-- .default__row -->
			
		</div><!-- .default__container -->
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
