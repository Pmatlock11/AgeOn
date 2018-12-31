<?php
/* Template Name: Indivisual Story */
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
		<div class="visual">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="d-table">
						<div class="v-middle no-padding">
							<div class="flex_layout">
								<div class="col-sm-6"><img src="<?php bloginfo('template_url'); ?>/img/img3.png" alt="#" class="img-responsive"></div>
								<div class="col-sm-6">
									<strong>Meet</strong>
									<h2 class="bold">Maggie</h2>
									<p>When Maggie lost her husband, she still found her community.</p>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<div class="row story">
					<div class="col-sm-12">
						<h2>Hi, my name is Maggie Lopez</h2>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero.</p>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero.</p>
					</div>
				</div>				
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php bloginfo('template_url'); ?>/img/img4.png" alt="#" class="img-responsive">
							<div class="slide_caption">
								<div class="d-table">
									<div class="v-middle">
										<img src="<?php bloginfo('template_url'); ?>/img/quote.png" alt="#" class="quote_img">
										<p>I can't imagine what would happen to someone ike me without the support provided through these government initiatives</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?php bloginfo('template_url'); ?>/img/img4.png" alt="#" class="img-responsive">
							<div class="slide_caption">
								<div class="d-table">
									<div class="v-middle">
										<img src="<?php bloginfo('template_url'); ?>/img/quote.png" alt="#" class="quote_img">
										<p>I can't imagine what would happen to someone ike me without the support provided through these government initiatives</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?php bloginfo('template_url'); ?>/img/img4.png" alt="#" class="img-responsive">
							<div class="slide_caption">
								<div class="d-table">
									<div class="v-middle">
										<img src="<?php bloginfo('template_url'); ?>/img/quote.png" alt="#" class="quote_img">
										<p>I can't imagine what would happen to someone ike me without the support provided through these government initiatives</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="row sharing_row text-center">
					<div class="col-sm-12">
						<strong>Share this story</strong>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row full_description">
					<div class="col-sm-12">
						<h3 class="text-center">Long Terms Support and Services along with the workforce required is <br>a vital part of our community keeping serniors healthy.</h3>
						<p>Long Terms Support and Services along with the workforce required is a vital part of our community keeping seniors healthy. As the population of California ages the system is ill prepared to sustain the types of LTSS Maggie and her friends have enjoyed. As a community we need to come together and raise the awareness of the need to bolster these programs state wide. You and other future generations need to have the experience Maggie is having, help California… Age. On. Rage. On.</p>
						<div class="btns text-center">
							<a href="#" class="btn-primary purple">See the Impact</a>
							<a href="#" class="btn-primary  purple">Read the Stories</a>
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
		<div class="<?php echo esc_attr($container); ?>" >
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
