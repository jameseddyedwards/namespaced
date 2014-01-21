<?php
/**
 * Template functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, template_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We arLeave a Replye providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'template_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */


/* Includes */
include TEMPLATEPATH . '/inc/config.php';		// WordPress setup - E.g. 
include TEMPLATEPATH . '/inc/plugins.php';		// Theme plugin recommendations & activation
include TEMPLATEPATH . '/inc/styles.php';		// Stylesheets management
include TEMPLATEPATH . '/inc/scripts.php';		// JavaScript management
include TEMPLATEPATH . '/inc/images.php';		// Image population functions
include TEMPLATEPATH . '/inc/utilities.php';	// Utility functions
include TEMPLATEPATH . '/inc/shortcodes.php';	// WordPress shortcodes
include TEMPLATEPATH . '/inc/posts.php';		// Post functions
include TEMPLATEPATH . '/inc/search.php';		// Search function


/* Filter Management */
//remove_filter('the_content', 'wpautop');


/* Theme Support */
add_theme_support('automatic-feed-links'); // Add default posts and comments RSS feed links to <head>.
add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery')); // Enable support for Post Formats - See http://codex.wordpress.org/Post_Formats
add_theme_support('menus'); // Add menu support for navigation menus


/* Menu's */
register_nav_menu('header-bar', __('Header Navigation', 'template'));
register_nav_menu('header-nav', __('Navigation', 'template'));
register_nav_menu('footer-nav', __('Footer Navigation', 'template'));


?>