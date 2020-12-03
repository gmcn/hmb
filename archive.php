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

	include(locate_template("template-parts/page/header.php"));
	include(locate_template("template-parts/news/filter.php"));
	 // include(locate_template("template-parts/news/parent-heading.php"));
	 include(locate_template("template-parts/news/loop.php"));

	 ?>

<?php
//get_sidebar();
get_footer();
