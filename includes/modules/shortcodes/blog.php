<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   
<section class="<?php echo esc_attr(wp_kses_post($class));?> news-section">
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
        $post_meta = _WSH()->get_meta();
    ?>
				
				<div class="news-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        
						<div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
                        
						<div class="lower-content">
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                            <div class="text"><?php echo wp_kses_post(ordino_trim(get_the_content(), $text_limit)); ?></div>
							
                            <?php if(!$blog_postmeta == true): ?>
							<ul class="info">
                                
								<?php if(!$blog_date == true): ?>
								<li><i class="far fa-clock"></i>  <?php echo get_the_date()?>
								<?php if (wp_kses_post($blog_symbol)) : ?>
								<?php echo wp_kses_post($blog_symbol);?>
								<?php else : ?>
								<?php esc_html_e(' ', 'ordino');?>
								<?php endif ; ?></li>
								<?php endif ; ?>
								
								<?php if(!$blog_comments == true): ?>
                                <li><i class="far fa-comment"></i> <?php comments_number( wp_kses_post(__('0' , 'ordino')), wp_kses_post(__('1' , 'ordino')), wp_kses_post(__('% ' , 'ordino'))); ?></li>
								<?php endif ; ?>
								
                            </ul>
							<?php endif ; ?>
							
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>			
		