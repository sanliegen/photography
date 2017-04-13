<?php
/*

@package sanliegen photo template
-- default one
*/

?>
<div class="vertical__container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="flex__grid">
    <div class="flex__col">
      <div class="default__image__wrapper">
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      </div>
    </div><!-- .flex__col-->
  </div><!-- .flex__grid -->
  <div class="flex__grid">
    <div class="flex__col">
      <article class="default__article default__article__one">
        <?php the_content(); ?>
      </article>
    </div><!-- .flex__col-->
  </div><!-- .flex__grid -->
  <?php endwhile; else :  ?>
  <?php endif ?>
</div><!-- .flex__container -->
