  <?php
  $term_list = wp_get_post_terms($post->ID, 'recipe-categories', array("fields" => "all"));
  $product_cat = $term_list[0]->name;     // Gets the name of the first object in returned array
  $product_cat_slug = $term_list[0]->slug;     // Gets the name of the first object in returned array
  $product_cat_link = get_term_link($term_list[0]);

    $args = array( 'post_type' => 'recipes', 'posts_per_page' => 6, 'orderby' => 'date', 'tax_query' => array (
          array(
              'taxonomy' => 'recipe-categories',
              'field' => 'slug',
              'terms' => array(
                  $product_cat
              ),
              // 'post__not_in' => array( $post->ID ),
          )
      ));
    $query = new WP_Query( $args );

   ?>

   <?php if($query->have_posts()) : ?>

 <div class="container related-recipes">
   <h3>You might also like these recipes</h3>
   <div class="row">

     <?php while($query->have_posts()) : $query->the_post();

     $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

     ?>

       <?php if ($thumb): ?>
         <article itemscope itemtype="http://schema.org/Recipe" <?php post_class(array('col-sm-6', 'col-md-4', 'related-recipes__recipe', 'matchheight')); ?>>
           <?php echo $thumb; ?>
           <?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
           <p class="related-recipes__cat"><?php echo $product_cat; ?></p>
           <a itemprop="url" href="<?php the_permalink(); ?>"><span itemprop="name"><?php echo the_title(); ?></span></a>
         </article>
       <?php endif; ?>
     <?php endwhile; ?>

   </div>
 </div>
<?php endif; wp_reset_postdata();  ?>
