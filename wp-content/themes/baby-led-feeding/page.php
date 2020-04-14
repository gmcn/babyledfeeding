<?php
/**
 * The template for displaying all pages
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

	<div class="container page-default">
		<div class="row">
			<h1><?php the_title(); ?></h1>
			<div class="col-md-12">
				<?php echo the_content(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
