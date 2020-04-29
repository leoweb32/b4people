<?php $count = 1;
$query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['testimonials_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> testimonial-page-section">
        <div class="auto-container">
            <div class="row">

                <?php while($query->have_posts()): $query->the_post();
						global $post;
						$testimonials_meta = _WSH()->get_meta(); ?>
				
                <div class="testimonial-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="thumb"><?php the_post_thumbnail();?></div>
                            <h5 class="name"><?php the_title();?></h5>
                            <span class="designation"><?php echo wp_kses_post(ordino_set($testimonials_meta, 'meta_designation')); ?></span>
                            <div class="rating"><span class="far fa-star"><?php
									$ratting = ordino_set($testimonials_meta, 'meta_rating');
									for ($x = 1; $x <= 5; $x++) {
									if($x <= $ratting) echo '<span class="far fa-star"></span>'; else echo '<span class=""></span>'; 
										}
									?></span></div>
                        </div>
                        <div class="text"><?php echo wp_kses_post(ordino_trim(get_the_content(), $text_limit)); ?></div>
                    </div>
                </div>
				
				<?php endwhile;?>
                <div class="btn-box">
                    <a href="<?php echo esc_url($page_link);?>" class="load-more"><?php echo wp_kses_post($btn);?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>