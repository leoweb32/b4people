<?php global $post;
   $query_args = array('post_type' => 'bunch-gallery' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['gallery_category'] = $cat;
   $query = new WP_Query($query_args) ;?>
   
<?php if($query->have_posts()):  ?>   
<section class="<?php echo esc_attr(wp_kses_post($class));?> gallery-section-two">
        <div class="auto-container">
            <?php if(wp_kses_post($ttitle)): ?>
			<div class="sec-title text-center">
                <h2><?php echo wp_kses_post($ttitle);?></h2>
                <div class="text"><?php echo wp_kses_post($text);?></div>
            </div>
			<?php endif; ?>
            <div class="row clearfix">
                
                <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$gallery_meta = _WSH()->get_meta();
			$post_thumbnail_id = get_post_thumbnail_id($post->ID);
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		?>
				
				<div class="project-block-two col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image">
                            <?php the_post_thumbnail();?>
                            <div class="overlay-box">
                                <div class="title">
                                    <h3><a href="<?php echo esc_url(ordino_set($gallery_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                                    <span><?php echo wp_kses_post(ordino_set($gallery_meta, 'meta_designation')); ?></span>
                                </div>
                                <div class="link-box">
                                    <a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-broken-link"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>			
				