<?php

$args = array(
  'post_type' => 'recipes',
  'posts_per_page' => 3,
  'meta_key' => 'post_views_count',
  'orderby' => 'meta_value_num',
  'order' => 'DESC',
  // 'tax_query' => array (
  //     array(
  //         'taxonomy' => 'recipe-categories',
  //         'field' => 'id',
  //         'terms' => get_queried_object()->term_id,
  //     )
  // )
);

  $query = new WP_Query( $args );

 ?>



<?php if($query->have_posts()) : ?>

<div class="container-fluid">
 <div class="container recipes">
   <div class="row">

     <h3>Everyone is making...</h3>

     <?php
    /* Start the Loop */
    while ( $query->have_posts()): $query->the_post();

    $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

     ?>

    <article itemscope itemtype="http://schema.org/Recipe" <?php post_class(array('col-xs-6', 'col-md-4', 'recipes__recipe', 'matchheight')); ?>>
      <div class="row">
        <div class="col-sm-6 col-md-12">
          <a itemprop="url" href="<?php the_permalink(); ?>">
            <?php echo $thumb; ?>
          </a>
        </div>
        <div class="col-sm-6 col-md-12">
          <?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
          <p class="recipes__cat"><?php echo $product_cat; ?></p>
          <a itemprop="url" href="<?php the_permalink(); ?>"><span itemprop="name"><?php echo the_title(); ?></span></a>
        </div>
      </div>
    </article>

    <?php endwhile; ?>

   </div>

  </div>
 </div>

<?php endif; ?>
