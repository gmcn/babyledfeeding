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
	include(locate_template("inc/single-recipes/filter.php"));
	include(locate_template("inc/single-recipes/content.php"));
	include(locate_template("inc/page-elements/share.php"));
	include(locate_template("inc/single-recipes/metadata.php"));
	include(locate_template("inc/page-elements/share.php"));
	include(locate_template("inc/single-recipes/related-recipes.php"));
	include(locate_template("inc/page-elements/comments.php"));

 ?>

<?php
get_sidebar();
get_footer();
