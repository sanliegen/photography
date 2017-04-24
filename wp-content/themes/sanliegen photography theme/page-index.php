<?php
/*
Template Name: Page Index
*/

$indexID = get_field('index_id', 'option');
if(is_page( $indexID )) { get_header('index'); } else { get_header(); } wp_head();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if( get_field('index_theme', 'option') == 'index_one' ): ?>
		  <?php get_template_part( 'template-index/index-full-size-image' );?>
		<?php endif; ?>
	</main>
</div><!-- .content-area -->
