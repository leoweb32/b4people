<?php 
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = ordino_set($meta, 'header_img');
	$title = ordino_set($meta, 'header_title');
	$text = ordino_set($meta, 'header_text');
	?>


<?php if(!ordino_set($meta, 'breadcrumb')):?>


<section class="page-title" <?php if($bg):?> style="background-image:url(<?php echo esc_attr($bg)?>);" <?php endif;?>>


	<div class="auto-container">
		<h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
		
		<div class="text"><?php if($text) echo wp_kses_post($text);?></div>
		
	</div>
</section>
<?php endif;?>	
