<div class="container recipes">

<?php
if ( have_posts() ) : ?>

<?php
  /* Start the Loop */
  while ( have_posts() ) : the_post();

  $thumb = get_the_post_thumbnail(  );
  $week_beginning = get_field('week_beginning');

  ?>

  <article <?php post_class(array('col-xs-6', 'col-md-3', 'recipes__recipe', 'matchheight')); ?>>
    <div class="row">
      <div class="col-sm-6 col-md-12">
        <a href="<?php the_permalink(); ?>">
          <?php echo $thumb; ?>
        </a>
      </div>
      <div class="col-sm-6 col-md-12">
        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
        <p><?php echo $week_beginning ?></p>
      </div>
    </div>
  </article>

  <?php endwhile;

  the_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>


<?php endif; ?>

</div>
