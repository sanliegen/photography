<?php
/*
Template Name: Page Work
*/

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="work__container container">
    <?php wp_reset_query(); ?>
    <?php
      $args = array(
        'post_type' => 'work',
				'meta_key'  => 'grid_order',
				'orderby'   => 'meta_value_num',
				'order'			=> 'ASC'

      );
      $workLoop = new WP_Query($args);
    ?>
    <?php if( $workLoop->have_posts() ):?>
      <ul class="work__row row">
      <?php while( $workLoop->have_posts() ): $workLoop->the_post();?>
				<?php $col = get_field('grid_column'); ?>
				<?php $offset = get_field('grid_offset'); ?>
				<?php echo '<li class="work__col col-xs-12 col-md-'.$col.' col-md-offset-'.$offset.'">'; ?>
          <?php get_template_part( 'template-parts/content-work' );?>
        </li><!-- li.work__col -->
      <?php endwhile; ?>
		</ul><!-- ul -->
			<?php wp_reset_query(); ?>
    <?php endif; ?>
    </div><!-- .container -->
  </main>
</div><!-- .content-area -->
<?php get_footer(); ?>
