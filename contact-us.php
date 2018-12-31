<?php
/* Template Name: Contact Us */
/**
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod('understrap_container_type');
?>


<div class="wrapper" id="index-wrapper">
	<main class="site-main" id="main">
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<header class="main_sec_header text-center">
					<h2><span>Submit Your Story</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget <br>diam sodales, in afficitur tortor gravida.</p>
				</header>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> contact_form" >
			<div class="row">
				<div class="col-sm-6"><input type="text" placeholder="Full Name"></div>
				<div class="col-sm-6"><input type="text" placeholder="Last Name"></div>
			</div>
			<div class="row">
				<div class="col-sm-12"><input type="email" placeholder="Email"></div>
			</div>
			<div class="row">
				<div class="col-sm-12"><input type="text" placeholder="Your social handle (i.e @landingpage)"></div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<input type="file" id="file1" multiple class="hidden">
					<label for="file1"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your images</label>
					<input type="file" id="file2" class="hidden">
					<label for="file2"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your Video</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12"><textarea placeholder="Your Story"></textarea></div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="checkbox" id="check1">
					<label for="check1"></label>
				</div>
			</div>
		</div>
	</main>
	<footer id="footer">
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<div class="col-sm-5">
					<p>Sign the pledge to ensure California <br>older adults have access to long-term<br> services and support.</p>
					<a href="#" class="btn-primary purple">Pledge Today</a>
				</div>
				<div class="col-sm-3">
					<ul class="socials list-unstyled">
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
					<ul class="quick_links list-unstyled">
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="#" class="max_width">
					<img src="<?php bloginfo('template_url'); ?>/img/logo3.png" alt="#" class="max_width">
				</div>
			</div>
			<div class="row text-center">
				<p class="rights">Copyright 2018 LeadingAge California <a href="#">Privacy</a> <a href="#">Terms</a></p>
			</div>
		</div>
	</footer>
</div><!-- Wrapper end -->
<?php get_footer(); ?>
