<?php
// adds view count on every hit
setPostViews(get_the_ID()); ?>

<article itemscope itemtype="http://schema.org/Recipe"<?php post_class(array('container', 'single-recipe')); ?>>

  <div class="row">
    <div class="col-md-8 col-md-offset-2 single-recipe__wrapper">
      <h1 itemprop="name"><?php the_title(); ?></h1>
      <meta itemprop="description" content="<?php the_excerpt(); ?>" />
      <meta itemprop="author" content="Baby Led Feeding" />
      <meta itemprop="dateCreated" content="<?php the_date(); ?>" />
      <?php include(locate_template("inc/page-elements/share.php")); ?>
      <?php the_content(array('itemprop' => 'description')); ?>
    </div>
  </div>


  <?php

  include(locate_template("inc/page-elements/share.php"));
	include(locate_template("inc/single-recipes/metadata.php"));
  include(locate_template("inc/page-elements/share.php"));

   ?>


</article>
