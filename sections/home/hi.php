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

<section class="hero-section page-section scroll-to-page" id="home">

    <div class="custom-container">
        <div class="hero-content content-width">
            <div class="section-header">
                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                    <i class="las la-home"></i> Introduce
                </h4>
                <h1 class="scroll-animation" data-animation="fade_from_bottom">Hi, I'm <span>Nam</span>, Full-stack Developer</h1>
            </div>
            <p class="scroll-animation" data-animation="fade_from_bottom">I'm a programmer and I love what I do. It's as simple as that!</p>
            <a href="#portfolio" 
                class="go-to-project-btn scroll-to scroll-animation" 
                data-animation="rotate_up">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/round-text.png" alt="Rounded Text">
                <i class="las la-arrow-down"></i>
            </a>

            <div class="facts d-flex">
                <div class="left scroll-animation" data-animation="fade_from_left">
                    <h1>4+</h1>
                    <p>Years of <br>Experience</p>
                </div>
                <div class="right scroll-animation" data-animation="fade_from_right">
                    <h1>80+</h1>
                    <p>projects completed</p>
                </div>
            </div>
        </div>
    </div>
</section>