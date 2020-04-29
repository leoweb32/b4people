<?php 

$options = _WSH()->option();

$meta = _WSH()->get_meta('_bunch_header_settings');

ordino_bunch_global_variable();

 ?>

<div class="news-block">

	<div class="inner-box">

		

		<?php if(has_post_thumbnail()):?>

		<div class="image-box wow fadeIn"><?php the_post_thumbnail();?></div>

		<?php endif;?>

		



		<div class="lower-content">

			

			<?php if(ordino_set($meta, 'sposttitle')):?>

			<h3><?php the_title();?></h3>

			<?php endif;?>

			

<ul class="post-meta">

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



<?php if(ordino_set($options, 'date')):?>

<li>

<?php echo get_the_date()?>

</li>

<?php endif ; ?>

<?php if(ordino_set($options, 'comments')):?>

<li>

<?php comments_number(); ?>

</li>

<?php endif ; ?>



<?php if(ordino_set($options, 'tag')):?>		

<li><?php the_tags(' Tags: ', ', ', ''); ?>

	</li>

<?php endif ; ?>			

</ul>

			

			<div class="text">

				<?php the_content(); ?>

				<div class="clearfix"></div>

<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'ordino'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>			

             </div>

		</div>



		<!-- Other Option -->

		<div class="post-share-options clearfix">

			

			<div class="post-share-options clearfix">

				<?php if(!ordino_set($options, 'post_tag')):?> 

				<div class="float-left meta_tagsx">

					<?php the_tags(); ?>  

				</div>

				<?php endif; ?>

				<div class="float-right">

					<?php if(!ordino_set($options, 'post_social')):?>    

					<?php if(function_exists('bunch_share_us')) echo wp_kses_post(bunch_share_us(get_the_id(),$post->post_name ));?>

					<?php endif;?>		

				</div>

			</div>

			


		</div>

	</div>

</div>

<?php if(!ordino_set($options, 'commentbox')):?>	

	<?php comments_template(); ?> 

<?php endif;?>