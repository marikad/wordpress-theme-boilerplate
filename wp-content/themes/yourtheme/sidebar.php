<!-- Sidebar display is controlled in this file. Multiple sidebars can be set up in functions.php, and contents of sidebar widgets are set up from the WordPress wp-admin panel. -->

<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Your Theme
 * @since yourtheme 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>