<?php

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( get_field('default_theme', 'option') == 'default_one' ): ?>
		  <?php get_template_part( 'template-default/default-one-col' );?>
		<?php elseif( get_field('default_theme', 'option') == 'default_two' ): ?>
		  <?php get_template_part( 'template-default/default-two-col' );?>
		<?php endif; ?>
	</main>
</div><!-- .content-area -->
<?php get_footer(); ?>
