<?php

  $sectionTitle = get_sub_field('section_title');
  $advertImg = get_sub_field('advert_image');
  $advertBg = get_sub_field('advert_background_image');
  $advertLink = get_sub_field('advert_link');

 ?>



<div class="container-fluid" style="text-align: center; background: url(<?php echo $advertBg ?>); background-size: cover;">
  <div class="container recipes">
    <h3><?php echo $sectionTitle ?></h3>
    <?php  if( !empty( $advertImg ) ): ?>
      <img src="<?php echo esc_url($advertImg['url']); ?>" alt="<?php echo esc_attr($advertImg['alt']); ?>" />
    <?php endif; ?>
    <?php
    if( $advertLink ):
        $link_url = $advertLink['url'];
        $link_title = $advertLink['title'];
        $link_target = $advertLink['target'] ? $advertLink['target'] : '_self';
        ?>
        <a class="watch" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
  </div>
</div>
