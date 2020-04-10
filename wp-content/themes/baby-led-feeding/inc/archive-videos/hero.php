<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="videohero">

	<?php $videoSlider = new WP_Query(
			array(
					'post_type' => 'videos',
					'showposts' => 5,
			)
	); ?>

	<?php if ($videoSlider->have_posts()): ?>

		<ul class="videohero">

			<?php while ($videoSlider->have_posts()) : $videoSlider->the_post();

			$video_include_in_slider = get_field('video_include_in_slider');
			$slider_image = get_field('slider_image');
			$slider_text = get_field('slider_text');
			$thumb = get_the_post_thumbnail_url( $post_id, 'full' );
			$video_url = get_field('video_url');

			?>

				<?php if ($video_include_in_slider): ?>

					<li class="slide" style="background: url(<?php echo $slider_image; ?>); background-size: cover;">

						<div class="overlay">

						</div>

						<div class="container">
							<div class="vert-align">
								<h1><?php echo $slider_text; ?></h1>
								<a class="fancybox watch" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
									Watch Video
								</a>
							</div>
						</div>





					</li>

				<?php endif; ?>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>
</div>
