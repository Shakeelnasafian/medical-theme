<?php
/**
 * The Template for displaying all single products
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' );
?>
<main class="single-product-page pt-100 pb-100">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product-inner' );
        endwhile;
        ?>
    </div>
</main>
<?php
get_footer( 'shop' );
?>
