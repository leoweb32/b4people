<section class="<?php echo esc_attr(wp_kses_post($class));?> serivces-single">
        <!-- Anim Icons -->
        <div class="anim-icons">
            <div class="icon icon-dots-1 wow zoomIn" data-wow-delay="1000ms"></div>
            <div class="icon icon-dots-3 wow zoomIn" data-wow-delay="1000ms"></div>
            <div class="icon icon-forward wow zoomIn" data-wow-duration="2000ms"></div>
            <div class="icon icon-square wow zoomIn" data-wow-delay="1000ms"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="image-box">
                    <a href="<?php echo esc_url($image); ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a>
                </div>
                <h2><?php echo wp_kses_post($title);?></h2>
                <p><?php echo wp_kses_post($text);?></p>
                <h4><?php echo wp_kses_post($title1);?></h4>
                <p><?php echo wp_kses_post($text1);?></p>
            </div>
            <div class="related-projects">
                <h4><?php echo wp_kses_post($title2);?></h4>
                <div class="row">
                    
                    <?php foreach( $atts['fact'] as $key => $item ): ?>
					
					<div class="service-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <span class="icon <?php echo esc_attr($item->icon); ?>"></span>
                            <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                            <div class="text"><?php echo wp_kses_post($item->text); ?></div>
                        </div>
                    </div>
					
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>