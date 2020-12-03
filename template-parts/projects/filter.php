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
$projects_categories = get_terms( 'projects_category', 'orderby=count&hide_empty=1' );
?>

<?php
if ( ! empty( $projects_categories ) && ! is_wp_error( $projects_categories ) ) :
?>

  <div class="container-fluid filters_project">
    <div class="row push-left">
      <div class="col-md-9 offset-md-3">
        <ul>

          <li class="filter_all">

            <a href="/projects">All</a>

          </li>

          <?php foreach ( $projects_categories as $projects_category ) : ?>

            <li class="filter_<?php echo $projects_category->slug ?>">
              <a href="/projects_category/<?php echo $projects_category->slug ?>">
                <?php echo $projects_category->name ?>
              </a>

            </li>

          <?php endforeach; ?>



        </ul>
      </div>
    </div>
  </div>

<?php endif ?>
