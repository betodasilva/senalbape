<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package senalbape
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'senalbape' ); ?></a>

	<header id="masthead" class="main-header">
		<div class="container">
			<div class="row align-middle">
				<div class="col col-6">
					<div class="logo-container">
						<?php
							the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col col-4 push-right">
					<div class="row gutters header-info">
						<div class="col col-12"><p class="hi-p midgray"><i class="fa fa-envelope"></i> senalbapecr@hotmail.com</p></div>
						<div class="col col-12"><p class="hi-p midgray"><i class="fa fa-phone"></i> (81) 9 3421-9844</p></div>
						<!-- TODO: ICONS -->
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
				
		<nav id="site-navigation" class="main-nav">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'senalbape' ); ?></button>
			<div class="container">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'container_class'=> 'main-nav__list-container',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'main-nav__list',
						) );
				?>
			</div>
			
		</nav><!-- #site-navigation -->
				
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
