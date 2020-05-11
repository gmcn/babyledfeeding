<?php
// Get all the categories
$categories = get_terms( 'recipe-categories' ); ?>

<div class="container-fluid">
	<div class="container recipes_main">
		<h1>Meals/Courses</h1>
			<div class="row">

				<?php // Loop through all the returned terms
				foreach ( $categories as $category ):

					$thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

					$image = get_field('category_image', 'recipe-categories_' . $category->term_id );

					?>

				<article itemscope itemtype="http://schema.org/Recipe" class="col-xs-6 col-md-4 recipes_main__recipe matchheight">
					<div class="row">
						<div class="col-sm-6 col-md-12">
							<a itemprop="url" href="/recipe-categories/<?php echo $category->slug ?>">
								<img itemprop="image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
						</div>
						<div class="col-sm-6 col-md-12">
							<a itemprop="url" href="/recipe-categories/<?php echo $category->slug ?>"><h2><?php echo $category->name; ?></h2></a>
							<?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
							<p itemprop="description"><?php echo $category->description; ?></p>
						</div>
					</div>
				</article>

				<?php wp_reset_postdata();
				// end the loop
				endforeach;
				?>

		</div>
	</div>
</div>

<?php
// Get all the categories
$diets = get_terms( 'recipe-diets' ); ?>

<div class="container-fluid">
	<div class="container recipes_main">
		<h1>Special Diets</h1>
			<div class="row">

				<?php // Loop through all the returned terms
				foreach ( $diets as $diet ):

					$image = get_field('category_image', 'recipe-diets_' . $diet->term_id );

					?>

				<article class="col-xs-6 col-md-4 recipes_main__recipe matchheight">
					<div class="row">
						<div class="col-sm-6 col-md-12">
							<a href="/recipe-diets/<?php echo $diet->slug ?>">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
						</div>
						<div class="col-sm-6 col-md-12">
							<a href="/recipe-diet/<?php echo $diet->slug ?>"><h2><?php echo $diet->name; ?></h2></a>
							<?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
							<p><?php echo $diet->description; ?></p>
						</div>
					</div>
				</article>

				<?php wp_reset_postdata();
				// end the loop
				endforeach;
				?>

		</div>
	</div>
</div>

<?php
// Get all the categories
$types = get_terms( 'recipe-type' ); ?>

<div class="container-fluid">
	<div class="container recipes_main">
		<h1>Recipe Types</h1>
			<div class="row">

				<?php // Loop through all the returned terms
				foreach ( $types as $type ):

					$image = get_field('category_image', 'recipe-type_' . $type->term_id );

					?>

				<article class="col-xs-6 col-md-4 recipes_main__recipe matchheight" <?php //post_class(array('col-xs-6', 'col-md-4', 'recipes_main__recipe', 'matchheight')); ?>>
					<div class="row">
						<div class="col-sm-6 col-md-12">
							<a href="/recipe-type/<?php echo $type->slug ?>">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
						</div>
						<div class="col-sm-6 col-md-12">

							<a href="/recipe-type/<?php echo $type->slug ?>"><h2><?php echo $type->name; ?></h2></a>
							<?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
							<p><?php echo $type->description; ?></p>

						</div>
					</div>
				</article>

				<?php wp_reset_postdata();
				// end the loop
				endforeach;
				?>

		</div>
	</div>
</div>
