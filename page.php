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

<?php

	include(locate_template("template-parts/page/header.php"));

 ?>

 <div class="container-fluid">
	 <div class="row page-default push-left">

  	 <div class="col-md-3">

  		 <?php if (is_page('about') || $post->post_parent == '20' ): ?>

  			 <div class="links">

  		 			<ul>
  		 				<li <?php if ($post->post_name == "about") : ?>class="current"<?php endif ?>><a href="/about">Profile</a></li>
  		 				<li <?php if ($post->post_name == "timeline") : ?>class="current"<?php endif ?>><a href="/about/timeline/">Timeline</a></li>
  		 				<li <?php if ($post->post_name == "people") : ?>class="current"<?php endif ?>><a href="/about/people/">People</a></li>
  		 			</ul>

  	 		</div>

  		 <?php endif; ?>

  	 </div>

      <div class="col-md-7">
  			<h1 class="heading"><?php echo the_title(); ?>.</h1>
  			<?php echo the_content(); ?>

				<div class="inbound-links">

					 <ul>
						 <li>
							 <a href="/contact">Contact Us</a>
						 </li>
						 <li>
							 <a href="/projects">View Projects</a>
						 </li>
						 <li>
							 <a class="back" href="/">Back to home</a>
						 </li>
					 </ul>

			 </div>


      </div>
    </div>
 </div>



<?php
//get_sidebar();
get_footer();
