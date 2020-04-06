<article <?php post_class(array('container', 'single-recipe')); ?>>
  <h1><?php the_title(); ?></h1>
  <?php include(locate_template("inc/page-elements/share.php")); ?>
  <?php the_content(); ?>
</article>
