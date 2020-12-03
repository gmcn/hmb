<?php
$service_two = get_field('service_two');
if( $service_two ): ?>


<div class="front-service service_two">
  <div class="row no-gutters">

    <div class="col-md-6 front-service_img service_two d-md-none">

      <img src="<?php echo get_the_post_thumbnail_url($service_two->ID, 'large-square'); ?>" alt="<?php echo $service_two->post_title; ?>" loading=lazy>

    </div>

    <div class="col-md-6 front-service_copy align-self-center">
      <h2><?php echo $service_two->post_title; ?>.</h2>
      <p><?php echo $service_two->excerpt; ?></p>

      <a href="<?php echo get_permalink( $service_two->ID ) ?>">Read More</a>

    </div>

    <div class="col-md-6 front-service_img service_two d-none d-md-block">

      <img loading=lazy src="<?php echo get_the_post_thumbnail_url($service_two->ID, 'large-square'); ?>" alt="<?php echo $service_two->post_title; ?>">

    </div>

  </div>
</div>



<?php endif; ?>
