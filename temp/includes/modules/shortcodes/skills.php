<section class="<?php echo esc_attr(wp_kses_post($class));?> progress-section">
        <div class="anim-icons">
            <span class="icon icon-forward-2 wow fadeInUp" data-wow-duration="3000ms"></span>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($ttitle);?></h2>
                        <div class="text"><?php echo wp_kses_post($text);?></div>
                        <!--Progress Bars-->
                        <div class="progress-bars">
                            
                            <?php foreach( $atts['fact'] as $key => $item ): ?>
							
                            <div class="bar-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><?php echo wp_kses_post($item->title); ?></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="86"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php echo esc_attr($item->ff_stop); ?>">0</span>%</div></div></div></div>
                                </div>
                            </div>
							
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="inner-column">
                        <div class="image"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>