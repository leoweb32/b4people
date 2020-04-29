<section class="<?php echo esc_attr(wp_kses_post($class));?> about-section-two style-two">
        <div class="anim-icons">
            <div class="icon icon-dots-4 wow zoomIn"></div>
            <div class="icon icon-forward-3 wow fadeInRight" data-wow-duration="3000ms"></div>
            <div class="icon icon-square-2 wow zoomIn" data-wow-delay="2000ms"></div>
            <div class="icon icon-dots-2 wow zoomIn"></div>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Contant Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($ttitle);?></h2>
                        <div class="text">
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                        <div class="link-box">
                            <a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-four"><?php echo wp_kses_post($btn);?></a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="features-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Features Block -->
                        
						<?php foreach( $atts['fact'] as $key => $item ): ?>
						
						<div class="feature-block-four">
                            <div class="inner-box">
                                <span class="icon <?php echo esc_attr($item->icon); ?>"></span>
                                <h4><?php echo wp_kses_post($item->title); ?></h4>
                                <div class="text"><?php echo wp_kses_post($item->text); ?></div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>