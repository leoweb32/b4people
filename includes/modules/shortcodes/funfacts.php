<section class="<?php echo esc_attr(wp_kses_post($class));?> fun-fact-section" style="background-image: url(<?php echo esc_url($bgimage); ?>);">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    
                    <?php foreach( $atts['funfacts'] as $key => $item ): ?>
					
					<div class="count-box col-lg-3 col-md-6 col-sm-12">
                        <div class="content-box">
                            <div class="count-outer">
                                <span class="count-text" data-speed="2000" data-stop="<?php echo esc_attr($item->ff_stop); ?>">0</span><?php echo wp_kses_post($item->ff_sign); ?>
                            </div>
                            <div class="counter-title"><?php echo wp_kses_post($item->title); ?></div>
                        </div>
                    </div>
					
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>