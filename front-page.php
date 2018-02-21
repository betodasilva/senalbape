<?php 
/**
 * 
 * @package senalbape
 */

get_header(); ?>

<section class="hero">
    
    <?php echo do_shortcode('[simpleslider location="" animation="" slideshowspeed=""]');  ?>

</section>
<section class="featured-posts">
    <div class="container">
        <?php if ( senalbape_has_featured_posts(1) ) : ?>
            <div class="row gutters">
                <?php 
                    foreach( $featured_posts as $post) : setup_postdata($post);
                    get_template_part( 'template-parts/content', 'featured' );
                    endforeach;
                ?>
            </div>
        <?php endif;?>
    </div>
</section>
<section class="fp-content sec-space">
    <div class="container">
        <div class="row gutters">
            <div class="fp-posts col col-8">
                <h2 class="section-title">NOTÍCIAS RECENTES</h2>
                <?php 
                    
                $args = array( 
                    'posts_per_page'    => 4,
                    'post_type'         => 'post',
                );
                $query = new WP_Query($args);
                if( $query -> have_posts() ) : 
                    while( $query -> have_posts() ) : $query -> the_post(); 
                        get_template_part( 'template-parts/content', 'fp' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; ?>
                <a href="/noticias" class="w100 button load-more">Ver todas as notícias</a>
            </div>
            <div class="col col-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    
    
</section>
<section class="fp-filiados">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h3>Filiado à</h3>
            </div>
            <div class="col col-4">
                <a href="http://www.fsindical.org.br/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/dist/images/filiado01.png' ?>" class="forca">
                </a>
            </div>
            <div class="col col-4">
                <a href="http://cnteec.org.br/new" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/dist/images/filiado02.png' ?>" class="cnteec">
                </a>
            </div>
            <div class="col col-4">
                <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/dist/images/filiado03.png' ?>" class="fitedca">
                </a>
            </div>
        </div>
    </div>
</section>
<?php

get_footer();