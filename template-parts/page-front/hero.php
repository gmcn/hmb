<?php
$featured_posts = get_field('portfolio_carousel');
if( $featured_posts ): ?>
<!-- Slider main container -->
<div class="swiper-container portfolio_carousel">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <?php foreach( $featured_posts as $post ):

      $projectLocation = get_field('project_location');

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <div class="swiper-slide">
          <a href="<?php the_permalink(); ?>">

            <?php echo get_the_post_thumbnail($post_id, 'hero', array('loading' => 'lazy')); ?>

            <div class="swiper-slide_details">
              <p class="title"><?php the_title(); ?></p>
              <p><?php echo $projectLocation ?></p>

              <span>Click image to find out more.</span>
            </div>

          </a>
        </div>
    <?php endforeach; ?>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <!-- <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> -->

  <!-- If we need scrollbar
  <div class="swiper-scrollbar"></div>-->
</div>
    <?php
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
