<?php
/**
 * Template Name: Contact Page
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

 <div class="contact">

	<div class="row no-gutters push-left">
		<div class="col-sm-6 col-lg-4 contact-form">
			<p class="title"> Send a message</p>
			<?php echo do_shortcode('[contact-form-7 id="7" title="Contact Form"]');?>
		</div>
		<div class="col-sm-6 col-lg-2 contact-content">

			<?php echo the_content(); ?>

		</div>
	<div class="col-lg-6">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2373.423156099143!2d-6.744038182704378!3d54.64763849701649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486060fa2f7ee2dd%3A0x696692fcaafb7b1e!2s10+Union+St%2C+Cookstown+BT80+8NN!5e0!3m2!1sen!2suk!4v1563979419125!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
	</div>

</div>



<?php
// get_sidebar();
get_footer();
