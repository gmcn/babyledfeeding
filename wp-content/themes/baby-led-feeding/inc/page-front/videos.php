 <?php

    $section_title = get_sub_field('section_title');

    $featVideoArgs = array( 'post_type' => 'videos', 'posts_per_page' => 1, 'orderby' => 'date');

    $featVideo = new WP_Query( $featVideoArgs );

    $featVideoRemainArgs = array( 'post_type' => 'videos', 'posts_per_page' => 3, 'orderby' => 'date', 'offset' => 1);

    $featVideoRemain = new WP_Query( $featVideoRemainArgs );

    $featVideoMobArgs = array( 'post_type' => 'videos', 'posts_per_page' => 6, 'orderby' => 'date');

    $featVideoMob = new WP_Query( $featVideoMobArgs );

  ?>



  <div class="container fpvideos">
    <h3><?php echo $section_title ?></h3>
    <div class="row fpvideos_wrapper hidden-xs">

      <?php while($featVideo->have_posts()) : $featVideo->the_post();

      $video_url = get_field('video_url');
      $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );
      $thumbsml = get_the_post_thumbnail( $post_id, 'medium' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

      ?>

        <article itemscope itemtype="http://schema.org/MusicVideoObject" class="col-sm-8 fpvideos_main">
          <div class="row">
            <div class="col-md-6 featureheight">
              <a itemprop="url" class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
                <?php echo $thumb; ?>
              </a>
              <?php echo $i ?>
            </div>
            <div class="col-md-6 featureheight">
              <div class="vert-align">
                <?php //echo the_title(); ?>
                <?php echo the_content(); ?>
                <a itemprop="url" class="fancybox watch hidden-xs" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
                  Watch Video
                </a>
              </div>
            </div>
          </div>
        </article>

        <?php endwhile; ?>

        <div class="col-sm-4">
          <?php while($featVideoRemain->have_posts()) : $featVideoRemain->the_post();

          $video_url = get_field('video_url');
          $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );
          $thumbsml = get_the_post_thumbnail( $post_id, 'medium' , array( 'loading' => 'lazy', 'itemprop' => 'image' ) );

          ?>


            <article itemscope itemtype="http://schema.org/MusicVideoObject" class="row fpvideos_feat">
              <div class="col-sm-6 col-md-4 matchheight">
                <a itemprop="url" class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
                  <?php echo $thumb; ?>
                </a>
                <?php echo $i ?>
              </div>
              <div class="col-sm-6 col-md-8 matchheight">
                <div class="vert-align">
                  <span itemprop="name">
                    <?php echo the_title(); ?>
                  </span>
                </div>
              </div>
            </article>


          <?php endwhile; ?>
        </div>

    </div>

    <div class="row fpvideos_wrapper hidden-sm hidden-md hidden-lg">

      <?php while($featVideoMob->have_posts()) : $featVideoMob->the_post();

      $video_url = get_field('video_url');
      $thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );
      $thumbsml = get_the_post_thumbnail( $post_id, 'medium' , array( 'loading' => 'lazy' ) );

      ?>

        <article class="col-xs-6 fpvideos_main matchheight">
          <a class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">

            <?php echo $thumb; ?>

            </a>

            <?php echo the_title(); ?>
            <a class="fancybox watch hidden-xs" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $video_url ?>">
              Watch Video
            </a>
        </article>

        <?php endwhile; ?>

    </div>

    <div class="row" style="text-align: center">
      <a class="watch" href="/videos">
        Watch all Videos
      </a>
    </div>



  </div>

  <?php wp_reset_postdata();  ?>
