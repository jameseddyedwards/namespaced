<?php

// Creates a new post type for News Articles
if (!function_exists('create_post_types')) {

	function create_post_types() {

		// Team
		register_post_type('team',
			array(
				'labels' => array(
					'name' => __( 'Team' ),
					'singular_name' => __('Team Member')
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
	}
	add_action('init', 'create_post_types');

} else {
	echo "Function Already Exists: create_post_types";
}