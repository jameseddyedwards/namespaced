<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */

get_header();

?>

<div class="row">
	<div class="span twelve" role="main">

		<header>
			<h1><?php _e( 'Not Found', 'template' ); ?></h1>
		</header>

		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'template' ); ?></p>

		<?php get_search_form(); ?>

	</div>
</div>

<?php

get_sidebar( 'content' );
get_sidebar();
get_footer();

?>