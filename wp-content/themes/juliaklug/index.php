<?php /*

@package juliaklug

*/

get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php endwhile; else :  ?>
    <?php endif ?>
  </main>
</div>
<!-- content-area -->
