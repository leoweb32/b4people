<?php global $post;
$query_args = array('post_type' => 'bunch_services' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
if( $cat ) $query_args['services_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>

<?php if( $style == '1' ): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> services-section">
        <!-- Anim Icons -->
        <div class="anim-icons">
            <div class="icon icon-dots-1 wow zoomIn" data-wow-delay="1000ms"></div>
            <div class="icon icon-forward wow zoomIn" data-wow-duration="2000ms"></div>
            <div class="icon icon-square wow zoomIn" data-wow-delay="1000ms"></div>
        </div>
        <div class="auto-container">
            <?php if(wp_kses_post($ttitle)): ?>
			<div class="sec-title text-center">
                <h2><?php echo wp_kses_post($ttitle);?></h2>
                <div class="text"><?php echo wp_kses_post($text);?></div>
            </div>
			<?php endif; ?>

            <div class="row clearfix">
                
				<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
				
				<div class="service-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <span class="icon <?php echo esc_attr(ordino_set($services_meta, 'meta_icon'));?>"></span>
                        <h3><a href="<?php echo esc_url(ordino_set($services_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                        <div class="text"><?php echo wp_kses_post(ordino_trim(get_the_content(), $text_limit)); ?></div>
                    </div>
                </div>
				
				<?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if( $style == '2' ): ?>
 <!--Services Section-->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> services-section" id="<?php echo esc_attr(wp_kses_post($secid));?>">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="big-title"><?php echo wp_kses_post($title);?></div>
            	<h2><?php echo wp_kses_post($text);?></h2>
            </div>
            <div class="row clearfix">
            	
				<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
				
                <!--Featured Block Three-->
                <div class="featured-block-three style-two col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon <?php echo esc_attr(ordino_set($services_meta, 'meta_icon'));?>"></span>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="text"><?php echo wp_kses_post(ordino_trim(get_the_content(), $text_limit)); ?></div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                
            </div>
        </div>
    </section>
    <!--End Services Section-->
<?php endif; ?>

<?php endif; wp_reset_postdata(); ?>