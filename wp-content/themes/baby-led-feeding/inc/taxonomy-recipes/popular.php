<?php

$args = array( 'post_type' => 'recipes', 'posts_per_page' => 3, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC', 'tax_query' => array (
      array(
          'taxonomy' => 'recipe-categories',
          'field' => 'id',
          'terms' => get_queried_object()->term_id,
      )
  ));

  $query = new WP_Query( $args );

 ?>



<?php if($query->have_posts()) : ?>

<div class="container-fluid">
 <div class="container recipes">
   <div class="row">

     <h2>MOST Popular <?php single_cat_title(); ?> Recipies</h2>

     <?php
    /* Start the Loop */
    while ( $query->have_posts()): $query->the_post();

    $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );

     ?>

    <article <?php post_class(array('col-xs-6', 'col-md-4', 'recipes__recipe', 'matchheight')); ?>>
      <div class="row">
        <div class="col-sm-6 col-md-12">
          <a href="<?php the_permalink(); ?>">
            <?php echo $thumb; ?>
          </a>
        </div>
        <div class="col-sm-6 col-md-12">
          FOOD
          <?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
          <p class="recipes__cat"><?php echo $product_cat; ?></p>
          <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
        </div>
      </div>
    </article>

    <?php endwhile; ?>

   </div>

  </div>
 </div>

<?php endif; ?>
