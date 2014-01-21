<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if (function_exists("post_thumbnail")) { post_thumbnail(); } ?>
	
	<h1><?php the_title(); ?></h1>

	<div class="entry-content">
		<?php
			the_content();
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'template' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

			edit_post_link( __( 'Edit', 'template' ), '<span class="edit-link">', '</span>' );
		?>
	</div>
</article>
