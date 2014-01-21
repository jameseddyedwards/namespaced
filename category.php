<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */

get_header();

?>

	<section class="row">
		<div class="span twelve" role="main">

			<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Category Archives: %s', 'template' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( !empty($term_description) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header>

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part('content', get_post_format());

					endwhile;
					// Previous/next page navigation.
					paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

			endif;
			?>
		</div>
	</section>

<?php

get_sidebar( 'content' );
get_sidebar();
get_footer();
