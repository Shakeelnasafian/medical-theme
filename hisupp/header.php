<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-area header-area2">
        <header class="header-area header-area2">  
			<div class="header-top second-header d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">                                           
                        <div class="col-lg-4 col-md-4 d-none d-lg-block">
                             <div class="header-social">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="behance"><i class="fab fa-behance"></i></a>
                                <a href="#" title="youtube"><i class="fab fa-youtube"></i></a> 
                                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                
                               </span>                    
                               <!--  /social media icon redux -->                               
                        </div>
                        </div>
                        <div class="col-lg-8 col-md-8 d-none  d-md-block">
                            <div class="header-cta text-right">
                                <ul>
                                    <li>
                                        <a href="mailto:<?php echo antispambot( get_option( 'admin_email' ) ); ?>">
                                            <?php echo antispambot( get_option( 'admin_email' ) ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <span><?php echo esc_html( get_theme_mod( 'phone_number', '786-098-098-09' ) ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         
                        
                    </div>
                </div>
            </div>		
            <div id="header-sticky" class="menu-area pt-15 pb-15">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'container'      => false,
                                            'menu_class'     => '',
                                            'fallback_cb'    => '__return_false',
                                        ) );
                                        ?>
                                    </nav>
                                </div>
                            </div>   
                         
                           
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

