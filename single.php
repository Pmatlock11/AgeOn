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

<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
<div class="wrapper" id="index-wrapper">
	<main class="site-main" id="main">
		<div class="visual indivisual">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="d-table">
						<div class="v-middle no-padding">
							<div class="flex_layout">
								<div class="col-12 col-sm-6"><img src="<?php the_field('large_image') ?>" alt="#" class="img-responsive"></div>
								<div class="col-12 col-sm-6">
									<strong>Meet</strong>
									<h2 class="bold"><?php the_title(); ?></h2>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<div class="row story">
					<div class="col-sm-12">
						<?php the_content(); ?>
					</div>
				</div>				
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- The slideshow -->
					<div class="carousel-inner">
						<?php $cn = 1;
					if (have_rows('slide')) : while (have_rows('slide')) : the_row(); ?>
						<div class="carousel-item <?php if ($cn == 1) {
																																echo ' active';
																															} ?>">
							<img src="<?php the_sub_field('slide_image'); ?>" alt="#" class="quote_img">
							<div class="slide_caption">
								<div class="d-table">
									<div class="v-middle">
										<img src="<?php bloginfo('template_url'); ?>/img/quote.png" alt="#" class="quote_img">
										<p><?php the_sub_field('slide_description'); ?></p>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile;
					endif; ?>
					</div>
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row sharing_row text-center">
				<div class="col-sm-12">
					<strong>Share this story</strong>
					<ul class="list-unstyled">
						<?php if (have_rows('social_profile')) : while (have_rows('social_profile')) : the_row(); ?>
						<li><a href="<?php the_sub_field('social_link'); ?>"><?php the_sub_field('social_icon'); ?></a></li>
						<?php endwhile;
					endif; ?>
					</ul>
				</div>
			</div>
			<div class="row full_description">
				<div class="col-sm-12">
					<h3 class="text-center"><?php the_field('text_area_heading'); ?></h3>
					<p><?php the_field('text_area_description'); ?></p>
					<div class="btns text-center">
						<a href="#" class="btn-primary purple">See the Impact</a>
						<a href="#" class="btn-primary  purple">Read the Stories</a>
					</div>
				</div>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> sharing_boxes" >
			<?php get_template_part('support-part'); ?>
			<?php get_template_part('sharing-widgets'); ?>
		</div>
	</main>
</div><!-- Wrapper end -->
<?php 
} // end while
} // end if
?>
<?php get_footer(); ?>
