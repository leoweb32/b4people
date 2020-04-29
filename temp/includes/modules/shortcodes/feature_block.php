<section class="<?php echo esc_attr(wp_kses_post($class));?> features-section">
	<div class="anim-icons">
		<span class="icon icon-dots-3"></span>
	</div>
	<div class="auto-container">
		<div class="row clearfix">
			
			<?php foreach( $atts['fact'] as $key => $item ): ?>
			
			<div class="feature-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box wow zoomIn"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
					<h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
					<div class="text"><?php echo wp_kses_post($item->text); ?></div>
					<div class="link-box"><a href="<?php echo esc_url($item->link); ?>" class="theme-btn btn-style-three"><?php echo wp_kses_post($item->btn); ?></a></div>
				</div>
			</div>
			
			<?php endforeach; ?>
		</div>
	</div>
</section>