<?php if ( have_posts() ) : ?>

<div class="container-fluid">
 <div class="container recipes">
   <div class="row">

     <h3>Recent <?php single_cat_title(); ?> Recipies</h3>

     <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>

     <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

    $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );

     ?>

    <article <?php post_class(array('col-xs-6', 'col-md-3', 'recipes__recipe', 'matchheight')); ?>>
      <div class="row">
        <div class="col-sm-6 col-md-12">
          <a href="<?php the_permalink(); ?>"><?php echo $thumb; ?></a>
        </div>
        <div class="col-sm-6 col-md-12">
          <div class="recipes__recipe__cat">
            <?php single_cat_title(); ?>
          </div>
          <p class="recipes__cat"><?php echo $product_cat; ?></p>
          <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
        </div>
      </div>
    </article>

    <?php endwhile; ?>

   </div>

    <?php the_posts_navigation(); ?>

  </div>
 </div>

<?php endif; ?>
