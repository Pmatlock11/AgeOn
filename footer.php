<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>



<div class="wrapper" id="wrapper-footer">
	<footer id="footer">
		<div class="<?php echo esc_attr($container); ?>" >
			<div class="row">
				<div class="col-sm-5">
					<p><?php echo get_field('footer_message', 'option'); ?></p>
					<a href="#" class="btn-primary purple">Pledge Today</a>
				</div>
				<div class="col-sm-3">
					<ul class="socials list-unstyled">
						<li><a href="<?php echo get_field('twitter_link', 'option'); ?>"><?php echo get_field('twitter_icon', 'option'); ?></a></li>
						<li><a href="<?php echo get_field('facebook_link', 'option'); ?>"><?php echo get_field('facebook_icon', 'option'); ?></a></li>
					</ul>
					<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'uick_links list-unstyled',
						'container' => '',
						'fallback_cb' => '',
						'depth' => 2,
						'walker' => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo get_field('footer_logo_1', 'option'); ?>" alt="#" class="max_width">
					<img src="<?php echo get_field('footer_logo_2', 'option'); ?>" alt="#" class="max_width">
				</div>
			</div>
			<div class="row text-center">
				<p class="rights"><?php echo get_field('copyright_text', 'option'); ?></p>
			</div>
		</div>
	</footer>
</div><!-- Wrapper end -->
<?php get_footer(); ?>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<script>
	jQuery(document).ready(function () {
		jQuery('.navbar-toggler').click(function(){
			jQuery('#nav').slideToggle();
		});
		jQuery('.wpcf7-checkbox').click(function(){
				jQuery(this).addClass('active')
		});

		jQuery('.ca_state').mouseenter(function() {
			var elem = jQuery(this).attr('id');
			console.log(elem);
			jQuery('.locations li').removeClass('active');
			jQuery('.locations li.'+elem).addClass('active');

			jQuery('.state_des').removeClass('active');
			jQuery('.state_description_wrap #'+elem+'_description').addClass('active');
		});
		jQuery('.location_lising li').click(function() {
			var elem = jQuery(this).attr('class');
			jQuery('.locations li').removeClass('active');
			jQuery('.locations li.'+elem).addClass('active');

			jQuery('.state_des').removeClass('active');
			jQuery('.state_description_wrap #'+elem+'_description').addClass('active');
		});

		jQuery('.location_lising a').click(function(e) {
			e.preventDefault();
			jQuery('.ca_state').removeClass('active');
			var elem = jQuery(this).attr('href');
			jQuery(elem).addClass('active');
		});
	});
	
</script>
<?php wp_footer(); ?>

</body>

</html>

