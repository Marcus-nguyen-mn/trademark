<!-- start testimonial_wrap -->
<section class="testimonial_wrap" style="background: url(<?php echo get_field("background_client_on_me") ?>) no-repeat scroll top left/cover;">
    <div class="bg_text">
        <h1 class="bg_strock_text" data-parallax='{"x": -200}'><?php echo get_field("title_bg_client_on_me"); ?></h1>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="test_left">
                    <h2 class="test_title wow fadeInUp"> <?php echo get_field("title_main_client_on_me"); ?> </h2>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div class="client_user_img">
                    <div class="user_img_slider wow fadeInUp">
                        <?php 
                            if( have_rows('list_client_on_me') ):
                                while( have_rows('list_client_on_me') ) : the_row();
                        ?>
                        <div class="user_slider_item">
                            <div class="img_wrap"><img src="<?php echo get_sub_field("thumb_list_com"); ?>" alt="img" class="img-fluid"></div>
                        </div>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <div class="test_details_content">
                    <div class="test_details_slider wow fadeInUp">
                        <?php 
                            if( have_rows('list_client_on_me') ):
                                while( have_rows('list_client_on_me') ) : the_row();
                        ?>
                        <div class="test_details_slider_item">
                            <?php echo get_sub_field("content_list_client_on_me"); ?>
                        </div>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonial_wrap -->