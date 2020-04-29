<section class="<?php echo esc_attr(wp_kses_post($class));?> experience-section">
	<div class="outer-container clearfix">
		<!--Content Column-->
		<div class="content-column">
			<div class="inner-column">
				<h1><?php echo wp_kses_post($digit);?></h1>
				<h4><?php echo wp_kses_post($title);?></h4>
				<div class="text"><?php echo wp_kses_post($text);?></div>
				<div class="btn-box">
					<a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-six"><?php echo wp_kses_post($btn);?></a>
				</div>
			</div>
		</div>

		<!--Image Column-->
		<div class="image-column" style="background-image:url(<?php echo esc_url($bgimage); ?>);">
			<figure class="image-box"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></figure>
		</div>
	</div>
</section>