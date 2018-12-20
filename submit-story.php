<?php
/* Template Name: Submit Story */
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
		<div class="<?php echo esc_attr($container); ?> contact_form" >
			<?php echo do_shortcode('[contact-form-7 id="180" title="Submit Story Form"]'); ?>
		</div>
	</main>
</div><!-- Wrapper end -->
<?php 
} // end while
} // end if
?>
<?php get_footer(); ?>
