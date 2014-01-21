<?php

// Creates a new post type for News Articles
if (!function_exists('create_post_types')) {

	function create_post_types() {

		// News
		register_post_type('news',
			array(
				'labels' => array(
					'name' => __( 'News' ),
					'singular_name' => __('News Article')
				),
				'public' => true,
				'has_archive' => true,
				'menu_position' => 5,
				'taxonomies' => array('category'),
				'supports' => array(
					'title',
					'editor',
					'author',
					'thumbnail',
					'excerpt',
					'trackbacks',
					'custom-fields',
					'comments',
					'revisions'
				)
			)
		);

		// Adverts
		register_post_type('advert',
			array(
				'labels' => array(
					'name' => __( 'Adverts' ),
					'singular_name' => __('Advert')
				),
				'public' => true,
				'has_archive' => true,
				'menu_position' => 5,
				'supports' => array(
					'title',
					'revisions'
				)
			)
		);
	}
	add_action('init', 'create_post_types');

} else {
	echo "Function Already Exists: create_post_types";
}