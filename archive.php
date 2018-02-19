<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package senalbape
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row gutters">
				<div class="col col-8">
						<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title">&raquo; <?php single_term_title(); ?></h1>
							</header><!-- .page-header -->

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'fp' );

							endwhile; // End of the loop.
							
							the_posts_navigation();
							
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
				</div>

				<div class="col col-4">
					<?php get_sidebar(); ?>
				</div>
	
				<hr>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
