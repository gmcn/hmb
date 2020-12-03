<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700;800&display=swap" rel="stylesheet">
<?php wp_head();

$description = get_bloginfo( 'description', 'display' );

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>


		<nav class="navbar navbar-expand-md">
	    <a class="navbar-brand" href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>">
			</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>


			<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					// 'container'       => 'div',
					// 'container_class' => 'collapse navbar-collapse',
					// 'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>

				<a class="tel" href="tel:028 8676 3515">028 8676 3515</a>

				</div>

				<!-- Use any element to open the sidenav -->
				<span class="openNav" onclick="openNav()">

					<img src="<?php echo get_template_directory_uri(); ?>/images/open_nav.png" alt="Open Navigation">

				</span>

	  </nav>

	</header><!-- header -->

	<div id="content" class="site-content">


		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<div class="menu_wrap">
				<p>Home</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-1',
						) );
					?>
			</div>

			<div class="menu_wrap">
				<p>Projects</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-2',
						) );
					?>
			</div>

			<div class="menu_wrap">
				<p>Services</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-3',
						) );
					?>
			</div>

			<div class="menu_wrap">
				<p>About</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-4',
						) );
					?>
			</div>

			<div class="menu_wrap">
				<p>News</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-5',
						) );
					?>
			</div>

			<div class="menu_wrap">
				<p>Contact</p>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'slider-nav-6',
						) );
					?>
			</div>


		</div>
