<?php

/**
 * Configure image sizes used across the site
 */

if (!function_exists('site_has_multiple_categories')) {

	function config_image_sizes($sizes) {

		// Add custom image sizes for the whole site
		add_image_size('square-thumbnail', 195, 195, true);
		add_image_size('square-small', 404, 404, true);
		add_image_size('square-medium', 822, 822, true);
		add_image_size('square-large', 1240, 1240, true);
		add_image_size('rectangle-small', 613, 404, true);
		add_image_size('rectangle-medium', 822, 404, true);
		add_image_size('rectangle-large', 1240, 594, true);
		add_image_size('rectangle-wide', 1240, 404, true);
		add_image_size('rectangle-xl', 9999, 1000, true);
		add_image_size('rectangle-article', 1240, 9999, true);
		
		$myimgsizes = array(
			"square-thumbnail" => __("Square Thumbnail"),
			"square-small" => __("Square Small"),
			"square-medium" => __("Square Medium"),
			"square-large" => __("Square Large"),
			"rectangle-small" => __("Rectangle Small"),
			"rectangle-medium" => __("Rectangle Medium"),
			"rectangle-large" => __("Rectangle Large"),
			"rectangle-wide" => __("Rectangle Wide"),
			"rectangle-xl" => __("Rectangle XL"),
			"rectangle-article" => __("Rectangle Article")
		);
		$newimgsizes = array_merge($sizes, $myimgsizes);
		
		return $newimgsizes;
	}
	add_filter('image_size_names_choose', 'config_image_sizes');

} else {
	echo "Function Already Exists: config_image_sizes";
}
