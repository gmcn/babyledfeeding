<?php

  $sectionTitle = get_sub_field('sectionTitle');
  $genealImage = get_sub_field('general_content_image');
  $generalContentContent = get_sub_field('general_content_content');

 ?>

<div class="container-fluid fp_row-four">
  <div class="container">
    <?php if ($sectionTitle): ?>
      <h3><?php echo $sectionTitle ?></h3>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-6 matchheight">
        <img src="<?php echo esc_url($genealImage['url']); ?>" alt="<?php echo esc_attr($genealImage['alt']); ?>" />
      </div>
      <div class="col-sm-6 matchheight">
        <div class="vert-align">
          <?php echo $generalContentContent; ?>
        </div>
      </div>
    </div>
  </div>
</div>
