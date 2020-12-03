<?php
/**
 * Template Name: Projects Main Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>
<?php
$categories = get_categories( 'projects_category', 'orderby=count&hide_empty=1' );
?>

<?php
if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) :
?>

  <div class="container-fluid filters_project">
    <div class="row push-left">
      <div class="col-md-3 d-none d-md-block">

        <div class="links">

          <ul>
            <li>
              <a href="/news">Latest</a>
            </li>

            <?php
              $args = array(
                  'type'            => 'yearly',
                  'limit'           => '',
                  'format'          => 'html',
                  'before'          => '',
                  'after'           => '',
                  'show_post_count' => false,
                  'echo'            => 1,
                  'order'           => 'DESC'
              );
              wp_get_archives( $args );
              ?>
          </ul>



        </div>

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

      <div class="col-md-9">
        <ul>

          <?php foreach ( $categories as $category ) : ?>

            <li class="filter_<?php echo $category->slug ?>">
              <a href="/category/<?php echo $category->slug ?>">
                <?php echo $category->name ?>
              </a>

            </li>

          <?php endforeach; ?>



        </ul>
      </div>
    </div>
  </div>

<?php endif ?>
