<section class="<?php echo esc_attr(wp_kses_post($class));?> call-to-action style-two">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="title-column">
                    <h2><?php echo wp_kses_post($title);?></h2>
                </div>

                <div class="btn-column">
                    <div class="btn-box">
                        <a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-one"><?php echo wp_kses_post($btn);?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>