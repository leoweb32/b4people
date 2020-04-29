<section class="<?php echo esc_attr(wp_kses_post($class));?> about-section">
        <div class="anim-icons">
            <span class="icon icon-waves wow zoomIn" data-wow-delay="600ms">&gt;</span>
            <span class="icon icon-cross wow zoomIn" data-wow-delay="1000ms"></span>
            <span class="icon icon-circle-dots wow zoomIn" data-wow-delay="2000ms"></span>
            <span class="icon icon-dots-2 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <div class="image"><a href="<?php echo esc_url($image); ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a></div>
                    </div>
                </div>

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($ttitle);?></h2>
                        <div class="text">
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                        <div class="video-link"><a href="<?php echo esc_url($page_link);?>" class="link" data-fancybox="gallery" data-caption=""> <span class="icon flaticon-play-arrow"></span><?php echo wp_kses_post($btn);?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>