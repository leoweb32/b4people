<section class="portfolio-single style-two">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">  
                    <div class="inner">                      
                        <div class="inner-column">
                            <div class="row clearfix">
                                <div class="text-column col-lg-9 col-md-12 col-sm-12">
                                    <h2><?php echo wp_kses_post($title);?></h2>
                                    <div class="text"><p><?php echo wp_kses_post($text);?></p></div>
                                    <div class="shere-option">
                                        <h4><?php echo wp_kses_post($title1);?></h4>
                                        <ul class="social-icon-colored">
                                            
											<?php foreach( $atts['two'] as $key => $item ): ?>
											
											<li class="facebook"><a href="<?php echo esc_url($item->link); ?>"><span class="fab <?php echo esc_attr($item->icon); ?>"></span></a></li>
                                            
											<?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="info-column col-lg-3 col-md-12 col-sm-12">
                                    <h4><?php echo wp_kses_post($title2);?></h4>
                                    <ul class="info-list">
                                        
										<?php foreach( $atts['one'] as $key => $item ): ?>
										
										<li><span><?php echo wp_kses_post($item->title); ?></span>   <?php echo wp_kses_post($item->text); ?></li>
                                       
									   <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </div> 
                </div>
            </div>

        </div>
    </section>