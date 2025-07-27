<?php get_header(); ?>
<main id="primary" class="site-main pt-100 pb-100">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-50'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="bsingle__post-thumb mb-30">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="bsingle__content">
                        <h2 class="mb-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="mb-20">
                            <span class="mr-10"><i class="far fa-user"></i> <?php the_author_posts_link(); ?></span>
                            <span><i class="fal fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                        </div>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination-wrap text-center">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts found.', 'hisupp' ); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
