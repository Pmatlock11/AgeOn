<?php
/* Template Name: 404 Page */
/**
 * 
 *
 * 404 error page
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
		<div class="video_section">
			<div class="<?php echo esc_attr($container); ?>" >
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="white-colored"><?php the_content(); ?></h1>
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
