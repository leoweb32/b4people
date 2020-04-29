<section class="<?php echo esc_attr(wp_kses_post($class));?> map-section" style="background-image: url(<?php echo esc_url($bgimage); ?>);">
	<div class="auto-container">
		<div class="title">
			<h3><?php echo wp_kses_post($title);?></h3>
			<div class="text"><?php echo wp_kses_post($text);?></div>
		</div>
	</div>
</section>