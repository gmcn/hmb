<?php

$colour = get_field('color');
$projectLocation = get_field('project_location');

$projects_categories = get_the_terms( $post->ID, 'projects_category' );

?>

<div class="single-project">
	<!-- <div class="container-fluid"> -->
		<div class="row no-gutters push-left">

			<div class="col-md-3">
				<div class="breadcrumbs">
					<?php
		        if ( function_exists('yoast_breadcrumb') ) {
		          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		        }
		        ?>

						<h2 class="single-project_cat">Projects</h2>

				</div>
			</div>

			<div class="col-md-9 single-project_wrapper">

				<?php foreach ($projects_categories as $projects_cat) : ?>

					<div class="project-cat_icon" style="background: <?php echo get_field('color', $projects_cat->taxonomy . '_' . $projects_cat->term_id); ?>">

						<img src="<?php echo get_field('project_icon', $projects_cat->taxonomy . '_' . $projects_cat->term_id); ?>" alt="<?php echo $projects_cat->name ?>">

					</div>

				<?php endforeach; ?>

				<div class="row no-gutters" style="background: <?php echo $colour; ?>; margin-top: 50px;">

					<div class="col-lg-6">
						<div class="single-project_content">

							<div class="single-project_content__cat">
								<?php foreach ($projects_categories as $projects_cat) : ?>

									<?php echo $projects_cat->name ?>

								<?php endforeach; ?>
							</div>




							<h1 class="entry-title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<p class="position"><?php echo $projectLocation; ?></p>

							<div class="inbound-links">

								 <ul>
									 <li>
										 <a class="back" href="/projects">Back to projects</a>
									 </li>
								 </ul>

						 </div>

						</div>
					</div>

					<div class="col-lg-6 single-project_gallery">

						<?php
						$images = get_field('gallery');
						if( $images ) : ?>
						<!-- Slider main container -->
						<div class="swiper-container project-gallery">
						  <!-- Additional required wrapper -->
						  <div class="swiper-wrapper">
								<?php foreach( $images as $image ) : ?>
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
						<?php endif; ?>




					</div>

				</div>




					<?php
					if( $images ): ?>
					<div class="d-none d-md-block">
						<div class="row no-gutters single-project_gallery__bottom ">
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

			<div class="container-fluid">
				<div class="row push-left">
					<div class="col-md-11 pagination">
						<?php
							$prev_post = get_previous_post();
							if($prev_post) {
							   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
							   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="prev">&laquo; Previous Project</a>' . "\n";
							}

							$next_post = get_next_post();
							if($next_post) {
							   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
							   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next">Next Project &raquo;</a>' . "\n";
							}
							?>
					</div>

				</div>
			</div>


		</div>
	<!-- </div> -->
</div>
