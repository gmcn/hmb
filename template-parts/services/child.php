<?php

$colour = get_field('color');
$projectLocation = get_field('project_location');
$icon = get_field('icon');

$projects_categories = get_the_terms( $post->ID, 'projects_category' );

?>

<div class="single-service">
	<!-- <div class="container-fluid"> -->
		<div class="row no-gutters push-left">

			<div class="col-md-3">
				<div class="breadcrumbs">
					<?php
		        if ( function_exists('yoast_breadcrumb') ) {
		          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		        }
		        ?>

						<h2 class="single-service_cat">Services</h2>

						<h1 class="entry-title"><?php the_title(); ?></h1>

				</div>
			</div>

			<div class="col-md-9 single-service_wrapper">

				<div class="single-service-cat_icon">

					</div>

				<div class="row no-gutters" style="background: <?php echo $colour; ?>;">

					<div class="col-lg-6">

						<img class="icon" src="<?php echo $icon ?>" alt="<?php the_title(); ?>">

						<div class="single-service_content">



							<?php the_content(); ?>
							<p class="position"><?php echo $projectLocation; ?></p>

							<div class="inbound-links">

								 <ul>
									 <li>
										 <a href="/projects_category/<?php echo the_title(); ?>">View <?php echo the_title(); ?> Projects</a>
									 </li>
									 <li>
										 <a class="back" href="/services">Back to Services</a>
									 </li>
								 </ul>

						 </div>

						</div>
					</div>

					<div class="col-lg-6 single-service_gallery">
						<?php echo get_the_post_thumbnail($post->ID,'large-square', array('loading' => 'lazy')) ?>


						<?php
						$images = get_field('gallery');
						if( $images ): ?>
						<!-- Slider main container -->
						<div class="swiper-container project-gallery">
						  <!-- Additional required wrapper -->
						  <div class="swiper-wrapper">
								<?php foreach( $images as $image ): ?>
									<div class="swiper-slide">

										<a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">


			                <img src="<?php echo esc_url($image['sizes']['large-square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			              </a>



									</div>

								<?php endforeach; ?>
						  </div>
						  <!-- If we need pagination -->
						  <div class="swiper-pagination"></div>

							<!-- If we need navigation buttons -->
						  <div class="swiper-button-prev-unique"><</div>
						  <div class="swiper-button-next-unique">></div>

						  <!-- If we need scrollbar
						  <div class="swiper2-scrollbar"></div>-->
						</div>
						    <?php
						    // Reset the global post object so that the rest of the page works correctly.
						    wp_reset_postdata(); ?>
						<?php endif; ?>




					</div>

				</div>




					<?php
					$images = get_field('gallery');
					if( $images ): ?>
					<div class="d-none d-md-block">
						<div class="row no-gutters single-service_gallery__bottom ">
							<?php foreach( $images as $image ): ?>
									<div class="col-md-6 col-xl-3">

										<a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">


											<img src="<?php echo esc_url($image['sizes']['medium-square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

										</a>



									</div>
							<?php endforeach; ?>
						</div>
					</div>

					<?php endif; ?>


				</div>


			</div>


		</div>
	<!-- </div> -->
</div>
