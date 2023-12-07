<!-- start portfolio_warp -->
<section class="portfolio_warp" id="portfolio_warp">
    <div class="port_bg_text" >
        <h1 class="bg_strock_text" data-parallax='{"x": -200}'>Portfolio</h1>
    </div>
    <div class="container">
        <div class="row portfolio_single_wrap">
            <?php
                $args = array( 
                    'post_type'=>'prod',
                    'post_status'=>'publish',
                    'posts_per_page' => 6,
                );
                $prod_query = new WP_Query( $args );
                if ( $prod_query->have_posts() ) :
                    while ( $prod_query->have_posts() ) : $prod_query->the_post();
            ?>
            <div class="col-md-6 col-sm-12 col-xs-12 portfolio_single_item wow fadeInUp">
                <div class="portfolio_item">
                    <div class="port_img tilt">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="img-fluid"></a>
                    </div>
                    <a  class="exp" href="<?php the_permalink(); ?>"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    <div class="port_text">
                        <a href="<?php the_permalink(); ?>"><h3 class="port_title"><?php echo get_field("name_prod_customize"); ?></h3></a>
                        <p class="catagory">- <a href="#">branding,</a> <a href="#">web design</a></p>
                    </div>
                    
                </div>
            </div>
            <?php
                endwhile;
            endif;
            
            // Reset Post Data
            wp_reset_postdata();
            
            ?>
        </div>
    </div>
</section>
<!-- end portfolio_warp -->