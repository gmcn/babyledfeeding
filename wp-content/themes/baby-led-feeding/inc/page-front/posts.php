<?php

  $sectionTitle = get_sub_field('section_title');

  $front_page_row_one_post_type = get_sub_field('section_post_type');
  $front_page_row_one_category = get_sub_field('choose_post_category');
  $front_page_row_one_recipe_cat = get_sub_field('choose_recipe_category');
  $front_page_row_one_weaning_cat = get_sub_field('choose_weaning_category');
  $posts_per_page = get_sub_field('posts_per_page');
  $section_bg = get_sub_field('section_bg');


 ?>

  <?php

  if ($front_page_row_one_post_type == 'posts') {


    if ($front_page_row_one_category) {

      $args = array( 'post_type' => 'post', 'posts_per_page' => $posts_per_page, 'orderby' => 'date', 'tax_query' => array (
            array(
               'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array(
                    $front_page_row_one_category->slug
                )
            )
        ));

       } else {

          $args = array( 'post_type' => 'post', 'posts_per_page' => $posts_per_page, 'orderby' => 'date');

        }

    }

  elseif ($front_page_row_one_post_type == 'recipes') {


    if ($front_page_row_one_recipe_cat) {

      $args = array( 'post_type' => 'recipes', 'posts_per_page' => $posts_per_page, 'orderby' => 'date', 'tax_query' => array (
            array(
               'taxonomy' => 'recipe-categories',
                'field' => 'slug',
                'terms' => array(
                    $front_page_row_one_recipe_cat->slug
                )
            )
        ));

       } else {

          $args = array( 'post_type' => 'recipes', 'posts_per_page' => $posts_per_page, 'orderby' => 'date');

        }

    }

    elseif ($front_page_row_one_post_type == 'weaning') {



      if ($front_page_row_one_weaning_cat) {

        $args = array( 'post_type' => 'weaning', 'posts_per_page' => $posts_per_page, 'orderby' => 'date', 'tax_query' => array (
              array(
                 'taxonomy' => 'weaning-categories',
                  'field' => 'slug',
                  'terms' => array(
                      $front_page_row_one_weaning_cat->slug
                  )
              )
          ));

         } else {

            $args = array( 'post_type' => 'weaning', 'posts_per_page' => 4, 'orderby' => 'date');

          }

      }


    $query = new WP_Query( $args );

   ?>

   <?php if($query->have_posts()) : ?>

     <?php if ($section_bg): ?>
       <div class="fp_row-bg" style="background: url(<?php echo $section_bg ?>) no-repeat">
     <?php endif; ?>


   <article class="container recipes">
     <h3><?php echo $sectionTitle ?></h3>
     <div class="row">

       <?php while($query->have_posts()) : $query->the_post();

       $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );

       if ($posts_per_page == 3 ) {
         $cols = "col-md-4";
       } elseif ($posts_per_page == 4 ) {
         $cols = "col-md-3";
       }

       ?>
           <article <?php post_class(array('col-xs-6', $cols, 'recipes__recipe', 'matchheight')); ?>>
             <div class="row">
               <div class="col-sm-6 col-md-12">
                 <?php echo $thumb; ?>
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
   </article>
   <?php if ($section_bg): ?>
   </div>
   <?php endif; ?>

   <?php else : ?>

   <div class="container recipes">

     <h3><?php echo $front_page_row_one_title ?></h3>

     <p>Nothing to see here, please come back later</p>

   </div>


   <?php endif; wp_reset_postdata();  ?>
