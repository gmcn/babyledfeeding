<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<?php

	include(locate_template("inc/page-elements/title.php"));
	include(locate_template("inc/archive/filter.php"));
	include(locate_template("inc/single/content.php"));
	include(locate_template("inc/page-elements/share.php"));
	// include(locate_template("inc/single-recipes/metadata.php"));
	// include(locate_template("inc/page-elements/share.php"));
	include(locate_template("inc/single-recipes/related-recipes.php"));

	?>

	<?php if( have_rows('flexible_pre_comments') ): ?>
	 <?php while( have_rows('flexible_pre_comments') ): the_row(); ?>
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

	include(locate_template("inc/page-elements/comments.php"));

	 ?>

	 <?php if( have_rows('flexible_post_comments') ): ?>
	 	<?php while( have_rows('flexible_post_comments') ): the_row(); ?>
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
get_footer();
