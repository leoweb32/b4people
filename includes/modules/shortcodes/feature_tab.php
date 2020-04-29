<div class="<?php echo esc_attr(wp_kses_post($class));?> features-section-three">
        <div class="anim-icons">
            <span class="icon icon-dots-2 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight">
                        <div class="image-box"><a href="<?php echo esc_url($image); ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a></div>
                    </div>
                </div>

                <div class="content-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo wp_kses_post($ttitle);?></h2>
                        <div class="features-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#features-tab-1" class="tab-btn active-btn"><i class="flaticon-anchor-1"></i><?php echo wp_kses_post($tab);?></li>
                                <li data-tab="#features-tab-2" class="tab-btn "><i class="flaticon-monitor"></i><?php echo wp_kses_post($tab1);?></li>
                                <li data-tab="#features-tab-3" class="tab-btn "><i class="flaticon-cogwheel-outline"></i><?php echo wp_kses_post($tab2);?></li>
                            </ul>

                            <div class="tabs-content">
                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="features-tab-1">                         
                                    <div class="text"><?php echo wp_kses_post($text);?></div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="features-tab-2">                         
                                    <div class="text"><?php echo wp_kses_post($text1);?></div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="features-tab-3">                         
                                    <div class="text"><?php echo wp_kses_post($text2);?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>