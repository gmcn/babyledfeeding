
<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	

		<ul class="bxslider">

			<?php

				/*
				*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
				*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
				*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
				*/

				$post_objects = get_field('slide_object');



				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>


								<li class="slide" style="background: <?php echo the_field('slider_background_colour', $post_object->ID); ?>">

				          <div class="container">

				            <div class="col-sm-5 slide_content__wrapper hidden-xs wow fadeIn">
				              <p class="slide_content__cat">Recipe</p>
				              <h1><?php the_field('slider_title', $post_object->ID); ?></h1>
				              <p><?php the_field('slide_content_paragraph', $post_object->ID); ?></p>
											<a href="<?php echo the_permalink(); ?>" class="wow fadeIn">
												View Recipe
											</a>
				            </div>

										<img class="desk hidden-xs wow fadeIn" src="<?php the_field('slider_image', $post_object->ID); ?>" alt="<?php the_field('slider_title', $post_object->ID); ?>">

										<a href="<?php echo $slide_link ?>" class="mod hidden-sm hidden-md hidden-lg">
				              <img class=" wow fadeIn" src="<?php the_field('slider_image', $post_object->ID); ?>" alt="<?php the_field('slider_title', $post_object->ID); ?>">
				            </a>

				            <div class="col-sm-5 slide_content__wrapper hidden-sm hidden-md hidden-lg wow fadeInLeft">
				              <h1><?php the_field('slider_title', $post_object->ID); ?></h1>
				            </div>



				          </div>

								</li>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;?>

		</ul>
  
</div>
