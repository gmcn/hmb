<?php

$featured_project = get_field('featured_project');

if( $featured_project ):

$projectLocation = get_field('project_location');

  ?>

<div class="container-fluid feat-project" style="background: url(<?php echo get_the_post_thumbnail_url($featured_project->ID, 'full'); ?>) center center">

  <div class="feat-project_overlay">

  </div>

  <a href="<?php echo get_permalink( $featured_project->ID ) ?>">
    <div class="feat-project_details">
      <p class="title"><?php echo $featured_project->post_title; ?></p>
      <p><?php echo $featured_project->project_location; ?></p>

      <span>Click image to find out more.</span>
    </div>
  </a>

</div>



<?php endif; ?>
