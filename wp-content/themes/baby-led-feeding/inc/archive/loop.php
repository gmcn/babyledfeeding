<div class="container recipes">

<?php
if ( have_posts() ) : ?>

<?php
  /* Start the Loop */
  while ( have_posts() ) : the_post();

  $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

  ?>

  <article itemscope itemtype="http://schema.org/Recipe" <?php post_class(array('col-xs-6', 'col-md-3', 'recipes__recipe', 'matchheight')); ?>>
    <div class="row">
      <div class="col-sm-6 col-md-12">
        <?php echo $thumb; ?>
      </div>
      <div class="col-sm-6 col-md-12">
        <?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
        <p class="recipes__cat"><?php echo $product_cat; ?></p>
        <a itemprop="url" href="<?php the_permalink(); ?>"><span itemprop="name"><?php echo the_title(); ?></span></a>
      </div>
    </div>
  </article>

  <?php endwhile;

  the_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>


<?php endif; ?>

</div>
