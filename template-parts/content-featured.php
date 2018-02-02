<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package senalbape
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'featured-post col col-3' ); ?>>
	<a href="<?php the_permalink();?>">
		<?php senalbape_post_thumbnail(); ?>
		<div class="fp__title">
			<h4><?php the_title(); ?></h4>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
