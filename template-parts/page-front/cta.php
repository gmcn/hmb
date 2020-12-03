<?php

$cta_bottom_img = get_field('call_to_action_image');
$cta_bottom_copy = get_field('call_to_action_copy');


 ?>



<div class="container-fluid front-cta" style="background: url(<?php echo $cta_bottom_img ?>) center center; background-size: cover;">

  <div class="front-cta_overlay"></div>

  <div class="row">
    <div class="col-12 align-self-center">
      <p><?php echo $cta_bottom_copy ?> <img src="<?php echo get_template_directory_uri(); ?>/images/logo_reg.svg" alt="HMB" loading=lazy> </p>
    </div>
  </div>


</div>
