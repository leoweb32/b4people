<?php $count = 1;
$query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['team_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> team-section">
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
					$teams_meta = _WSH()->get_meta();
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				   ?>
				
				<div class="team-block col-lg-<?php echo esc_attr(wp_kses_post($column));?> col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image" data-fancybox="team"><?php the_post_thumbnail(); ?></a></div>
                            
							<?php if($socials = ordino_set($teams_meta, 'bunch_team_social')):?>
							
							<ul class="social-links">
                                
								<?php foreach($socials as $key => $value):?>
								
								<li><a href="<?php echo esc_url(ordino_set($value, 'social_link')); ?>"><i class="fab 
								<?php echo str_replace("fa ", "", esc_attr(ordino_set( $value, 'social_icon')));?>"></i></a></li>
                                
								<?php endforeach;?>
                            </ul>
							<?php endif;?>
                        </div>
                        <div class="caption-box">
                            <h3 class="name"><?php the_title(); ?></h3>
                            <span class="designation"><?php echo wp_kses_post(ordino_set($teams_meta, 'meta_designation'));?></span>
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>