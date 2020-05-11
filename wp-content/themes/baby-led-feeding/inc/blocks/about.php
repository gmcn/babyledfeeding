<?php

  $image = get_field('image');

 ?>

<div class="page-about_about">
  <div class="row">
    <div class="col-md-4 col-lg-3 col-lg-offset-1 page-about_about__img matchheight">
      <div class="vert-align">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      </div>
    </div>
    <div class="col-md-8 page-about_about__copy matchheight">
      <h2><?php echo the_field('heading'); ?></h2>
      <p><?php echo the_field('copy'); ?></p>
    </div>
  </div>
</div>
