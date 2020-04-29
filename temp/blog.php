<?php 
$options = _WSH()->option();
ordino_bunch_global_variable();
 ?>
<div class="news-block-two wow fadeIn">
	<div class="inner-box">
		
		<?php if(has_post_thumbnail()):?>
		<div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
		<?php endif;?>
		
		<div class="lower-content">
			
			<h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
			
			
			<div class="text"><?php the_excerpt();?></div>
			<div class="caption clearfix">
				
				<?php if (ordino_set($options, 'btn_title')) : ?>
				<div class="link-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo wp_kses_post(ordino_set($options, 'btn_title'));?> <i class="fa fa-angle-right"></i></a>
				</div>
				<?php else : ?>
				<div class="link-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e(' Read More ', 'ordino');?> <i class="fa fa-angle-right"></i></a>
				</div>
				<?php endif ; ?>
				
				<ul class="info">
					<?php if(!ordino_set($options, 'date')):?>
					<li><i class="far fa-clock"></i> <?php echo get_the_date()?></li>
					<?php endif ; ?>
					
					<?php if(!ordino_set($options, 'comments')):?>
					<li><i class="far fa-comment"></i> <?php comments_number(); ?></li>
					<?php endif ; ?>
					
					<?php if(ordino_set($options, 'author')):?>
					<li>
					<?php if (ordino_set($options, 'by_text')) : ?>
					<?php echo wp_kses_post(ordino_set($options, 'by_text')); ?>
					<?php else : ?>
					<?php esc_html_e('By: ', 'ordino');?>
					<?php endif ; ?>
					<?php the_author();?>
					</li>
					<?php endif ; ?>


					<?php if(ordino_set($options, 'tag')):?>		
					<li><?php the_tags(' Tags: ', ', ', ''); ?>
						</li>
					<?php endif ; ?>
				</ul>	
			</div>
		</div>
	</div>
</div>