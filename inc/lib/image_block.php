<?php

/*
 * Creates a gallery
*/

if (!function_exists('image_block')) {

	function image_block($size = 'medium', $sizelist = ['portrait-small', 'landscape-small', 'portrait-small', 'landscape-small'], $classlist = ['left', 'right', 'right', 'left']) {
		$images = get_field('gallery');
		$html = '';
		$index = 0;
		$src = 'thumbnail';

		if ($images) {
			$html = '<div class="image-block">';
			foreach($images as $image) {
				if (count($sizelist) > 0) {
					$size = $sizelist[$index];
				}
				if (isset($image['sizes'][$size])) {
					$src = $image['sizes'][$size];
				}
				$html .= '<img class="' . $classlist[$index] . '" src="' . $src . '" alt="' . $image['alt'] . '" />';
				
				if ($index == 3) {
					$index = 0;
				} else {
					$index++;
				}
			}
			$html .= '</div>';
		}
		echo $html;
	}

} else {
	echo "Function Already Exists: the_gallery";
}