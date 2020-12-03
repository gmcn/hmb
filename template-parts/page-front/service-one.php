<?php
$service_one = get_field('service_one');
if( $service_one ): ?>


<div class="front-service">
  <div class="row no-gutters">
    <div class="col-md-6 front-service_img">

      <img src="<?php echo get_the_post_thumbnail_url($service_one->ID, 'large-square'); ?>" alt="<?php echo $service_one->post_title; ?>" loading=lazy>

    </div>
    <div class="col-md-6 front-service_copy align-self-center">
      <h2><?php echo $service_one->post_title; ?>.</h2>
      <p><?php echo $service_one->excerpt; ?></p>

      <a href="<?php echo get_permalink( $service_one->ID ) ?>">Read More</a>

    </div>
  </div>
</div>



<?php endif; ?>
