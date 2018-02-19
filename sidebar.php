<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package senalbape
 */

// if ( ! is_active_sidebar( 'sidebar-home' ) || ! is_active_sidebar( 'sidebar-pages' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area">
	<?php 
		if ( is_front_page() ) {
			dynamic_sidebar( 'sidebar-1' ); 
		} else {
			dynamic_sidebar( 'sidebar-2' );
		}
		
	?>
</aside><!-- #secondary -->
