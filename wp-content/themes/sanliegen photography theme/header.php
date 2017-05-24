<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style type="text/css">
      a:focus { color: <?php the_field('link_color', 'option'); ?>;}
      a:hover { color: <?php the_field('link_color', 'option'); ?>; }
      a:active { color: <?php the_field('link_color', 'option'); ?>; }
      .contact__us__form__field .contact__us__form__group input { border-color: <?php the_field('link_color', 'option'); ?>; }
      .contact__us__form__field .contact__us__form__group textarea { border-color: <?php the_field('link_color', 'option'); ?>; }
      .contact__form__button { background: <?php the_field('link_color', 'option'); ?>; }
    </style>
  </head>

  <?php if( get_field('header_theme', 'option') == 'menu_one' ): ?>
    <?php get_template_part( 'template-header/centered-navigation' );?>
  <?php elseif( get_field('header_theme', 'option') == 'menu_two' ): ?>
    <?php get_template_part( 'template-header/simple-navigation' );?>
  <?php elseif( get_field('header_theme', 'option') == 'menu_three' ): ?>
    <?php get_template_part( 'template-header/left-navigation' );?>
  <?php endif; ?>
