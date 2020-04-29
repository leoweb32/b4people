<section class="<?php echo esc_attr(wp_kses_post($class));?> portfolio-single">
        <div class="auto-container">
            <div class="sticky-container">
                <div class="row clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">
                                
								<?php foreach( $atts['fact'] as $key => $item ): ?>
								
								<div class="image col-md-12 col-sm-12 col-xs-12 wow fadeInLeft">
                                    <a href="<?php echo esc_url($item->image); ?>" class="lightbox-image" data-fancybox="gallery" title="Image Title Here"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a>
                                </div>
								
								<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>