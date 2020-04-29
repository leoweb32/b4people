<section class="<?php echo esc_attr(wp_kses_post($class));?> clients-section style-two">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    
					<?php foreach( $atts['fact'] as $key => $item ): ?>
					
					<li class="slide-item"><figure class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a></figure></li>
                    
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>