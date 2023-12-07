<!-- start hero_warp -->
<section class="hero_warp">
    <div class="particles-js" id="particles-js"></div>
    <div class="container">
        <div class="row d-flex align-items-center height_vh">
            <div class="col-md-12 col-12">
                <div class="banner_content">
                    <h1 class="banner_title"><?php echo get_field("name_brand"); ?></h1>
                    <ul class="exp_list">
                        <?php 
                            if( have_rows('service_list') ):
                                while( have_rows('service_list') ) : the_row();
                        ?>
                        <li class=" wow fadeInUp" data-wow-duration='1s'><?php echo get_sub_field("name_service"); ?></li>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <ul class="social_link">
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
        <li>
            <a href="#">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter"></i>
            </a>
        </li>
    </ul>
    <div class="scroll_down">
        <a href="#portfolio_warp">Scroll Down</a>
    </div>
</section>
<!-- end hero_warp -->

<div class="height_vh dark_bg"></div>