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
	include(locate_template("inc/archive-weaning/loop.php"));

 ?>

<?php
get_sidebar();
get_footer();
