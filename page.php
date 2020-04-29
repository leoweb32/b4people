<?php $options = _WSH()->option();
	get_header();
	$settings  = ordino_set(ordino_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(ordino_set($_GET, 'layout_style')) $layout = ordino_set($_GET, 'layout_style'); else
	$layout = ordino_set( $meta, 'layout', 'full' );
	$sidebar = ordino_set( $meta, 'sidebar', 'default-sidebar' );
	$layout = ($layout) ? $layout : 'full';
	$sidebar = ($sidebar) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-12 col-sm-12 col-xs-12 ' ;
	
	$bg = ordino_set($meta1, 'header_img');
	$title = ordino_set($meta1, 'header_title');
?>
<!--Page Title-->
<?php if(!ordino_set($options, 'pege_banner')):?>
 <?php get_template_part( 'post_bread' ); ?> 
<?php endif;?>

<!--Sidebar Page-->
<div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">  
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
            
            <!--Content Side-->	
         <div class="wp-style content-side <?php echo esc_attr($classes); ?>">
                    <div class="blog-single">
                    <div class="thm-unit-test">
						<?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
						<div class="inner-box text">	
                            <?php the_content(); ?>
							<div class="clearfix"></div>
						 </div>	
                           <!-- end comments -->
                            
                            <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'ordino'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                             
							<div class="clearfix"></div>
                            <?php comments_template(); ?>
                            <!--Posts Nav-->
                        <?php endwhile;?>
                    </div>
                    <!--Start post pagination-->
                    <div class="styled-pagination clearfix">
                        <?php ordino_the_pagination(); ?>
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--Content Side-->
            
            <!--Sidebar-->	
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
            <!--Sidebar-->
            
        </div>
    </div>
</div>

<?php get_footer(); ?>