<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->


</div><!-- #page -->


<?php if ( is_front_page() || is_singular('projects') || is_single() || is_404() || is_page( array( 'about', 'timeline', 'homes', 'developments', 'farm', 'commercial' ) ) ) : ?>



	<?php

	$args = array(
	    'post_type' => 'post',
			'posts_per_page' => 5,
	);
	$query = new WP_Query( $args );


	 ?>

	 <?php if ( $query->have_posts() ) : ?>

		 <div class="footer-news">

			 <div class="row no-gutters">

			 <?php $i=1; while ( $query->have_posts() ) : $query->the_post();

		 		$thumb = get_the_post_thumbnail_url($post->ID, 'medium-square');

		 		$categories = get_the_category();

		 		?>

				<?php if ($i == 5): ?>
					<div class="col-6 col-sm-4 col-xl-2 footer-news-item viewall">


			 				<div class="footer-news-item_wrap">

								<p>News</p>


								<a href="/news">View All</a>

			 				</div>



			 		</div>
				<?php endif; ?>


		 		<div class="col-6 col-sm-4 col-xl-2 footer-news-item">
		 			<a href="<?php echo the_permalink() ?>">

		 				<div class="footer-news-item_wrap">
		 					<img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>">
		 					<div class="hover">
		 						<p><?php the_title(); ?></p>
		 						<p class="footer-news-item_cat">
		 							<?php foreach( $categories as $category ) {
		 								echo $category->name;
		 							} ?>
		 						</p>

		 					</div>
		 				</div>


		 			</a>
		 		</div>


		 		<?php $i++; endwhile; wp_reset_postdata();?>

			 </div>



			</div>

		<?php endif; ?>




<?php endif; ?>










<footer>

	<div class="container-fluid footer">
		<div class="row">
			<div class="col-md-1 footer-back d-none d-md-block">
				<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="Back to top">

				<a class="byline" href="#content">
					<img src="<?php echo get_template_directory_uri(); ?>/images/back-to-top.png" alt="Back to top">
				</a>

			</div>

			<div class="col-md-10 footer-main">

				<div class="row">
					<div class="col-md-6 offset-md-6">
						<p class="title">Be brave… <span>make plans.</span></p>

						<p class="contact">Click <a href="/contact">HERE</a> to contact us now.</p>


						<div class="row nav">
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>Home</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-1',
										) );
									?>
							</div>
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>Projects</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-2',
										) );
									?>
							</div>
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>Services</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-3',
										) );
									?>
							</div>
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>About</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-4',
										) );
									?>
							</div>
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>News</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-5',
										) );
									?>
							</div>
							<div class="col-6 col-sm-4 col-lg-2 nav-wrap">
								<p>Contact</p>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'slider-nav-6',
										) );
									?>
							</div>
						</div>

						<div class="row sig">

							<div class="col-12">

								<ul>
									<li>© HMB <?php echo date('Y'); ?></li>
									<li><a href="/cookie-policy">Cookie Policy</a></li>
									<li><a href="/sitemap.xml">Sitemap</a></li>
								</ul>
							</div>



						</div>


					</div>
				</div>





			</div>

			<div class="col-md-1 footer-social">
				<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Follow HMB on Facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Follow HMB on Twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Follow HMB on Instagram">

				<a href="https://cornellstudios.com" target="_blank" class="byline">

					<img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/website-by-cornell.png" alt="Website by Cornell">

					<span class="d-block d-md-none">Website by Cornell Studios</span>

				</a>

			</div>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
