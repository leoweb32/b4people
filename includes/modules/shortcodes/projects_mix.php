<?php 
$paged = get_query_var('paged');
$args = array('post_type' => 'bunch-project', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
$terms_array = explode(",",$exclude_cats);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'projects_category','field' => 'id','terms' => $terms_array,'operator' => 'NOT IN',));
$query = new WP_Query($args);

$t = $GLOBALS['_bunch_base'];

$data_filtration = '';
$data_posts = '';
?>

<?php if( $query->have_posts() ):

ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_bunch_projects_meta', true );//printr($meta);
		$meta1 = _WSH()->get_meta();
		$post_terms = get_the_terms( get_the_id(), 'projects_category');// printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'projects_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'projects_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
           
            <?php 
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		    ?> 
			 <?php if( $style == '1' ): ?>
			 <div class="project-block-two all col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 <?php echo esc_attr($term_slug); ?>">
                        <div class="inner-box">
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                                <div class="overlay-box">
                                    <div class="title">
                                        <h3><a href="<?php echo esc_url(ordino_set($meta1, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                                        <span><?php echo wp_kses_post(ordino_set($meta1, 'meta_designation')); ?></span>
                                    </div>
                                    <div class="link-box">
                                        <a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-broken-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			 <?php endif; ?>
			 <?php if( $style == '2' ): ?>
			 <div class="project-block all col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 <?php echo esc_attr($term_slug); ?>">
                        <div class="inner-box">
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                                <div class="overlay-box">
                                    <div class="title">
                                        <h3><a href="<?php echo esc_url(ordino_set($meta1, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                                        <span><?php echo wp_kses_post(ordino_set($meta1, 'meta_designation')); ?></span>
                                    </div>
                                    <div class="link-box">
                                        <a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-broken-link"></span></a>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			 <?php endif; ?>
          
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif ;
ob_start();?>	 

<?php $terms = get_terms(array('projects_category')); ?>
<?php if( $style == '1' ): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> gallery-section-two">
        <div class="auto-container">
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".all"><?php esc_attr_e('All', 'ordino');?></li>
                        
						<?php foreach( $fliteration as $t ): ?>
						
						<li class="filter" data-role="button" data-filter=".<?php echo esc_attr(ordino_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(ordino_set( $t, 'name')); ?></li>
                        
						<?php endforeach;?>
                    </ul>                                                  
                </div>

                <div class="items-container row">
					<?php echo wp_kses_post($data_posts); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if( $style == '2' ): ?>
 <section class="<?php echo esc_attr(wp_kses_post($class));?> gallery-section alternate">
        <div class="inner-container">
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".all"><?php esc_attr_e('All', 'ordino');?></li>
                        
						<?php foreach( $fliteration as $t ): ?>
						
						<li class="filter" data-role="button" data-filter=".<?php echo esc_attr(ordino_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(ordino_set( $t, 'name')); ?></li>
                        
						<?php endforeach;?>
                    </ul>                                                  
                </div>

                <div class="items-container row">
					<?php echo wp_kses_post($data_posts); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>