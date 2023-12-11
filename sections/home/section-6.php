<!-- start capabiliti_wrap -->
<section class="client_wrap">
    <div class="container">
        <div class="row align-items-center">
            <?php 
                if( have_rows('list_partner') ):
                    while( have_rows('list_partner') ) : the_row();
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="client_single_item wow fadeInUp">
                    <a href="<?php echo get_sub_field("link_partner"); ?>">
                        <img src="<?php echo get_sub_field("logo_partner"); ?>" alt="icon">
                    </a>
                </div>
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
    </div>
</section>
<!-- end capabiliti_wrap -->