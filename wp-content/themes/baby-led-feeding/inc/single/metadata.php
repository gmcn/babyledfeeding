<?php

  $prep_time = get_field('prep_time');
  $cook_time = get_field('cook_time');
  $serves = get_field('serves');
  $ingredients_list = get_field('ingredients_list');
  $how_to_make = get_field('how_to_make');
  $add_helpful_tip = get_field('add_helpful_tip');
  $helpful_tip_header = get_field('helpful_tip_header');
  $helpful_tip = get_field('helpful_tip');
  $slider_feature = get_field('feature_this_recipe_in_the_homepage_slider');

 ?>

 <div class="container single-recipe">
   <div class="row">
     <div class="col-md-8">
       <h3><?php the_title(); ?></h3>
       <div class="row single-recipe__metadata">
         
         <?php if ($prep_time): ?>
           <div class="col-sm-4 col-md-2 single-recipe__metadata__prep">
             <div itemprop="prepTime" class="single-recipe__metadata__wrap">
               <p>Prep Time</p>
               <?php echo $prep_time ?>
             </div>
           </div>
         <?php endif; ?>

         <?php if ($cook_time): ?>
           <div class="col-sm-4 col-md-2 single-recipe__metadata__cook">
             <div itemprop="cookTime" class="single-recipe__metadata__wrap">
               <p>Cook Time</p>
               <?php echo $cook_time ?>
             </div>
           </div>
         <?php endif; ?>

         <?php if ($serves): ?>
           <div class="col-sm-4 col-md-3 single-recipe__metadata__serving">
             <div itemprop="recipeYield" class="single-recipe__metadata__wrap">
               <p>Servings</p>
               <?php echo $serves ?>
             </div>
           </div>
         <?php endif; ?>

         <div class="col-md-5 single-recipe__metadata__popovers">

           <?php if( get_field('icons') == 'Freeze Me' ) : ?>
             <img class="icon_popover_freeze" data-toggle="popover" data-placement="top" data-content="Freeze me" src="<?php echo get_template_directory_uri(); ?>/images/freeze-me.svg" alt="Freeze Me">
           <?php endif; ?>

           <?php
            $icons = get_field('icons');
            if( $icons ): ?>
                <?php foreach( $icons as $icon ): ?>


                    <img class="icon_popover_freeze" data-toggle="popover" data-placement="top" data-content="<?php echo $icon['label']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $icon['value']; ?>.svg" alt="<?php echo $icon['label']; ?>">


                <?php endforeach; ?>
            <?php endif; ?>

         </div>
       </div>
     </div>
     <div class="col-md-4">
       <?php echo get_the_post_thumbnail( get_the_ID(), 'custom-size', array('itemprop' => 'image')); ?>
     </div>
   </div>

   <div class="row single-recipe__actions">
     <div class="col-md-8">
       <a href="#">Add to shopping list</a>
       <a onclick="javascript:window.print();" href="#">Print Recipe</a>
     </div>
     <div class="col-md-4">
       <a href="#review">Leave a Review</a>
     </div>
   </div>

   <div itemprop="recipeIngredient" class="row single-recipe__ingredients">
     <div class="col-md-12">
       <h4>Ingredients</h4>
       <?php echo $ingredients_list ?>
     </div>
   </div>

   <div itemprop="recipeInstructions" class="row single-recipe__ingredients">
     <div class="col-md-12">
       <h4>Method</h4>
       <?php echo $how_to_make ?>
     </div>
    </div>
 </div>

 <?php if($add_helpful_tip) : ?>

 <div class="container single-recipe__tips">
   <div class="col-md-12">
     <h4><?php echo $helpful_tip_header ?></h4>
     <?php echo $helpful_tip ?>
   </div>
 </div>

 <?php endif; ?>
