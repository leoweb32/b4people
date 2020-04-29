<?php global $post;
$query_args = array('post_type' => 'bunch_services' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
if( $cat ) $query_args['services_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> features-section-two">
        <div class="auto-container">
            <?php if(wp_kses_post($ttitle)): ?>
			<div class="sec-title text-center">
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>
			<?php endif; ?>
            <div class="row clearfix">
                
				<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
				
				<div class="feature-block-two col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        
						<div class="image-box">
                            <span class="date"><?php echo wp_kses_post(ordino_set($services_meta, 'meta_date'));?></span>
                            <?php the_post_thumbnail();?>
                            <div class="overlay-box"><a href="<?php echo esc_url(ordino_set($services_meta, 'meta_link')); ?>"><span class="fa fa-link"></span></a></div>
                        </div>
						
						
                        <div class="lower-content">
                            <h3><a href="<?php echo esc_url(ordino_set($services_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                            <div class="text"><?php echo wp_kses_post(ordino_trim(get_the_content(), $text_limit)); ?></div>
                            <div class="link-box"><a href="<?php echo esc_url(ordino_set($services_meta, 'meta_link')); ?>" class="theme-btn btn-style-three"><?php echo wp_kses_post($btn);?></a></div>
                        </div>
                    </div>
                </div>
				
				<?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>


			