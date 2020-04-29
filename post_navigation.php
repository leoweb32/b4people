<?php 
$options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
ordino_bunch_global_variable();
 ?>
<?php if(!ordino_set($meta, 'navigation')):?>         
<div class="posts-nav">
			<div class="clearfix">
				<div class="pull-left">
					 <?php previous_post_link(); ?> 
				</div>
				<div class="pull-right">
					<?php next_post_link(); ?>
				</div>                                
			</div>
		</div>
	<?php endif; ?>	