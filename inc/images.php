<?php

$libPath = TEMPLATEPATH . '/inc/lib/';

/* Images */
include $libPath . 'config_image_sizes.php';	// Configure sitewide image sizes
include $libPath . 'get_image_class.php';		// Gets image class based on it's number
include $libPath . 'post_image.php';			// Get's post image
include $libPath . 'get_image_size_count.php';	// Get image size count

?>