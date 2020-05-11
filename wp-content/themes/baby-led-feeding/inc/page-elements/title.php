<?php

  $term = get_queried_object();
  $catColour = get_field('category_colour', $term);
  $catIcon = get_field('category_icon', $term);

 ?>



 <?php if (is_tax()): ?>
   <div class="container-fluid h2_wrapper" <?php if($catColour) : ?>style="background-color: <?php echo $catColour ?>" <?php endif; ?>>
     <div class="container" <?php if($catIcon) : ?>style="background-image: url('<?php echo $catIcon ?>'); background-repeat: no-repeat; background-position: center right;" <?php endif; ?>>
       <h2 itemprop="recipeCategory">

        <?php
        $taxonomy = get_queried_object();
        echo  $taxonomy->name;  ?> Recipes

       </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_post_type_archive('mealplanner') ): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2 itemprop="recipeCategory">

        Family Weekly Meal Plan Archive

       </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_page('my-weekly-meal-plan') || is_singular('mealplanner') ): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2>

        Family Weekly Meal Plan

       </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_post_type_archive('weaning')): ?>
   <div class="container-fluid h2_wrapper">
    <div class="container" <?php if($catIcon) : ?>style="background-image: url('<?php echo $catIcon ?>'); background-repeat: no-repeat; background-position: center right;" <?php endif; ?>>
       <h2 itemprop="recipeCategory">

        All the recipes

       </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_post_type_archive('recipes')): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2 itemprop="recipeCategory">

        All the recipes

      </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_singular('weaning')): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2 itemprop="recipeCategory">

         <?php

         $term_obj_list = get_the_terms( $post->ID, 'weaning-categories' );
         $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
         echo $terms_string; ?> Recipes

       </h2>
     </div>
   </div>
 <?php endif; ?>


 <?php if (is_singular('recipes')): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2 itemprop="recipeCategory">

         <?php

         $term_obj_list = get_the_terms( $post->ID, 'recipe-categories' );
         $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
         echo $terms_string; ?> Recipes

       </h2>
     </div>
   </div>
 <?php endif; ?>

 <?php if (is_singular('post')) : ?>

   <?php $categories = get_the_category();

   $catTermColour = get_field('category_colour', $categories[0]);
   $catTermIcon = get_field('category_icon', $categories[0]);

    ?>

   <div class="container-fluid h2_wrapper" <?php if($catTermColour) : ?>style="background-color: <?php echo $catTermColour ?>" <?php endif; ?>>
     <div class="container" <?php if($catTermColour) : ?>style="background-image: url('<?php echo $catTermIcon ?>'); background-repeat: no-repeat; background-position: center right;" <?php endif; ?>>
       <h2>

         <?php

         if ( ! empty( $categories ) ) {
             echo esc_html( $categories[0]->name );
          }

          ?>

       </h2>
     </div>
   </div>
 <?php endif; ?>

<?php if (is_home() || is_category()) : ?>

  <div class="container-fluid h2_wrapper">
    <div class="container">
      <h2>

        Blog

      </h2>
    </div>
  </div>

<?php endif; ?>

 <?php if (is_search()): ?>
   <div class="container-fluid h2_wrapper">
     <div class="container">
       <h2>

         <?php printf( esc_html__( 'Search Results for: %s', 'starting-theme' ), '<span>' . get_search_query() . '</span>' ); ?>

       </h2>
     </div>
   </div>
   <br />
 <?php endif; ?>
