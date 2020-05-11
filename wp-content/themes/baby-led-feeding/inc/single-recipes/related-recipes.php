<?php

$term_list = wp_get_post_terms($post->ID, 'recipe-categories', array("fields" => "all"));
$product_cat = $term_list[0]->name;
 ?>

<div class="container related-recipes">
  <h3>You might also like these recipes</h3>
  <div class="row">

    <div class="col-md-12">

    <?php echo do_shortcode('[ajax_load_more post_type="recipes" posts_per_page="6" taxonomy="recipe-categories" taxonomy_terms=\"$product_cat\" taxonomy_operator="IN" order="DESC" offset="6" scroll="false" button_label="Load More Recipes" button_loading_label="Loading More Recipes"]') ?>

    </div>



  </div>
</div>
