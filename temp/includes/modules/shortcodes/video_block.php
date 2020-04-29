<section class="<?php echo esc_attr(wp_kses_post($class));?> fluid-section-one">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="row clearfix">
                        
                        <?php foreach( $atts['fact'] as $key => $item ): ?>
						
						<div class="service-block-two col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12">
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

            <!--Image Column-->
            <div class="image-column wow fadeInRight" style="background-image:url(<?php echo esc_url($bgimage); ?>);">
                <figure class="image-box"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></figure>
                <div class="video-link"><a href="<?php echo esc_url($page_link);?>" class="link" data-fancybox="gallery" data-caption=""> <span class="icon flaticon-play-arrow"></span><h5><?php echo wp_kses_post($btn);?></h5></a></div>
            </div>
        </div>
    </section>