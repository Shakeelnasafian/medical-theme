<?php
get_header();
?>
<main class="shop-page pt-100 pb-100">
    <div class="container">
        <?php do_action( 'woocommerce_before_main_content' ); ?>

        <?php if ( woocommerce_product_loop() ) : ?>
            <?php woocommerce_product_loop_start(); ?>

            <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php woocommerce_product_loop_end(); ?>

            <?php do_action( 'woocommerce_after_shop_loop' ); ?>
        <?php else : ?>
            <?php do_action( 'woocommerce_no_products_found' ); ?>
        <?php endif; ?>

        <?php do_action( 'woocommerce_after_main_content' ); ?>
    </div>
</main>
<?php get_footer(); ?>
