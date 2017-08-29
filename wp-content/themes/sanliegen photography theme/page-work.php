<?php
/*
Template Name: Page Work
*/

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( get_field('grid_theme', 'option') == 'order_grid' ): ?>
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
			</div><!-- .vertical__container -->

		<?php elseif( get_field('grid_theme', 'option') == 'offset_grid' ): ?>

			<div class="offset__grid__theme container">
		    <?php wp_reset_query(); ?>
		    <?php
		      $args = array(
		        'post_type' => 'work',
		        'orderby'   => 'meta_value_num',
		        'meta_key'  => 'column_order_offset',
		        'order' => 'ASC'
		      );
		      $workLoop = new WP_Query($args);
		    ?>
		    <?php if( $workLoop->have_posts() ):?>
		      <ul class="offset__grid__theme__row row">
		      <?php while( $workLoop->have_posts() ): $workLoop->the_post();?>
						<?php $col = get_field('grid_column'); ?>
						<?php $offset = get_field('grid_offset'); ?>
						
						<?php echo '<li class="offset__grid__theme__col col-xs-12 col-md-'.$col.' col-md-offset-'.$offset.'">'; ?>
		          <?php get_template_part( 'template-parts/content-work' );?>
		        </li><!-- li.work__col -->
		      <?php endwhile; ?>
				</ul><!-- ul -->
					<?php wp_reset_query(); ?>
		    <?php endif; ?>
			</div><!-- .offset__grid__theme -->
		<?php endif; ?>
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
