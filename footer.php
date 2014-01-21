<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */
?>

	<footer>
		<section class="row">
			<nav class="col twelve">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu(array(
					'theme_location'	=> 'footer-nav',
					'items_wrap'      	=> '<ul class="cf">%3$s</ul>',
					'container'			=> false
				)); ?>
			</nav>
		</section>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>