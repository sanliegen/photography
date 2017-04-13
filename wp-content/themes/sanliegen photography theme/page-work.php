<?php
/*
Template Name: Page Work
*/

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="vertical__container">
			<div class="flex__grid">
				<div class="flex__col">
				<?php
					$args = array(
						'post_type' => 'work',
						'meta_query' => array(
							array(
								'key' => 'column_side',
								'value' => 'left',
				      )
				    ),
						'orderby' => array(
							'meta_key'  => 'column_order',
							'orderby'   => 'meta_value_num',
							'order'			=> 'ASC'
						)
					);
					$workLoop = new WP_Query($args);
				?>
				<?php if( $workLoop->have_posts() ):?>
					<?php while( $workLoop->have_posts() ): $workLoop->the_post();?>
						<?php get_template_part( 'template-parts/content-work' );?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				<?php endif; ?>
				</div><!-- .flex__col left-->
				<div class="flex__col">
				<?php
					$args = array(
						'post_type' => 'work',
						'meta_query' => array(
							array(
								'key' => 'column_side',
								'value' => 'right',
				      )
				    ),
						'orderby' => array(
							'meta_key'  => 'column_order',
							'orderby'   => 'meta_value_num',
							'order'			=> 'ASC'
						)
					);
					$workLoop = new WP_Query($args);
				?>
				<?php if( $workLoop->have_posts() ):?>
					<?php while( $workLoop->have_posts() ): $workLoop->the_post();?>
						<?php get_template_part( 'template-parts/content-work' );?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				<?php endif; ?>
			</div><!-- .flex__col right-->
			</div><!-- .flex__grid -->
		</div><!-- .flex__container -->
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
