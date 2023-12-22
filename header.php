<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" href="<?php //echo get_template_directory_uri(); ?>/images/favico.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id='top'>

<?php
    // wp_nav_menu( array(
    //     'theme_location' => 'main_menu',
    // ) );
?>
<!-- start header -->
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <nav class="navbar">
                        <a class="navbar-brand logo" href="index.html"><span class="logo_text">4LC Tech</span></a>
                        <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#header_menu">
                            <span class="m_menu">Menu</span> 
                            <span class="m_close">Close</span> 
                            <span class="bar_icon">
                                <span class="bar bar_1"></span>
                                <span class="bar bar_2"></span>
                                <span class="bar bar_3"></span>
                            </span>
                        </button>
                        <div class="opnen_menu">
                            <div class="header_main_menu">
                                <ul class="menu_item">
                                    <li class="submenu">
                                        <a href="#">Home</a>
                                        <ul class="submenu_item">
                                            <li><a href="index.html">Default</a></li>
                                            <li><a href="index-2.html">Particle</a></li>
                                            <li><a href="index-3.html">Youtube Video</a></li>
                                            <li><a href="index-4.html">Self Hosted Video</a></li>
                                            <li><a href="index-5.html">Slideshow</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#">Portfolio</a>
                                        <ul class="submenu_item">
                                            <li><a href="portfolio-2.html">2 Columns</a></li>
                                            <li><a href="portfolio-3.html">3 Columns</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#">Blog</a>
                                        <ul class="submenu_item">
                                            <li><a href="blog.html">Default </a></li>
                                            <li><a href="blog-sidebar.html">With Sidebar </a></li>
                                            <li><a href="blog-single.html">Default Single</a></li>
                                            <li><a href="blog-single-sidebar.html">Single With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub_footer">
                            <ul class="footer_contact text-center">
                                <li>
                                    <a href="mailto:imkay2712@gmail.com">
                                        <span>imkay2712@gmail.com</span>
                                        <span>imkay2712@gmail.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+84934172968">
                                        <span>+84 934 172 968</span>
                                        <span>+84 934 172 968</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="footer_social text-center">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->