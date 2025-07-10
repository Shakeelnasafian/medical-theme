<?php get_header(); ?>
<main id="primary" class="site-main container pt-100 pb-100">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('mb-40'); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->
        <?php endwhile; ?>

        <div class="navigation text-center">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'No posts found.', 'hisupp' ); ?></p>
    <?php endif; ?>
</main><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
