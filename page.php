<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */

get_header();

?>

<section id="main" class="main" role="main">

	<?php
	if (is_front_page() && Templatehas_featured_posts()) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>

	<div class="row">
		<div class="col twelve">

			<?php
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) {
					comments_template();
				}

			endwhile;
			?>

		</div>
	</div>
</section>

<?php

get_footer();
