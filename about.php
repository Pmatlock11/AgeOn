<?php
/* Template Name: About Template */
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
					<h2><span>About</span></h2>
				</header>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> posts" >
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<strong class="title">Age On Rage On</strong>
					<p>LeadingAge California has represented nonprofit senior living and service providers since 1961. Each year, the association continues to serve, inspire and advocate for our members through multiple channels, providing members with the tools they need to carry out their missions. As the champion of aging services in the state, the association prides itself on its deep relationships both in the Capitol and among its members. The association’s advocacy, educational programs and public relations help its members serve the needs of more than 100,000 of the state’s older adults. Representing nearly 600 members focused on senior living and care – including affordable housing, continuing care retirement communities, assisted living, skilled nursing, home- and community-based care and business partners and residents, LeadingAge California spans the full continuum of care. Whether working behind the scenes, testifying at public hearings, building coalitions, visiting member communities or visiting with elected officials, LeadingAge California actively works to create system changes through advocacy that strengthens members’ viability and supports innovations in the delivery of aging services.</p>
				</div>
				<div class="col-sm-12 col-md-3">
					<img src="<?php bloginfo('template_url'); ?>/img/right_logo.png" class="img-responsive sm_max">
				</div>
			</div>
			<div class="row map_padding">
				<div class="col-12 text-center">
					<div class="map_img_holder"><img src="<?php bloginfo('template_url'); ?>/img/map.png"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<strong class="title">LeadingAge California</strong>
					<p>LeadingAge California has represented nonprofit senior living and service providers since 1961. Each year, the association continues to serve, inspire and advocate for our members through multiple channels, providing members with the tools they need to carry out their missions. As the champion of aging services in the state, the association prides itself on its deep relationships both in the Capitol and among its members. The association’s advocacy, educational programs and public relations help its members serve the needs of more than 100,000 of the state’s older adults. Representing nearly 600 members focused on senior living and care – including affordable housing, continuing care retirement communities, assisted living, skilled nursing, home- and community-based care and business partners and residents, LeadingAge California spans the full continuum of care. Whether working behind the scenes, testifying at public hearings, building coalitions, visiting member communities or visiting with elected officials, LeadingAge California actively works to create system changes through advocacy that strengthens members’ viability and supports innovations in the delivery of aging services.</p>
				</div>
				<div class="col-sm-12 col-md-3">
					<img src="<?php bloginfo('template_url'); ?>/img/img8.jpg" class="img-responsive sm_max">
				</div>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row m_bottom_40">
				<div class="col-sm-12">
					<p>LeadingAge California’s influence can be found in all aspects of the policy arena. Leadership in our strategic goals comes from our highly engaged members, who help shape the future by developing public policy, hosting elected officials in their communities, writing letters, providing testimony in public hearings, meeting with legislators and participating in advocacy events at the Capitol. LeadingAge California works diligently with state regulators and regulatory offices to keep members abreast of critical regulatory issues and changes, as well as to insure that the interests of LeadingAge California members are represented in the decision making processes that occur in all areas of state government.</p>
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
		<div class="misc_area">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row pledge_area">
					<div class="col-sm-6 no-left-padding">
						<h2>(Header describing what you will get in the newsletter)</h2>
						<ul class="list-unstyled demo_links">
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-5 box text-center">
						<div class="newsletter_form">
							<form>
								<strong>Signup for our email newsletter</strong>
								<div class="layout_clear">
									<input type="email" placeholder="Email">
									<input type="submit" value="SUBMIT" class="btn_submit text-center">
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Aenean mollis lectus eget diam sodales.</p>
							</form>
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
