<?php
/**
 * template name: Home Page
 */
get_header();
?>
<main class="drake-main">
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <?php
                get_template_part('sections/home/hi');
                get_template_part('sections/home/about');
                get_template_part('sections/home/education-experience');
                get_template_part('sections/home/specializations');
            ?>
    
            <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                <div class="custom-container">
                    <div class="portfolio-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="las la-grip-vertical"></i> portfolio
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                        </div>
    
                        <div class="row portfolio-items">
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-full">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio1.jpg" alt="Portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="#">Figma</a>
                                            </li>
                                            <li>
                                                <a href="#">Framer</a>
                                            </li>
                                            <li>
                                                <a href="#">WordPress</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Bureau - Architecture Studio Website</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio2.jpg" alt="Portfolio">
                                        </a>
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">WordPress</a>
                                            </li>
                                            <li>
                                                <a href="">Larevel/PHP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Moonex WordPress Theme</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio3.jpg" alt="Portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Figma</a>
                                            </li>
                                            <li>
                                                <a href="">Webflow</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Taskly Dashboard</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio4.jpg" alt="portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Figma</a>
                                            </li>
                                            <li>
                                                <a href="">React</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Hinterland - Real Estate Site Redesign</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio5.jpg" alt="portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Framer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Lewis Portfolio Framer Template</a></h2>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer();?>