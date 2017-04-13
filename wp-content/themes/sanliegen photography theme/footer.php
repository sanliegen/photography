<?php if( get_field('footer_theme', 'option') == 'footer_one' ): ?>
  <?php get_template_part( 'template-footer/centered-footer' );?>
<?php elseif( get_field('footer_theme', 'option') == 'footer_two' ): ?>
  <?php get_template_part( 'template-footer/simple-footer' );?>
<?php elseif( get_field('footer_theme', 'option') == 'footer_three' ): ?>
  <?php get_template_part( 'template-footer/one-link-footer' );?>
<?php elseif( get_field('footer_theme', 'option') == 'footer_four' ): ?>
<?php endif; ?>
<?php wp_footer(); ?>
