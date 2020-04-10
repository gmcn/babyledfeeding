<div class="container-fluid videos">
	<div class="row">
		<div class="col-md-12 videos_wrapper">
			<?php
			// Get all the categories
			$categories = get_terms( 'video-categories' );

			// Loop through all the returned terms
			foreach ( $categories as $category ):

			    // set up a new query for each category, pulling in related posts.
			    $videos = new WP_Query(
			        array(
			            'post_type' => 'videos',
			            'showposts' => -1,
			            'tax_query' => array(
			                array(
			                    'taxonomy'  => 'video-categories',
			                    'terms'     => array( $category->slug ),
			                    'field'     => 'slug'
			                )
			            )
			        )
			    );
			?>

			<?php $i = 0; while ($videos->have_posts()) : $videos->the_post(); ?>

			<?php $i++; endwhile; ?>

			<h3><?php echo $category->name; ?> <span>(<?php echo $i++ ?>)</span> </h3>
			<ul class="videoslider">

				<?php while ($videos->have_posts()) : $videos->the_post();

				$thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );
				$video_url = get_field('video_url');

				 ?>

					<a class="fancybox" rel="group" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
						<div class="overlay"></div>
						<img class="play" src="<?php echo get_template_directory_uri() ?>/images/video_play.svg" alt="Play <?php the_title(); ?>">
						<?php echo $thumb; ?>
						<p><?php the_title(); ?></p>
					</a>


			    <!-- <li><?php the_title(); ?></li> -->

				<?php endwhile; ?>

			</ul>

			<?php wp_reset_postdata();
			// end the loop
			endforeach;
			?>
		</div>
	</div>
</div>
