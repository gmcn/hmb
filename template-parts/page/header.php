<div class="page">
  <!-- <div class="container-fluid"> -->
  	<div class="row no-gutters push-left">
  		<div class="col-md-3 breadcrumbs">
  			<?php
  				if ( function_exists('yoast_breadcrumb') ) {
  				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
  				}
  			?>
  		</div>
  		<div class="col-md-9 page-image">

      <?php if ( is_tax('projects_category') || is_post_type_archive('projects') ) : ?>
        <?php echo get_the_post_thumbnail( 16, 'full' ); ?>
      <?php elseif (is_home() || is_archive() || is_404() ) : ?>
        <?php echo get_the_post_thumbnail( 22, 'full' ); ?>
      <?php else : ?>
        <?php echo get_the_post_thumbnail(); ?>
      <?php endif; ?>


  		</div>
  	</div>
  <!-- </div> -->

<!-- <div class="container-fluid"> -->
  <div class="row no-gutters push-left">
    <div class="col-md-3">

      <?php if (is_post_type_archive('projects')) : ?>
        <h1 class="title">Projects</h1>
      <?php elseif (is_tax('projects_category')) : ?>
        <h1 class="title">Projects</h1>
      <?php elseif (is_404()) : ?>
        <h1 class="title">Error 404</h1>
      <?php elseif (is_home() || is_archive()) : ?>
        <h1 class="title"><?php echo get_the_title( 22 ); ?></h1>
      <?php elseif ($post->post_parent == '20'): ?>
        <h1 class="title"><?php echo get_the_title( 20 ); ?></h1>
      <?php else : ?>
        <h1 class="title"><?php echo the_title(); ?></h1>
      <?php endif; ?>


    </div>
    <div class="col-md-9" style="background: #fff;">

    </div>
  </div>

<!-- </div> -->
