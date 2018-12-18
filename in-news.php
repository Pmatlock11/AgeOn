<?php
/* Template Name: In News */
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
		<div class="visual in-news" style="background:url('<?php bloginfo('template_url'); ?>/img/placeholder2.png') no-repeat; background-size:cover;">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="d-table">
						<div class="v-middle">
							<h2>In the News</h2>
							<p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.<br> Maecenas non erat sit amet lorem <br>egestas aliquet.</p>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div class="news_area">
			<div class="<?php echo esc_attr($container); ?> news_list" >
				<div class="row">
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 column">
						<img src="<?php bloginfo('template_url'); ?>/img/placeholder3.png" alt="#" class="img-responsive">
						<div class="text">
							<strong class="title">News title</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row pledge_area">
				<div class="col-sm-6">
					<img src="<?php bloginfo('template_url'); ?>/img/img2.png">
					<div class="align_right p-top">
						<p>Will you take a stand to protect California's older adults?</p>
						<h2>PLEDGE TODAY</h2>
						<p>Sign the pledge to ensure California older adults have access to long-term services and support.</p>
					</div>
				</div>
				<div class="col-sm-5 box text-center">
					<p>I support aging Californians</p>
					<p>The state is unprepared for the looming aging crisis. The status quo is unacceptable - it's time for a change.</p>
					<p>I call on our elected officials to ensure our growing population of older adults has access to long-term services and support.</p>
					<p>I pledge to help California #AgeOnRageOn.</p>
					<div class="newsletter_form">
						<form>
							<input type="email" placeholder="Email">
							<input type="submit" value="SUBMIT" class="btn_submit text-center">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> sharing_boxes" >
			<div class="row">
				<div class="col-sm-6">
					<div class="share_box text-center">
						<h2>SHARE <span>your story with us</span></h2>
						<div class="text_box">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn-primary green transparent">Share</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="share_box text-center orange">
						<h2>WRITE <span>to your legistlature</span></h2>
						<div class="text_box">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn-primary green transparent">Write</a>
						</div>
					</div>
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
