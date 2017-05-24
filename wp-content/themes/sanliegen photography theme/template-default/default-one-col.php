<?php
/*

@package sanliegen photo template
-- default one
*/

?>
<div class="default__left">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>

  <?php the_content(); ?>

  <?php endwhile;?>
<?php endif; ?>
</div><!-- .flex__container -->
