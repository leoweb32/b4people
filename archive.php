<?php ordino_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option();
	if(ordino_set($_GET, 'layout_style')) $layout = ordino_set($_GET, 'layout_style'); else
	$layout = ordino_set( $settings, 'archive_page_layout', 'right' );
	if( !$layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = ordino_set( $settings, 'archive_page_sidebar', 'blog-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = ordino_set($settings, 'archive_page_header_img');
	$title = ordino_set($settings, 'archive_page_header_title');
?>
<!--Page Title-->
<?php if(!ordino_set($options, 'arch_banner')):?>
 <?php get_template_part( 'post_bread' ); ?> 
<?php endif;?>

   <!--Sidebar Page Container-->
   <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
           
		   <div class="content-side <?php echo esc_attr($classes);?>">
              <div class="blog-standard">
					<?php while( have_posts() ): the_post();?>
                        <!-- blog post item -->
                        <!-- Post -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            <?php get_template_part( 'blog' ); ?>
                        <!-- blog post item -->
                        </div><!-- End Post -->
                    <?php endwhile;?>
                    <!--Start post pagination-->
                    <div class="styled-pagination">
                        <?php ordino_the_pagination(); ?>
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--Content Side-->
            
            <!--Sidebar-->	
            <!-- sidebar area -->
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			
            <!--Sidebar-->
            
        </div>
    </div>
    </div>
	<?php get_footer(); ?>