<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

  include(locate_template("inc/page-elements/title.php"));
  include(locate_template("inc/archive-weaning/filter.php"));
	// include(locate_template("inc/taxonomy-recipes/popular.php"));
	include(locate_template("inc/taxonomy-recipes/loop.php"));

 ?>

 <?php if( have_rows('flexible_front_page') ): ?>
 	<?php while( have_rows('flexible_front_page') ): the_row(); ?>
 			<?php if( get_row_layout() == 'advert' ): ?>

 					<?php include(locate_template("inc/page-front/advert.php")); ?>

 			<?php elseif( get_row_layout() == 'posts' ): ?>

				<?php include(locate_template("inc/page-front/posts.php")); ?>

			<?php elseif( get_row_layout() == 'videos' ): ?>

				<?php include(locate_template("inc/page-front/videos.php")); ?>

			<?php elseif( get_row_layout() == 'general_content' ): ?>

				<?php include(locate_template("inc/page-front/general.php")); ?>

			<?php elseif( get_row_layout() == 'books_products' ): ?>

				<?php include(locate_template("inc/page-front/products.php")); ?>

			<?php elseif( get_row_layout() == 'newsletter' ): ?>

				<?php include(locate_template("inc/page-elements/newsletter.php")); ?>

 			<?php endif; ?>
 	<?php endwhile; ?>
 <?php endif; ?>

<?php
//get_sidebar();
get_footer();
