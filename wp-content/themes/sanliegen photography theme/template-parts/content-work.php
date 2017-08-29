<?php
/*

@package sanliegen photo template
-- work loop
*/
?>

<figure class="vertical__widget" id="post-<?php the_ID(); ?>">
	<div class="figure__title"><?php the_title(); ?></div>
  <?php if( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  <figcaption class="vertical__widget__figcaption">
    <a href="<?php the_permalink(); ?>"></a>
  </figcation>
</figure><!-- .work__widget -->


