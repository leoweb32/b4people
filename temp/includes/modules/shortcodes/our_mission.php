<section class="<?php echo esc_attr(wp_kses_post($class));?> about-section-four alternate">
        <div class="anim-icons">
            <span class="icon icon-waves wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-cross-2 wow zoomIn" data-wow-delay="1200ms"></span>
            <span class="icon icon-circle-dots wow zoomIn" data-wow-delay="1800ms"></span>
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
                        <div class="sec-title">
                            <h2><?php echo wp_kses_post($ttitle);?></h2>
                        </div>
                        <div class="text">
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>

                        <ul class="list-style-one">
                            
							<?php foreach( $atts['fact'] as $key => $item ): ?>
							
							<li><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></li>
                            
							<?php endforeach; ?>
                        </ul>
                        <div class="link-box">
                            <a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-four"><?php echo wp_kses_post($btn);?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>