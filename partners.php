<?php
/* Template Name: Partners Template */
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
				<header class="main_sec_header text-center partners">
					<h2><span><?php the_title(); ?></span></h2>
					<p><?php the_field('page_tagline'); ?></p>
				</header>
			</div>
		</div>
		<section class="posts">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<h2 class="text-center"><?php echo get_cat_name(3); ?></h2>
					<ul class="list-unstyled list_view">
						<?php $args = array('post_type' => 'Partner', 'category_name' => 'gold'); $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li>
							<div class="img_holder"><a href="<?php the_field('partner_url'); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a></div>
							<div class="text">
								<strong class="title"><?php the_title(); ?></strong>
								<p><?php the_content(); ?></p>
							</div>
						</li>
						<?php wp_reset_postdata(); endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="posts">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<h2 class="text-center"><h2 class="text-center"><?php echo get_cat_name(5); ?></h2></h2>
					<ul class="list-unstyled list_view grid_view">
						<?php $args = array('post_type' => 'Partner', 'category_name' => 'silver'); $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li class="col-12 col-sm-2">
							<div class="img_holder"><a href="<?php the_field('partner_url'); ?>" class="partners_link"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a></div>
							<div class="text xs_d_none">
								<strong class="title"><?php the_title(); ?></strong>
								<!-- <p><?php //the_content(); ?></p> -->
							</div>
						</li>
						<?php wp_reset_postdata(); endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="posts">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<h2 class="text-center"><h2 class="text-center"><?php echo get_cat_name(6); ?></h2></h2>
					<ul class="list-unstyled list_view grid_view">
						<?php $args = array('post_type' => 'Partner', 'category_name' => 'bronze'); $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li class="col-sm-3">
							<div class="text xs_d_none">
								<strong class="title"><a href="<?php the_field('partner_url'); ?>" class="partners_link"><?php the_title(); ?></a></strong>
								<!-- <p><?php //the_content(); ?></p> -->
							</div>
						</li>
						<?php wp_reset_postdata(); endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="posts">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<h2 class="text-center"><h2 class="text-center"><?php echo get_cat_name(8); ?></h2></h2>
					<ul class="list-unstyled list_view grid_view">
						<?php $args = array('post_type' => 'Partner', 'category_name' => 'ruby'); $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li class="col-sm-3">
							<div class="text xs_d_none">
								<strong class="title"><a href="<?php the_field('partner_url'); ?>" class="partners_link"><?php the_title(); ?></a></strong>
								<!-- <p><?php //the_content(); ?></p> -->
							</div>
						</li>
						<?php wp_reset_postdata(); endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="posts">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<h2 class="text-center"><h2 class="text-center"><?php echo get_cat_name(9); ?></h2></h2>
					<ul class="list-unstyled list_view grid_view">
						<?php $args = array('post_type' => 'Partner', 'category_name' => 'emerald'); $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li class="col-sm-3">
							<div class="text xs_d_none">
								<strong class="title"><a href="<?php the_field('partner_url'); ?>" class="partners_link"><?php the_title(); ?></a></strong>
								<!-- <p><?php //the_content(); ?></p> -->
							</div>
						</li>
						<?php wp_reset_postdata(); endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</section>
		<div class="<?php echo esc_attr($container); ?> sharing_boxes" >
			<?php get_template_part('support-part'); ?>
			<?php get_template_part('sharing-widgets'); ?>
		</div>
	</main>
</div><!-- Wrapper end -->
<?php get_footer(); ?>
