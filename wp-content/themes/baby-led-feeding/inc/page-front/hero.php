<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slides')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slides')) : the_row();
					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
      		$slide_content_type = get_sub_field('slide_content_type');
					$slide_content_heading = get_sub_field('slide_content_heading');
					$slide_content_paragraph = get_sub_field('slide_content_paragraph');
          $slide_background_colour = get_sub_field('slide_background_colour');
					$slide_link = get_sub_field('slide_link');
					?>

				<li class="slide" style="background:<?php echo $slide_background_colour; ?>">

          <div class="container">

            <div class="col-sm-5 slide_content__wrapper hidden-xs wow fadeInLeft">
              <p class="slide_content__cat"><?php echo $slide_content_type ?></p>
              <h1><?php echo $slide_content_heading; ?></h1>
              <p><?php echo $slide_content_paragraph ?></p>
							<a href="<?php echo $slide_link ?>" class="wow fadeInRight">
								View <?php echo $slide_content_type ?>
							</a>
            </div>

            <img class="desk hidden-xs wow fadeInRight" src="<?php echo $slide_image; ?>" alt="<?php echo $slide_content_heading ?>">

            <a href="<?php echo $slide_link ?>" class="mod hidden-sm hidden-md hidden-lg">
              <img class=" wow fadeIn" src="<?php echo $slide_image; ?>" alt="<?php echo $slide_content_heading ?>">
            </a>

            <div class="col-sm-5 slide_content__wrapper hidden-sm hidden-md hidden-lg wow fadeInLeft">
              <h1><?php echo $slide_content_heading; ?></h1>
            </div>



          </div>

				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>
</div>
