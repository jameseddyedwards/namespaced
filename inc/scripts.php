<?php
/*
 * Load JavaScript files both globally and page specific
 */
if (!function_exists('load_js_files')) {

	function load_js_files() {
		$my_theme = wp_get_theme();						// Get current theme
		$theme_version = $my_theme->get('Version');		// Get theme version

		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if (is_singular() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
		if (is_front_page()) {
			wp_register_script('ah_carousel', get_template_directory_uri() . '/js/plugin/jquery.carouFredSel.js', array('jquery'), $theme_version, true);
			wp_enqueue_script('ah_carousel');
		}
		if (is_category()) {
			wp_register_script('ah_category', get_template_directory_uri() . '/js/category.js', array('jquery'), $theme_version, true);
			wp_enqueue_script('ah_category');
		}
		
		/* Global JavaScript */
		wp_register_script('global_js', get_template_directory_uri() . '/js/global.js', array('jquery'), $theme_version, true);
		wp_register_script('retina_js', get_template_directory_uri() . '/js/retina.min.js', array('jquery'), $theme_version, true);
		wp_register_script('fitvids_js', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), $theme_version, true);

		wp_enqueue_script('fitvids_js');
		wp_enqueue_script('retina_js');
		wp_enqueue_script('global_js');

	}
	add_action('wp_enqueue_scripts', 'load_js_files');
	
}

?>