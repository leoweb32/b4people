<section class="<?php echo esc_attr(wp_kses_post($class));?> about-me" style="background-image: url(<?php echo esc_url($bgimage); ?>);">
        <div class="auto-container">
            <div class="row">
                <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($title);?></h2>
                        <div class="info">
                            <h3><?php echo wp_kses_post($title1);?></h3>
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                        <div class="text">
                            <p><?php echo wp_kses_post($text1);?></p>
                        </div>
                    </div>
                </div>

                <div class="social-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column clearfix">
                        <ul class="social-link">
                            
							<?php foreach( $atts['fact'] as $key => $item ): ?>
							
							<li><a href="<?php echo esc_url($item->link); ?>"><i class="fab <?php echo esc_attr($item->icon); ?>"></i></a><span><?php echo wp_kses_post($item->title); ?></span></li>
                            
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>