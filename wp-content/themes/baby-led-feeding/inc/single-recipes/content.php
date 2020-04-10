<article itemscope itemtype="http://schema.org/Recipe"<?php post_class(array('container', 'single-recipe')); ?>>
  <h1 itemprop="name"><?php the_title(); ?></h1>
  <?php include(locate_template("inc/page-elements/share.php")); ?>
  <?php the_content(array('itemprop' => 'text')); ?>
  <?php
  // adds view count on every hit
  setPostViews(get_the_ID()); ?>

</article>
