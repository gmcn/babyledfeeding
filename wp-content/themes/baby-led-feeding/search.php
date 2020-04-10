<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

<?php

	include(locate_template("inc/page-elements/title.php"));

 ?>

<div class="container">
	<div class="row">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

		$thumb = get_the_post_thumbnail( $post_id, 'related-size' , array( 'loading' => 'lazy' ) );

		?>

		<article class="col-xs-6 col-md-3 recipes__recipe matchheight"<?php //post_class(array('col-xs-6', 'col-md-3', 'recipes__recipe', 'matchheight')); ?>>
      <div class="row">
        <div class="col-sm-6 col-md-12">
          <?php echo $thumb; ?>
        </div>
        <div class="col-sm-6 col-md-12">
          <?php //echo get_the_term_list( $post->ID, 'recipe-categories' ); ?>
          <p class="recipes__cat"><?php echo $product_cat; ?></p>
          <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
        </div>
      </div>
    </article>




			<?php //get_template_part( 'template-parts/content', 'search' ); ?>

		<?php endwhile; ?>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
