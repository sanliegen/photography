<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>


  <?php if( get_field('header_theme', 'option') == 'menu_one' ): ?>
    <?php get_template_part( 'template-header/centered-navigation' );?>
  <?php elseif( get_field('header_theme', 'option') == 'menu_two' ): ?>
    <?php get_template_part( 'template-header/simple-navigation' );?>
  <?php elseif( get_field('header_theme', 'option') == 'menu_thress' ): ?>
    <?php echo "thress"; ?>
  <?php endif; ?>
