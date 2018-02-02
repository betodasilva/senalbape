<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package senalbape
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row gutters">
				<div class="col col-8">
					<?php
					if ( have_posts() ) : ?>

						<header class="page-header search-header">
							<h1 class="search-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Resultado de buscas para: %s', 'senalbape' ), '<span>' . get_search_query() . '</span>' );
							?></h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'fp' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
				<div class="col col-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
