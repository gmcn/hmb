<?php
/**
 * Template Name: Services Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
  include(locate_template("template-parts/page/header.php"));
?>

<div class="container-fluid">
  <div class="row page-default push-left">

    <div class="col-md-3">

      <?php if (is_page('about') || $post->post_parent == '20' ): ?>

        <div class="links">

           <ul>
             <li <?php if ($post->post_name == "about") : ?>class="current"<?php endif ?>><a href="/about">Profile</a></li>
             <li <?php if ($post->post_name == "timeline") : ?>class="current"<?php endif ?>><a href="/about/timeline/">Timeline</a></li>
             <li <?php if ($post->post_name == "people") : ?>class="current"<?php endif ?>><a href="/about/people/">People</a></li>
           </ul>

       </div>

      <?php endif; ?>

    </div>

     <div class="col-md-7">
       <h1 class="heading"><?php echo the_title(); ?>.</h1>
       <?php echo the_content(); ?>






     </div>





   </div>

   <div class="row services push-left">
     <div class="col-md-9 offset-md-3">
       <!-- <div class="container"> -->
         <div class="row no-gutters ">

           <?php
           $args = array(
           'post_parent' => $post->ID,
           'post_type' => 'page',
           'orderby' => 'menu_order',
           'order' => 'ASC'
           );

           $child_query = new WP_Query( $args );

           ?>

           <?php if ($child_query): ?>

             <?php

             $i = 1; while ( $child_query->have_posts() ) : $child_query->the_post();

             $thumb =  get_the_post_thumbnail_url($post->ID, 'medium-square');
             $excerpt = get_field('excerpt');
             $colour = get_field('color');
             $icon = get_field('icon');

             ?>


               <div class="col-md-6 col-xl-3 services-service" style="background: <?php echo $colour; ?>">
                 <a href="<?php the_permalink(); ?>">
                   <p class="service_title"><?php the_title(); ?></p>
                   <?php echo the_excerpt(); ?>

                   <img class="matchimg" src="<?php echo $thumb ?>" alt="<?php the_title(); ?>">
                   <img class="icon" src="<?php echo $icon; ?>" alt="<?php the_title(); ?>">
                 </a>
               </div>



             <?php $i++; endwhile; wp_reset_postdata(); ?>

           <?php endif; ?>



         </div>
       <!-- </div> -->
     </div>
   </div>





</div>






<?php
//get_sidebar();
get_footer();
