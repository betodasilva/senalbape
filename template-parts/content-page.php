<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package senalbape
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
	
	<div class="single-text">
		<header class="entry-header">
			<?php
				the_title( '<h1 class="page-title">&raquo; ', '</h1>' );
			?>
		</header><!-- .entry-header -->
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'senalbape' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'senalbape' ),
				'after'  => '</div>',
			) );
		?>
	</div> <!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
