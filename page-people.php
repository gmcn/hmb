<?php
/**
 * Template Name: People Page
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


      </div>
    </div>

 </div>

 <?php if( have_rows('people') ): ?>

 <div class="row no-gutters">

		 <?php while( have_rows('people') ): the_row();

			 // vars
			 $title = get_sub_field('title');
			 $name = get_sub_field('name');
			 $description = get_sub_field('description');
				$email = get_sub_field('email');
				$image = get_sub_field('image');

			 ?>

			 <div class="col-md-6 col-xl-4 person">

				 <img src="<?php echo $image ?>" alt="<?php echo $name; ?>">

					<div class="hover">
						<p class="position"><?php echo $title; ?></p>
						<p class="name"><?php echo $name; ?></p>
						<p><?php echo $description; ?></p>
						<?php if ($email): ?>
							<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
						<?php endif; ?>

					</div>


				</div>

		 <?php endwhile; ?>

 </div>

<?php endif; ?>



<?php
//get_sidebar();
get_footer();
