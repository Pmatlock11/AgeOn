<?php
/* Template Name: Home Page */
/**
 * 
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
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
<div class="wrapper" id="index-wrapper">
	<main class="site-main" id="main">
		<?php $home_bg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
		<section class="banner" style="background:url('<?php echo $home_bg_img[0]; ?>') no-repeat; background-size:100% 100%;">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row p_relative">
					<div class="col-sm-5">
						<h1><?php the_field('banner_heading'); ?> <span><?php the_field('banner_tagline'); ?></span></h1>
						<div class="banner_row">							
							<a href="#" class="btn-primary pledge_btn">Pledge <span class="xs_d_block">Today</span><span class="xs_d_none">Now</span></a>
							<div class="banner_socials">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-11 col-sm-6 banner_text pull-right right">
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</section>
		<div class="top_services">
			<div class="service_post">
				<div class="<?php echo esc_attr($container); ?>" >
					<div class="row d-none-xs-small">
						<div class="col-sm-4 text-center p-top25">
							<h2><?php the_field('left_heading'); ?></h2>
							<p><?php the_field('left_tagline'); ?></p>
							<a href="#" class="btn-primary red-button">See the Impact</a>
						</div>
						<div class="col-sm-8 img_holder">
							<img src="<?php the_field('story_image'); ?>" alt="#" class="img-responsive block_img">
							<div class="overlay">
								<div class="txt">
									<strong><?php the_field('story_title'); ?></strong>
									<p>- <?php the_field('author_name'); ?></p>
									<a href="#" class="btn-primary transparent">See the story</a>
								</div>
							</div>
						</div>
					</div>
					<div id="myCarousel" class="carousel slide new_slider" data-ride="carousel">
						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ul>
						<!-- The slideshow -->
						<div class="carousel-inner three_cols">
							<?php $cn = 1;
						if (have_rows('info_box')) : while (have_rows('info_box')) : the_row(); ?>
							<div class="carousel-item <?php if ($cn == 1) {
																																	echo 'active';
																																} ?>">
								<div class="col-sm-4 text-center">
									<div class="col">
										<h3><?php the_sub_field('info_title'); ?></h3>
										<p><?php the_sub_field('info_text'); ?></p>
									</div>
								</div>
							</div>
							<?php $cn++;
						endwhile;
						endif; ?>
						</div>
                	</div>

					<div class="row three_cols xs_d_none">
						<?php if (have_rows('info_box')) : while (have_rows('info_box')) : the_row(); ?>
						<div class="col-sm-4 text-center">
								<div class="col">
									<h3><?php the_sub_field('info_title'); ?></h3>
									<p><?php the_sub_field('info_text'); ?></p>
								</div>
							</div>
						<?php endwhile;
					endif; ?>
					</div>
				</div>
			</div>
			<div class="service_post">
				<div class="<?php echo esc_attr($container); ?>" >
					<div class="row d-none-xs-small">
						<div class="col-sm-8 img_holder">
							<img src="<?php bloginfo('template_url'); ?>/img/img1.png" alt="#" class="img-responsive block_img">
							<div class="overlay">
								<div class="txt">
									<strong><?php the_field('second_story_title'); ?></strong>
									<p>- <?php the_field('second_story_author'); ?></p>
									<a href="#" class="btn-primary transparent">See the story</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center p-top25">
							<h2><?php the_field('right_heading'); ?></h2>
							<p><?php the_field('right_tagline'); ?></p>
							<a href="#" class="btn-primary red-button">See the Impact</a>
						</div>
					</div>
					<div class="row three_cols add">
						<?php if (have_rows('link_box')) : while (have_rows('link_box')) : the_row(); ?>
						<div class="col-sm-4 text-center">
							<div class="col">
								<h4><?php the_sub_field('link_box_title'); ?></h4>
								<div class="btns text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
							</div>
						</div>
							<?php endwhile;
						endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="locate-area">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="map-area">
					<div class="row">
						<strong class="text-center"><?php the_field('location_section_heading'); ?></strong>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="state_map">
								<?php the_field('map_code'); ?>
							</div>
						</div>
						<div class="col-sm-3 pull-right">
							<ul class="list-unstyled locations location_lising ">
								<?php $cn = 1;
							if (have_rows('location_options')) : while (have_rows('location_options')) : the_row(); ?>
								<li class="state_<?php echo $cn++; ?>">
									<span class="arrow"></span>
									<span><?php the_sub_field('country_name'); ?></span>
								</li>
								<?php endwhile;
							endif; ?>
							</ul>
							<div class="state_description_wrap">
								<?php $cn = 1;
							if (have_rows('location_options')) : while (have_rows('location_options')) : the_row(); ?>
								<div class="state_des <?php if ($cn == 1) {
																														echo 'active';
																													} ?>" id="state_<?php echo $cn++; ?>_description">
									<h4><?php the_sub_field('country_name'); ?></h4>
									<ul class="list-unstyled locations add">
										<?php if (have_rows('location_feature')) : while (have_rows('location_feature')) : the_row(); ?>
										<li>
											<h4><?php the_sub_field('feature_title'); ?></h4>
											<p><?php the_sub_field('feature_text'); ?></p>
										</li>
									<?php endwhile;
								endif; ?>
									</ul>
								</div>
								<?php endwhile;
							endif; ?>
							</div>
						</div>					
					</div>
				</div>
				    <div class="responsive-slider">
					<strong class="text-center"><?php the_field('location_section_heading'); ?></strong>      
                    <div class="container mt-3">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
						<!-- The slideshow -->
						<div class="carousel-inner">
							<?php $cn = 1; if (have_rows('location_options')) : while (have_rows('location_options')) : the_row(); ?>
							<div class="carousel-item <?php if ($cn == 1) { echo 'active'; } ?>">
								<img src="<?php the_sub_field('location_image'); ?>" alt="#" class="img-responsive">
								<div class="state_des active" id="state_<?php echo $cn++; ?>_description">
								<h4><?php the_sub_field('country_name'); ?></h4>
									<ul class="list-unstyled locations add">
										<?php if (have_rows('location_feature')) : while (have_rows('location_feature')) : the_row(); ?>
										<li>
											<h4><?php the_sub_field('feature_title'); ?></h4>
											<p><?php the_sub_field('feature_text'); ?></p>
										</li>
										<?php endwhile; endif; ?>
									</ul>
								</div>
							</div>
							<?php $cn++; endwhile; endif; ?>
						</div>
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#myCarousel2" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
                </div>
				<div class="btns text-center">
					<a href="#" class="btn-primary center purple">See the Impact</a>
				</div>
			</div>
		</div>
	</div>
	</div>
		<div class="video_section">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="col-sm-12">
						<div class="vid_holder">
							<iframe class="video_frame" src="<?php the_field('video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<!-- <a href="#" class="vid_player">Play</a> -->
						</div>
						<figcaption class="text-center">
							<p><?php the_field('video_tagline'); ?></p>
							<a href="#" class="btn-primary red-button">See the Solution</a>
						</figcaption>
					</div>
				</div>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> sharing_boxes" >
			<?php get_template_part('support-part'); ?>
			<?php get_template_part('sharing-widgets'); ?>
		</div>
		<?php get_template_part('misc-part'); ?>
	</main>
</div><!-- Wrapper end -->
<?php 
} // end while
} // end if
?>

<?php get_footer(); ?>
