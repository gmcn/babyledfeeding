




<?php

$args = array(
  'post_type'    => 'mealplanner',
  'posts_per_page' => 1,
  'orderby' => 'date',
  'order' => DESC
);

$the_query = new WP_Query( $args );



 ?>

 <?php $the_query->the_post();

    // adds view count on every hit
    setPostViews(get_the_ID());

    $query_id = get_the_ID();
    $week_beginning = get_field('week_beginning');
    $meal_plan_notes = get_field('meal_plan_notes');

   ?>

    <div class="container recipes planner">
      <div class="row">
        <h1><?php the_title(); ?></h1>
        <h2><?php echo $week_beginning; ?></h2>

        <?php

        	include(locate_template("inc/page-elements/share.php"));

         ?>

        <div class="col-md-10 col-md-offset-1 planner_content">
          <?php the_content(); ?>
          <hr />
        </div>

      </div>

      <div class="container" style="text-align: center">
        <a class="watch" onclick="javascript:window.print();" href="#">Print Meal Plan</a>
        <a class="watch" href="mailto:?subject=Baby Led Feeding Weekly Meal Plan&amp;body=Weekly Meal Plan <?php echo $week_beginning; ?> > <?php echo the_permalink(); ?>" title="Share by Email">
          Send to your email
        </a>
      </div>

      <?php if( have_rows('weekly_plan', $query_id ) ): ?>

        <div class="row hidden-xs">
          <div class="col-sm-2 col-md-1">
          </div>
          <div class="col-sm-2 col-md-2 planner-grid_head">

            <div class="planner-grid_head__wrapper">
              Breakfast
            </div>

          </div>
          <div class="col-sm-2 col-md-2 planner-grid_head">

            <div class="planner-grid_head__wrapper">
              Lunch
            </div>

          </div>
          <div class="col-sm-2 col-md-2 planner-grid_head">

            <div class="planner-grid_head__wrapper">
              Dinner
            </div>

          </div>
          <div class="col-sm-2 col-md-2 planner-grid_head">

            <div class="planner-grid_head__wrapper">
              Snack
            </div>

          </div>
          <div class="col-sm-2 col-md-3 planner-grid_head">

            <div class="planner-grid_head__wrapper notes">
              Notes from Aileen
            </div>

          </div>
        </div>

        <?php while( have_rows('weekly_plan', $query_id) ): the_row();

          // vars
          $week_plan_day_title = get_sub_field('week_plan_day_title');
          $week_plan_breakfast = get_sub_field('week_plan_breakfast');
          $week_plan_lunch = get_sub_field('week_plan_lunch');
          $week_plan_dinner = get_sub_field('week_plan_dinner');
          $week_plan_snack = get_sub_field('week_plan_snack');
          $week_plan_notes = get_sub_field('week_plan_notes');
          ?>

          <div class="row planner-grid">
            <div class="col-sm-2 col-md-1 planner-grid_day matchheight">

              <div class="planner-grid_head__wrapper hidden-sm hidden-md hidden-lg">
                <?php echo $week_plan_day_title ?>

              </div>

              <div class="vert-align hidden-xs">
                <?php echo $week_plan_day_title ?>
              </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 planner-grid_breakfast plannerheight">

              <div class="planner-grid_head__wrapper hidden-sm hidden-md hidden-lg">
                Breakfast
              </div>

              <?php $post_object = get_sub_field('week_plan_breakfast');
              if( $post_object ):
              // override $post
              $post = $post_object;
              setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail( $post_id, array('class' => 'matchheight', 'loading' => 'lazy'  ) ); ?>
                <?php the_title(); ?>
              </a>
              <?php wp_reset_postdata();  ?>
            <?php endif; ?>




            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 planner-grid_lunch plannerheight">
              <div class="planner-grid_head__wrapper hidden-sm hidden-md hidden-lg">
                Lunch
              </div>

              <?php $post_object = get_sub_field('week_plan_lunch');
              if( $post_object ):
              // override $post
              $post = $post_object;
              setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail( $post_id, array('class' => 'matchheight', 'loading' => 'lazy'  ) ); ?>
                <?php the_title(); ?>
              </a>
              <?php wp_reset_postdata();  ?>
            <?php endif; ?>

            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 planner-grid_dinner plannerheight">

              <div class="planner-grid_head__wrapper hidden-sm hidden-md hidden-lg">
                Dinner
              </div>

              <?php $post_object = get_sub_field('week_plan_dinner');
              if( $post_object ):
              // override $post
              $post = $post_object;
              setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail( $post_id, array('class' => 'matchheight', 'loading' => 'lazy'  ) ); ?>
                <?php the_title(); ?>
              </a>
              <?php wp_reset_postdata();  ?>
            <?php endif; ?>

            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 planner-grid_snack plannerheight">

              <div class="planner-grid_head__wrapper hidden-sm hidden-md hidden-lg">
                Snack
              </div>


              <?php $post_object = get_sub_field('week_plan_snack');
              if( $post_object ):
              // override $post
              $post = $post_object;
              setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail( $post_id, array('class' => 'matchheight', 'loading' => 'lazy'  ) ); ?>
                <?php the_title(); ?>
              </a>
              <?php wp_reset_postdata();  ?>
            <?php endif; ?>


            </div>
            <div class="col-sm-2 col-md-3 planner-grid_note">

              <h3 class="hidden-sm hidden-md hidden-lg">
                Notes From Aileen
              </h3>

              <?php echo $week_plan_notes ?>
            </div>
          </div>



        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

        <div class="container" style="text-align: center">
          <a class="watch" onclick="javascript:window.print();" href="#">Print Meal Plan</a>
          <a class="watch" href="mailto:?subject=Baby Led Feeding Weekly Meal Plan&amp;body=Weekly Meal Plan <?php echo $week_beginning; ?> > <?php echo the_permalink(); ?>" title="Share by Email">
            Send to your email
          </a>
        </div>


      <div class="row single-recipe__tips">
       <div class="col-md-12">
         <h4>Meal Plan Notes</h4>

         <p><?php echo $meal_plan_notes ?></p>

         </div>
     </div>

    </div>

    <?php //wp_reset_postdata(); ?>
