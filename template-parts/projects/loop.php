<?php
if ( have_posts() ) : ?>

  <div class="projects-loop">
    <div class="row no-gutters">
       <?php
      /* Start the Loop */
       while ( have_posts() ) : the_post();

      $thumb = get_the_post_thumbnail_url($post->ID, 'large-square' );
      $projectLocation = get_field('project_location');
      $projects_categories = get_the_terms( $post->ID, 'projects_category' );

      $image = get_field('category_thumbnail', 'projects_category_' . $term->term_id );


      $terms_string = join(', ', wp_list_pluck($projects_categories, 'name'));

      $projectIcon = get_field('project_icon');
      ?>

      <a href="<?php echo the_permalink() ?>">
        <div class="col-md-6 col-xl-4 project">


            <?php foreach ($projects_categories as $projects_cat) : ?>

              <div class="project-cat_icon" style="background: <?php echo get_field('color', $projects_cat->taxonomy . '_' . $projects_cat->term_id); ?>">

                <img src="<?php echo get_field('project_icon', $projects_cat->taxonomy . '_' . $projects_cat->term_id); ?>" alt="<?php echo $projects_cat->name ?>">

              </div>

            <?php endforeach; ?>


          <img src="<?php echo $thumb ?>" alt="<?php echo the_title(); ?>">

           <div class="hover">

             <p class="position">

               <?php echo $projectLocation ?>

             </p>
             <p class="name"><?php echo the_title(); ?></p>

             <p class="project-cat">

               <?php foreach ($projects_categories as $projects_cat) : ?>

                 <?php echo $projects_cat->name ?>

               <?php endforeach; ?>

             </p>



           </div>
         </a>


         </div>


      <?php endwhile;  ?>


  </div>

  <?php if (paginate_links()) { ?>
    <div class="container-fluid pagination">
      <!-- <div class="row"> -->
        <div class="col-sm-11">
          <?php $args = array(
              'prev_text'          => __('< Previous'),
              'next_text'          => __('Next >'),
            ); ?>
          <?php echo paginate_links($args); ?>
        </div>
      <!-- </div> -->
    </div>
  <?php } //end if paginate links
  ?>

</div>



<?php endif; ?>
