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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

<div class="wrapper" id="index-wrapper">
	<main class="site-main" id="main">
		<?php $news_featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
		<div class="visual in-news" style="background:url('<?php echo $news_featured_img[0]; ?>') no-repeat; background-size:cover;">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="d-table">
						<div class="v-middle">
							<h2><?php the_field('banner_heading'); ?></h2>
							<p><?php the_field('banner_description'); ?></p>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div class="news_area">
			<div class="<?php echo esc_attr($container); ?> news_list" >
				<div class="row">
					<?php $args = array('post_type' => 'news', 'posts_per_page' => -1, 'order' => 'ASC');
				$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="col-sm-4 column">
						<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
						<div class="text">
							<strong class="title"><?php the_title(); ?></strong>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink('single-news'); ?>" class="btn_more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<ul class="socials list-unstyled">
								<?php if (have_rows('social_icon')) : while (have_rows('social_icon')) : the_row(); ?>
        							<li><a href="<?php the_sub_field('social_link'); ?>"><?php the_sub_field('social_icon'); ?></a></li>									
								<?php endwhile; endif; ?>
							</ul>
						</div>
					</div>
					<?php wp_reset_postdata(); endwhile; endif; ?>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center load_more_div">
						<a href="#" class="black_link">LOAD MORE NEWS<br><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
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
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
