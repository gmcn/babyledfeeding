
			<?php
			// Get all the categories
			$categories = get_terms( 'recipe-categories' );

			// Loop through all the returned terms
			foreach ( $categories as $category ):

			    // set up a new query for each category, pulling in related posts.
			    $recipes = new WP_Query(
			        array(
			            'post_type' => 'recipes',
			            'showposts' => -1,
			            'tax_query' => array(
			                array(
			                    'taxonomy'  => 'recipe-categories',
			                    'terms'     => array( $category->slug ),
			                    'field'     => 'slug'
			                )
			            )
			        )
			    );
			?>

			<div class="container-fluid">
				<div class="container recipes">
					<h3><?php echo $category->name; ?></h3>
					<div class="row">
						<?php while ($recipes->have_posts()) : $recipes->the_post();

						$thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );

						 ?>

						 <article class="col-xs-6 col-md-4 recipes__recipe matchheight" <?php //post_class(array('col-xs-6', 'col-md-4', 'recipes__recipe', 'matchheight')); ?>>
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
				</div>
			</div>





			<?php wp_reset_postdata();
			// end the loop
			endforeach;
			?>
