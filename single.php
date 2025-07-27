<?php get_header(); ?>
<main id="primary" class="site-main pt-100 pb-100">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-30">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="mb-20">
                        <span class="mr-10"><i class="far fa-user"></i> <?php the_author_posts_link(); ?></span>
                        <span><i class="fal fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-30">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content mb-30">
                    <?php the_content(); ?>
                </div>

                <?php the_tags('<div class="tagcloud mb-30">', '', '</div>'); ?>

                <?php comments_template(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
