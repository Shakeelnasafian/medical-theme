<?php
/**
 * The template for displaying product content within loops
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
global $product;
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<li <?php wc_product_class( 'col-md-3 col-sm-6 mb-40', $product ); ?> >
    <div class="product">
        <div class="product__img">
            <a href="<?php the_permalink(); ?>">
                <?php woocommerce_template_loop_product_thumbnail(); ?>
            </a>
            <div class="product-action text-center">
                <?php woocommerce_template_loop_add_to_cart(); ?>
            </div>
        </div>
        <div class="product__content text-center pt-30">
            <h4 class="pro-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>
        </div>
    </div>
</li>
