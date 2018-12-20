<?php
/* Template Name: Get Involved */
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
					<h2><span><?php the_field('page_heading'); ?></span></h2>
					<p><?php the_field('page_tagline'); ?></p>
				</header>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> sharing_boxes" >
			<?php get_template_part('support-part'); ?>
			<?php get_template_part('sharing-widgets'); ?>
		</div>
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<header class="main_sec_header text-center">
					<h2><?php the_field('section_heading'); ?></h2>
					<p><?php the_field('section_tagline'); ?></p>
				</header>
			</div>
		</div>
		<div class="<?php echo esc_attr($container); ?> events_list">
			<?php $args = array('post_type' => 'event list', 'posts_per_page' => -1, 'order' => 'ASC');
		$the_query = new WP_Query($args);
		?>
			<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="row">
				<div class="col-12 col-sm-8">
					<strong class="title"><?php the_title(); ?></strong>
					<p><?php the_excerpt(); ?></p>
				</div>
				<div class="col-12 col-sm-2">
					<p><?php echo get_the_date(); ?></p>
				</div>
				<div class="col-12 col-sm-2">
					<p><a href="<?php the_permalink(); ?>" class="btn-default text-center">REGISTER</a></p>
				</div>
			</div>
			<?php wp_reset_postdata();
		endwhile;
		endif;
		?>
		</div>
		<?php get_template_part('misc-part'); ?>
	</main>
<?php get_footer(); ?>
