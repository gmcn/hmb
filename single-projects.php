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
 include(locate_template("template-parts/projects/content-projects.php"));
?>

<?php
//get_sidebar();
get_footer();
