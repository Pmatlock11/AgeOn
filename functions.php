<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('/inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Options',
		'menu_title' => 'Options',
		'menu_slug' => 'options',
		'capability' => 'edit_posts',
		'redirect' => false
	));

}
function wpb_widgets_init()
{
	register_sidebar(array(
		'name' => __('Sharing-Widgets', 'wpb'),
		'before_widget' => '<div id="%1$s" class="col-sm-6 %2$s"><div class="share_box text-center">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'wpb_widgets_init');

add_filter('widget_title', 'my_title');

function my_title($title)
{
    // Cut the title to 2 parts
	$title_parts = explode(' ', $title, 2);

    // Throw first word inside a span
	$title = '<span>' . $title_parts[0] . '</span>';

    // Add the remaining words if any
	if (isset($title_parts[1]))
		$title .= ' ' . $title_parts[1];

	return $title;
}

add_action('widgets_init', 'wpb_widgets_init');
register_post_type('event list', array(
	'label' => __('Event List'),
	'singular_label' => __('Event List'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('news', array(
	'label' => __('News'),
	'singular_label' => __('News'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('story', array(
	'label' => __('Stories'),
	'singular_label' => __('Story'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag', 'category'),
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
add_action('init', 'create_partner_post_type');
function create_partner_post_type()
{
	register_post_type(
		'partner',
		array(
			'labels' => array(
				'name' => __('Partners'),
				'singular_name' => __('partner')
			),
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'taxonomies' => array('category'),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
		)
	);
}

function partner_init()
{
    // create a new taxonomy
	register_taxonomy(
		'partner',
		'post',
		array(
			'label' => __('Partner'),
			'rewrite' => array('slug' => 'person'),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action('init', 'partner_init');