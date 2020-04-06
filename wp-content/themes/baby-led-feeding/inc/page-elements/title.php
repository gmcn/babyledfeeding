<?php

$term_obj_list = get_the_terms( $post->ID, 'recipe-categories' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));


 ?>


   <?php if (is_singular('recipes')): ?>
     <div class="container-fluid h2_wrapper">
       <div class="container">
         <h2>

           <?php echo $terms_string; ?> Recipes

         </h2>
       </div>
     </div>
   <?php endif; ?>
