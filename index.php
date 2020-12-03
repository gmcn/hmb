<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
