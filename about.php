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
					<h2><span><?php the_title(); ?></span></h2>
				</header>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> posts" >
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<strong class="title"><?php the_field('age_on_heading'); ?></strong>
					<?php the_field('age_on_text'); ?>
				</div>
				<div class="col-sm-12 col-md-3">
					<img src="<?php the_field('age_on_image'); ?>" class="img-responsive sm_max">
				</div>
			</div>
			<div class="row map_padding">
				<div class="col-12 text-center">
					<div class="map_img_holder"><img src="<?php the_field('map_image'); ?>"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<strong class="title"><?php the_field('leading_heading'); ?></strong>
					<?php the_field('leading_text'); ?>
				</div>
				<div class="col-sm-12 col-md-3">
					<img src="<?php the_field('leading_image'); ?>" class="img-responsive sm_max">
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
<?php get_footer(); ?>
