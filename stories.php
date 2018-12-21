<?php
/* Template Name: Stories Template */
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
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<header class="main_sec_header text-center">
					<h2><span><?php the_title(); ?></span></h2>
					<p><?php the_content(); ?></p>
				</header>
			</div>
		</div>
		<div class="visual story">
			<div class="<?php echo esc_attr($container); ?>" >
				<?php $args = array('post_type' => 'story', 'category_name' => 'feaured-story'); $the_query = new WP_Query($args); ?>
				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="row">
					<div class="d-table">
						<div class="v-middle no-padding">
							<div class="flex_layout">
								<div class="col-12 col-sm-6"><img src="<?php the_field('large_image'); ?>" alt="#" class="img-responsive"></div>
								<div class="col-12 col-sm-6 descriptive">
									<p><?php the_excerpt() ?></p>
									<a href="<?php the_permalink(); ?>" class="btn-primary purple left">See the Story</a>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<?php wp_reset_postdata(); endwhile; endif; ?>		
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> story_cols">
			<div class="row">
				<?php $args = array('post_type' => 'story', 'posts_per_page' => 6, 'order' => 'ASC'); $the_query = new WP_Query($args); ?>
				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col-sm-4 text-center story_col">
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-primary purple">See the Story</a>
				</div>
				<?php wp_reset_postdata();
			endwhile;
			endif; ?>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center load_more_div">
					<a href="#">Show More<br><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
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
