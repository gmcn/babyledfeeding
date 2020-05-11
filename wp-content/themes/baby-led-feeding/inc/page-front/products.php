<?php

  $front_page_row_five_title = get_sub_field('section_title');

 ?>

<div class="container">

    <?php if( have_rows('bookproducts_items') ): ?>

    	<div class="row products">

        <h3><?php echo $front_page_row_five_title ?></h3>

    	<?php while( have_rows('bookproducts_items') ): the_row();

    		// vars
    		$bookproduct_title = get_sub_field('bookproduct_title');
    		$bookproduct_desc = get_sub_field('bookproduct_desc');
    		$bookproduct_image = get_sub_field('bookproduct_image');
        $bookproduct_link = get_sub_field('bookproduct_link');
        $bookproduct_link_url = $bookproduct_link['url'];
        $bookproduct_link_title = $bookproduct_link['title'];
        $bookproduct_link_target = $bookproduct_link['target'] ? $bookproduct_link['target'] : '_self';

    		?>

    		<article class="col-xs-6 products__product">

            <div class="col-md-6 matchheight">
              <?php if( $bookproduct_link ): ?>
                <a href="<?php echo esc_url( $bookproduct_link_url ); ?>" target="<?php echo esc_attr( $bookproduct_link_target ); ?>">
              <?php endif; ?>

                <img src="<?php echo esc_url($bookproduct_image['url']); ?>" alt="<?php echo esc_attr($bookproduct_image['alt']); ?>" />

              <?php if( $bookproduct_link ): ?>
                </a>
              <?php endif; ?>



            </div>
            <div class="col-md-6 matchheight">
              <div class="vert-align">

                <div class="products__product__cat">
                    Book
                </div>

                <?php echo $bookproduct_desc ?>

                <?php if( $bookproduct_link ): ?>
                  <a class="watch" href="<?php echo esc_url( $bookproduct_link_url ); ?>" target="<?php echo esc_attr( $bookproduct_link_target ); ?>"><?php echo esc_html( $bookproduct_link_title ); ?></a>
                <?php endif; ?>
              </div>
            </div>

    		</article>

    	<?php endwhile; ?>

    	</div>

    <?php endif; ?>
</div>
