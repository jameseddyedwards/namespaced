<?php
/**
 * Template Name: Contributor Page
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */

get_header();

?>

<section role="main">

	<?php
		if ( is_front_page() && namespaced_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>

	<div class="row">
		<div class="col twelve">
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
						the_title( '<header><h1>', '</h1></header>' );

						// Output the authors list.
						namespaced_list_authors();

						edit_post_link( __( 'Edit', 'namespaced' ), '<footer><span class="edit-link">', '</span></footer>' );
					?>
				</article>

			<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div>
	</div>
</section>

<?php

get_sidebar();
get_footer();
