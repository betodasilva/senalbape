<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package senalbape
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
	
	<div class="post__img col col-5">
		<?php senalbape_post_thumbnail(); ?>
	</div>
	<div class="post__text col col-7">
		<header class="entry-header">
			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
		</header><!-- .entry-header -->
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'senalbape' ),
				'after'  => '</div>',
			) );
		?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php senalbape_posted_on(); ?>
				<span> | </span>
				<?php 
				$categories_list = get_the_category_list( esc_html__( ', ', 'senalbape' ) );
					if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( '<span class="cat-links">' . esc_html__( 'Em %1$s', 'senalbape' ) . '</span>', $categories_list ); // WPCS: XSS OK.
					}
				?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>

	</div> <!-- .entry-content -->
	

</article><!-- #post-<?php the_ID(); ?> -->
<hr>
