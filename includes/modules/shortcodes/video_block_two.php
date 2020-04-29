<section class="<?php echo esc_attr(wp_kses_post($class));?> who-we-are">
        <div class="anim-icons">
            <span class="icon icon-dots-2 wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-dots-2 wow zoomIn" data-wow-delay="1200ms"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="features-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($ttitle);?></h2>

                        <?php foreach( $atts['fact'] as $key => $item ): ?>
						
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <span class="icon <?php echo esc_attr($item->icon); ?>"></span>
                                <h4><?php echo wp_kses_post($item->title); ?></h4>
                                <div class="text"><?php echo wp_kses_post($item->text); ?></div> 
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-xs-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($title);?></h2>
                        <div class="image-box">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>">
                            <div class="video-link">
                                <a href="<?php echo esc_url($page_link);?>" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-play-arrow"></span><h5><?php echo wp_kses_post($btn);?></h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>