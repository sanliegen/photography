<?php
/*

@package anacatala
-- work loop
*/
?>

<figure class="work__widget" id="post-<?php the_ID(); ?>">
  <?php if( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  <figcaption class="work__widget__figcaption">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </figcation>
</figure><!-- .work__widget -->
