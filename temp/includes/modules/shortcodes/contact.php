<section class="<?php echo esc_attr(wp_kses_post($class));?> contact-page-section">
        <div class="auto-container">
            <!--Contact Container-->
            <div class="contact-container">
                <div class="row clearfix">
                    <!--Form Column-->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--Contact Us Form-->
                        <div class="contact-us-form">
                            <?php echo do_shortcode($contact_form); ?>
                        </div>
                    </div>
                    <!--Info Column-->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2><?php echo wp_kses_post($title);?></h2>
                            <ul class="contact-info">
                                
								<?php foreach( $atts['one'] as $key => $item ): ?>
								
								<li>
                                    <i class="<?php echo esc_attr($item->icon); ?>"></i>
                                    <p><?php echo wp_kses_post($item->text); ?></p>
                                    <p><?php echo wp_kses_post($item->text1); ?></p>
                                </li>
                                
								<?php endforeach; ?>
                            </ul>

                            <ul class="social-icon-three">
                                
								<?php foreach( $atts['two'] as $key => $item ): ?>
								
								<li><a href="<?php echo esc_url($item->link); ?>"><i class="fab <?php echo esc_attr($item->icon); ?>"></i></a></li>
                                
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>