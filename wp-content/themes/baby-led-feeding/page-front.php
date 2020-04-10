<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>



<?php

	include(locate_template("inc/page-front/hero.php"));

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
