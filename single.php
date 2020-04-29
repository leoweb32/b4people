<?php $options = _WSH()->option();
	get_header(); 
	$settings  = ordino_set(ordino_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(ordino_set($_GET, 'layout_style')) $layout = ordino_set($_GET, 'layout_style'); else
	$layout = ordino_set( $meta, 'layout', 'full' );
	if( !$layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='right' ) $sidebar = ''; else
	$sidebar = ordino_set( $meta, 'sidebar', 'default-sidebar' );
	
	$layout = ( $layout ) ? $layout : 'full';
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
	$bg = ordino_set($meta1, 'header_img');
	$title = ordino_set($meta1, 'header_title');
?>

 <?php get_template_part( 'post_bread' ); ?> 
    
    <!--Sidebar Page Container-->
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
                    <div class="blog-single thm-unit-test">
					<?php while( have_posts() ): the_post();
						global $post; 
						$post_meta = _WSH()->get_meta();
					?>
					 <?php get_template_part( 'singlepost' ); ?>
                    <?php endwhile;?>
                </div>
            </div>
            <!--Content Side-->
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
            
        </div>
    </div>
</div>

<?php get_footer(); ?>