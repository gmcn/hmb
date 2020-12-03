<?php
/**
 * Template Name: Timeline Page
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


 <?php if( have_rows('timeline') ): ?>

 		<div class="years">

 		<?php $i = 1; ?>

 		<?php while( have_rows('timeline') ): the_row();
 			// vars
 			$year = get_sub_field('year');
 			$description = get_sub_field('description');
 			$image = get_sub_field('image');

 			?>

 				<div class="row no-gutters">

					<?php if($i % 2) : ?>

						<div class="col-4 col-sm-6 col-md-6 col-lg-3 year">
							<p class="inner rotate"> <?php echo $year ?></p>
						</div>

						<div class="col-8 col-sm-4 col-md-6 col-lg-3 year_desc">
							<p><?php echo $description ?></p>
						</div>

						<div class="col-lg-6">
							<img src="<?php echo $image ?>" alt="<?php echo $year ?>" />
						</div>

						<?php else: ?>

							<div class="col-lg-6 d-none d-lg-block">
								<img src="<?php echo $image ?>" alt="<?php echo $year ?>" />
							</div>

							<div class="col-8 col-sm-8 col-md-6 col-lg-3 year_desc">
								<p><?php echo $description ?></p>
							</div>

							<div class="col-4 col-sm-6 col-md-6 col-lg-3 year">
								<p class="inner rotate"> <?php echo $year ?></p>
							</div>

							<div class="col-12 d-sm-block d-md-block d-lg-none d-xl-none">
								<img src="<?php echo $image ?>" alt="<?php echo $year ?>" />
							</div>

					<?php endif; ?>

					</div>

 		<?php $i++; endwhile; ?>

 		</div>

 	<?php endif; ?>



<?php
//get_sidebar();
get_footer();
