<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'row', $product ); ?> >
    <div class="col-md-6 mb-30">
        <?php
        do_action( 'woocommerce_before_single_product_summary' );
        ?>
    </div>
    <div class="col-md-6 mb-30">
        <div class="summary entry-summary">
            <?php
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>
    </div>
</div>
<?php do_action( 'woocommerce_after_single_product_summary' ); ?>

