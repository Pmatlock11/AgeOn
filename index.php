<?php

/**
 * The main template file.
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
		<section class="banner" style="background:url('<?php bloginfo('template_url'); ?>/img/bg-banner.png') no-repeat; background-size:100% 100%;">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="col-sm-5">
						<h1>AGE ON. <br> RAGE ON <span>SUPPORT AMAZING AGING</span></h1>
						<div class="banner_row">
							<a href="#" class="btn-primary">Pledge Now</a>
						</div>
					</div>
					<div class="col-sm-6 pull-right right">
						<p>Today's seniors are living longer, more active lives. And as impressive as that is, they sometimes need a little help to keep living that way. It's not about pity — it's about power. Together, we can ensure that whatever it is that makes each person so unique carries on as they age.</p>
					</div>
				</div>
			</div>
		</section>
		<div class="top_services">
			<div class="service_post">
				<div class="<?php echo esc_attr($container); ?>" >
					<div class="row">
						<div class="col-sm-4 text-center p-top25">
							<h2>1 in 5</h2>
							<p>Today, one in five CAlifornians over the age of 65 lives in poverty</p>
							<a href="#" class="btn-primary red-button">See the Impact</a>
						</div>
						<div class="col-sm-8 img_holder">
							<img src="<?php bloginfo('template_url'); ?>/img/img1.png" alt="#" class="img-responsive block_img">
							<div class="overlay">
								<div class="txt">
									<strong>"[Strong quote from <br>indivisual's story here]"</strong>
									<p>- indivisual's Name</p>
									<a href="#" class="btn-primary transparent">See the story</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row three_cols">
						<div class="col-sm-4 text-center">
							<div class="col">
								<h3>90 %</h3>
								<p>California's 65-and-older population is projected to grow nearly 90% by 2030</p>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col">
								<h3>90 %</h3>
								<p>California's 65-and-older population is projected to grow nearly 90% by 2030</p>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col">
								<h3>90 %</h3>
								<p>California's 65-and-older population is projected to grow nearly 90% by 2030</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="service_post">
				<div class="<?php echo esc_attr($container); ?>" >
					<div class="row">
						<div class="col-sm-8 img_holder">
							<img src="<?php bloginfo('template_url'); ?>/img/img1.png" alt="#" class="img-responsive block_img">
							<div class="overlay">
								<div class="txt">
									<strong>"[Strong quote from <br>indivisual's story here]"</strong>
									<p>- indivisual's Name</p>
									<a href="#" class="btn-primary transparent">See the story</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center p-top25">
							<h2>1 in 5</h2>
							<p>Today, one in five CAlifornians over the age of 65 lives in poverty</p>
							<a href="#" class="btn-primary red-button">See the Impact</a>
						</div>
					</div>
					<div class="row three_cols add">
						<div class="col-sm-4 text-center">
							<div class="col">
								<h4>Who We Are</h4>
								<div class="btns text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col">
								<h4>Who is Affected</h4>
								<div class="btns text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col">
								<h4>How you can help</h4>
								<div class="btns text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="locate-area">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<strong class="text-center">California's at-risk older adult population is growing at a frighteningly unsustainable rate.</strong>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_url'); ?>/img/img-map.png" class="img-responsive map_img" alt="#">
					</div>
					<div class="col-sm-3 pull-right">
						<ul class="list-unstyled locations">
							<li>
								<img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="#">
								<span>Los Angeles</span>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="#">
								<span>San Francisco</span>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="#">
								<span>San Diego</span>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="#">
								<span>Sacramento</span>
							</li>
						</ul>
						<ul class="list-unstyled locations add">
							<li>
								<h4>Rapid Growing Population</h4>
								<p>14% of San Francisco County's population is over 65. By 2050, the percentage will double, to 29 percent.</p>
							</li>
							<li>
								<h4>Poverty</h4>
								<p>13.4% of older adults live below the federal poverty level.</p>
							</li>
							<li>
								<h4>Housing</h4>
								<p>69.7% of low-income older adults are rent-burdened.</p>
							</li>
						</ul>
					</div>
					
				</div>
				<div class="btns text-center">
					<a href="#" class="btn-primary center purple">See the Impact</a>
				</div>
			</div>
		</div>
		<div class="video_section">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="col-sm-12">
						<div class="vid_holder">
							<img src="<?php bloginfo('template_url'); ?>/img/img-video.png" alt="#" class="img-responsive">
							<a href="#" class="vid_player">Play</a>
						</div>
						<figcaption class="text-center">
							<p>California needs a master plan for aging that prepares us for the oncoming <br> aging crisis and ensures older adults have access to long-term services <br>and support.</p>
							<a href="#" class="btn-primary red-button">See the Solution</a>
						</figcaption>
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
				<div class="col-sm-6 center_block">
					<div class="share_box text-center">
						<h2>SHARE <span>your story with us</span></h2>
						<div class="text_box">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis lectus eget diam sodales.</p>
							<a href="#" class="btn-primary green transparent">Share</a>
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
					<div class="col-sm-5 box text-center">
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
