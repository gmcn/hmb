<?php

$colour = get_field('color');
$projectLocation = get_field('project_location');
$icon = get_field('icon');

$projects_categories = get_the_terms( $post->ID, 'projects_category' );

?>

<div class="page-default single-news">
	<!-- <div class="container-fluid"> -->
		<div class="row no-gutters push-left">

			<div class="col-md-3">
				<div class="breadcrumbs">
					<?php
		        if ( function_exists('yoast_breadcrumb') ) {
		          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		        }
		        ?>

						<h2 class="single-news_cat">News</h2>

						<p class="entry-title"><?php echo get_the_date('d.m.y'); ?></p>

				</div>
			</div>

			<div class="col-md-9 single-news_wrapper">

				<div class="single-news-cat_icon">

				</div>

				<div class="row no-gutters" style="background: <?php echo $colour; ?>;">

					<div class="col-lg-6">

						<div class="single-news_content">

							<?php the_content(); ?>
							<p class="position"><?php echo $projectLocation; ?></p>

							<div class="inbound-links">

								 <ul>
									 <li>
										 <a class="back" href="/news">Back to News</a>
									 </li>
								 </ul>

						 </div>

						</div>
					</div>

					<div class="col-lg-6 single-news_gallery">



						<?php
						$images = get_field('add_images');
						if( $images ): ?>
						<!-- Slider main container -->
						<div class="swiper-container project-gallery">
						  <!-- Additional required wrapper -->
						  <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <a class="fancybox" rel="group" href="<?php echo get_the_post_thumbnail_url($post->ID,'large') ?>" alt="<?php echo the_title(); ?>">

                    <img src="<?php echo get_the_post_thumbnail_url($post->ID,'large-square') ?>" alt="<?php echo the_title(); ?>" />



                  </a>



                </div>
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

            <?php else: ?>

            <?php echo get_the_post_thumbnail($post->ID,'large-square', array('loading' => 'lazy')) ?>

						<?php endif; ?>




					</div>

				</div>


				</div>


			</div>


		</div>
	<!-- </div> -->
</div>
