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
	<div class="single-image">
		<?php senalbape_post_thumbnail(); ?>
	</div>
	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta row">
			<div class="col">
				<span>Postado em </span>
				<?php senalbape_posted_on(); ?>
				<span> | </span>
				<?php 
				$categories_list = get_the_category_list( esc_html__( ', ', 'senalbape' ) );
					if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( '<span class="cat-links">' . esc_html__( '%1$s', 'senalbape' ) . '</span>', $categories_list ); // WPCS: XSS OK.
					}
				?>
			</div>				
			
		</div><!-- .entry-meta -->
	<?php
	endif; ?>
	<div class="single-text">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
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
