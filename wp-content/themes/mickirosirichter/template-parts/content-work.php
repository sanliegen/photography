<?php
/*

@package photography
-- work loop
*/
?>
<div class="work__widget" id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink(); ?>">
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <div class="work__overlay">
      <span class="caption"><?php the_title(); ?></span>
    </div><!-- .work__overlay -->
  </a>
</div><!-- .work__widget -->
