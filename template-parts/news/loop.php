<?php
if ( have_posts() ) : ?>

  <div class="container-fluid news">

    <div class="row">

      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

      $thumb = get_the_post_thumbnail_url($post->ID, 'medium-square');

      $categories = get_the_category();

      ?>

        <div class="col-6 col-sm-4 col-lg-3 col-xl-2 news-item">
          <a href="<?php echo the_permalink() ?>">
            <p class="news-item_date"><?php echo get_the_date('d.m.y'); ?></p>

            <div class="news-item_wrap">
              <img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>">
              <div class="hover">
                <p><?php the_title(); ?></p>
                <p class="news-item_cat">
                  <?php foreach( $categories as $category ) {
                    echo $category->name;
                  } ?>
                </p>

              </div>
            </div>


          </a>
        </div>


      <?php endwhile; wp_reset_postdata(); ?>

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
