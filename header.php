<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" href="<?php //echo get_template_directory_uri(); ?>/images/favico.png" type="image/x-icon" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-loader">
    <div class="bounceball"></div>
</div>

<span class="icon-menu">
    <span class="bar"></span>
    <span class="bar"></span>
</span>

<div class="global-color">
    <span class="setting-toggle">
        <i class="las la-cog"></i>
    </span>
    <div class="inner">
        <div class="overlay"></div>
        <div class="global-color-option">
            <span class="close-settings">
                <i class="las la-times"></i>
            </span>
            <h2>Configuration</h2>
            <div class="global-color-option-inner">
                <p>Colors</p>
                <div class="color-boxed">
                    <a href="#" class="clr-active" onclick="color1();"></a>
                    <a href="#" onclick="color2();"></a>
                    <a href="#" onclick="color3();"></a>
                    <a href="#" onclick="color4();"></a>
                    <a href="#" onclick="color5();"></a>
                    <a href="#" onclick="color6();"></a>
                    <a href="#" onclick="color7();"></a>
                    <a href="#" onclick="color8();"></a>
                </div>

                <p>THREE DIMENSIONAL SHAPES</p>
                <ul class="themes">
                    <li><a href="./home1.html">Earth Lines Sphere</a></li>
                    <li><a href="./home2.html">3D Abstract Ball</a></li>
                    <li><a href="./home3.html">Water Waves</a></li>
                    <li><a href="./home4.html">Liquids Wavy</a></li>
                    <li><a href="./home6.html">Solid Color</a></li>
                    <li><a href="./home5.html">Simple Strings</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="responsive-sidebar-menu">
    <div class="overlay"></div>
    <div class="sidebar-menu-inner">
        <div class="menu-wrap">
            <p>Menu</p>
            <ul class="menu scroll-nav-responsive d-flex">
                <li>
                    <a class="scroll-to" href="#home">
                        <i class="las la-home"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#about">
                        <i class="lar la-user"></i> <span>About</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#resume">
                        <i class="las la-briefcase"></i> <span>Resume</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#services">
                        <i class="las la-stream"></i> <span>Services</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#portfolio">
                        <i class="las la-shapes"></i> <span>Portfolio</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="sidebar-social">
            <p>Social</p>
            <ul class="social-links d-flex align-items-center">
                <li>
                    <a href=""><i class="lab la-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="lab la-dribbble"></i></a>
                </li>
                <li>
                    <a href=""><i class="lab la-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<ul class="menu scroll-nav d-flex">
    <li>
        <a class="scroll-to" href="#home">
            <span>Home</span> <i class="las la-home"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#about">
            <span>About</span> <i class="lar la-user"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#resume">
            <span>Resume</span> <i class="las la-briefcase"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#services">
            <span>Services</span> <i class="las la-stream"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#portfolio">
            <span>Portfolio</span> <i class="las la-shapes"></i>
        </a>
    </li>
</ul>

<div class="left-sidebar">
    <div class="sidebar-header d-flex align-items-center justify-content-between">
        <img src="<?php echo get_field("main_logo","option"); ?>" alt="Logo">
        <span class="designation"><?php echo get_field("current_job","option"); ?></span>
    </div>
    <img class="me" src="<?php echo get_field("me_img","option"); ?>" alt="Me">
    <h2 class="email"><?php echo get_field("mail","option"); ?></h2>
    <h2 class="email">(+84) 934 172 968</h2>
    <h2 class="address">Base in Viet Nam</h2>
    <p class="copyright">&copy; 2023 Nam Nguyen. All Rights Reserved</p>
    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
        <li>
            <a href=""><i class="lab la-facebook"></i></a>
        </li>
        <li>
            <a href=""><i class="lab la-dribbble"></i></a>
        </li>
    </ul>
    <a href="#" class="theme-btn">
        <i class="las la-envelope"></i> Hire Me!
    </a>
</div>
<?php
    // wp_nav_menu( array(
    //     'theme_location' => 'main_menu',
    // ) );
?>