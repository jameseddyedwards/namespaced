<?php

/*
 * Creates a gallery
*/

if (!function_exists('the_gallery')) {

	function the_gallery($sizes) {
		$gallery = get_field('gallery');
		$html = '';

		if ($gallery) {
			$html = '<div class="flexslider">';
				$html .= '<ul class="slides">';
				foreach($images as $image) {
					$html .= '<li>';
						$html .= '<img src="' . $image['sizes']['square-thumbnail'] . '" alt="' . $image['alt'] . '" />';
						$html .= '<p class="flex-caption">' . $image['caption'] . '</p>';
					$html .= '</li>';
				}
				$html .= '</ul>';
			$html .= '</div>';
		}
		return $html;
	}

} else {
	echo "Function Already Exists: the_gallery";
}