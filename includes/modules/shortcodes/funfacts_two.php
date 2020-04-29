<section class="<?php echo esc_attr(wp_kses_post($class));?> skill-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <?php foreach( $atts['funfacts'] as $key => $item ): ?>
				
				<div class="skill-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="graph-outer">
                            <input type="text" class="dial" data-fgColor="#ff214f" data-bgColor="#f8f8f8" data-width="170" data-height="170" data-linecap="normal"  value="<?php echo esc_attr($item->ff_stop); ?>">
                            <div class="inner-text count-box"><span class="count-text" data-stop="<?php echo esc_attr($item->ff_stop); ?>" data-speed="2000"></span><?php echo wp_kses_post($item->ff_sign); ?></div>
                        </div>
                        <h3><?php echo wp_kses_post($item->title); ?></h3>
                    </div>
                </div>
				
				<?php endforeach; ?>
            </div>
        </div>
    </section>