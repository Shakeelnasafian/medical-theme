<?php
function hisupp_theme_scripts() {
    $template_uri = get_template_directory_uri();
    // Styles
    wp_enqueue_style('bootstrap', "$template_uri/assets/css/bootstrap.min.css");
    wp_enqueue_style('animate', "$template_uri/assets/css/animate.min.css");
    wp_enqueue_style('magnific-popup', "$template_uri/assets/css/magnific-popup.css");
    wp_enqueue_style('fontawesome', "$template_uri/assets/fontawesome/css/all.min.css");
    wp_enqueue_style('flaticon', "$template_uri/assets/font-flaticon/flaticon.css");
    wp_enqueue_style('dripicons', "$template_uri/assets/css/dripicons.css");
    wp_enqueue_style('slick', "$template_uri/assets/css/slick.css");
    wp_enqueue_style('meanmenu', "$template_uri/assets/css/meanmenu.css");
    wp_enqueue_style('default', "$template_uri/assets/css/default.css");
    wp_enqueue_style('hisupp-style', "$template_uri/assets/css/style.css");
    wp_enqueue_style('responsive', "$template_uri/assets/css/responsive.css");
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Scripts
    wp_enqueue_script('modernizr', "$template_uri/assets/js/vendor/modernizr-3.5.0.min.js", array(), null, true);
    wp_enqueue_script('jquery-1-12', "$template_uri/assets/js/vendor/jquery-1.12.4.min.js", array('jquery'), null, true);
    wp_enqueue_script('popper', "$template_uri/assets/js/popper.min.js", array('jquery'), null, true);
    wp_enqueue_script('bootstrap', "$template_uri/assets/js/bootstrap.min.js", array('jquery'), null, true);
    wp_enqueue_script('one-page-nav', "$template_uri/assets/js/one-page-nav-min.js", array('jquery'), null, true);
    wp_enqueue_script('slick', "$template_uri/assets/js/slick.min.js", array('jquery'), null, true);
    wp_enqueue_script('ajax-form', "$template_uri/assets/js/ajax-form.js", array('jquery'), null, true);
    wp_enqueue_script('paroller', "$template_uri/assets/js/paroller.js", array('jquery'), null, true);
    wp_enqueue_script('wow', "$template_uri/assets/js/wow.min.js", array('jquery'), null, true);
    wp_enqueue_script('isotope', "$template_uri/assets/js/js_isotope.pkgd.min.js", array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', "$template_uri/assets/js/imagesloaded.min.js", array('jquery'), null, true);
    wp_enqueue_script('parallax', "$template_uri/assets/js/parallax.min.js", array('jquery'), null, true);
    wp_enqueue_script('waypoints', "$template_uri/assets/js/jquery.waypoints.min.js", array('jquery'), null, true);
    wp_enqueue_script('counterup', "$template_uri/assets/js/jquery.counterup.min.js", array('jquery'), null, true);
    wp_enqueue_script('scrollup', "$template_uri/assets/js/jquery.scrollUp.min.js", array('jquery'), null, true);
    wp_enqueue_script('meanmenu', "$template_uri/assets/js/jquery.meanmenu.min.js", array('jquery'), null, true);
    wp_enqueue_script('parallax-scroll', "$template_uri/assets/js/parallax-scroll.js", array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', "$template_uri/assets/js/jquery.magnific-popup.min.js", array('jquery'), null, true);
    wp_enqueue_script('element-in-view', "$template_uri/assets/js/element-in-view.js", array('jquery'), null, true);
    wp_enqueue_script('main-js', "$template_uri/assets/js/main.js", array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'hisupp_theme_scripts');

function hisupp_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

    // WooCommerce support
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 600,
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hisupp' ),
        'footer'  => __( 'Footer Menu', 'hisupp' ),
    ) );
}
add_action( 'after_setup_theme', 'hisupp_theme_setup' );

function hisupp_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'hisupp' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    for ( $i = 1; $i <= 4; $i++ ) {
        register_sidebar( array(
            'name'          => sprintf( __( 'Footer %d', 'hisupp' ), $i ),
            'id'            => 'footer-' . $i,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'hisupp_widgets_init' );
