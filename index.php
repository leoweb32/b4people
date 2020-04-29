<?php ordino_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	if( $wp_query->is_posts_page ) {
		$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
		$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
		if(ordino_set($_GET, 'layout_style')) $layout = ordino_set($_GET, 'layout_style'); else
		$layout = ordino_set( $meta, 'layout', 'full' );
		$sidebar = ordino_set( $meta, 'sidebar', 'default-sidebar' );
		$view = ordino_set( $meta, 'view', 'grid' );
		$bg = ordino_set($meta1, 'header_img');
		$title = ordino_set($meta1, 'header_title');
		$text = ordino_set($meta1, 'header_text');
		$sub_title = ordino_set($meta1, 'header_sub_title');
	} else {
		$settings  = _WSH()->option(); 
		if(ordino_set($_GET, 'layout_style')) $layout = ordino_set($_GET, 'layout_style'); else
		$layout = ordino_set( $settings, 'archive_page_layout', 'full' );
		$sidebar = ordino_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
		$view = ordino_set( $settings, 'archive_page_view', 'list' );
		$bg = ordino_set($settings, 'archive_page_header_img');
		$title = ordino_set($settings, 'archive_page_header_title');
		$sub_title = ordino_set($settings, 'archive_page_header_sub_title');
	}
	$layout = ordino_set( $_GET, 'layout' ) ? ordino_set( $_GET, 'layout' ) : $layout;
	$view = ordino_set( $_GET, 'view' ) ? ordino_set( $_GET, 'view' ) : $view;
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
	$classes = ( $layout || $layout == 'full' || ordino_set($_GET, 'layout_style')=='full' ) ? 'col-lg-8 col-md-8 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	?>

  <!--Page Title / Style Two-->
<?php if($bg):?>
<section class="page-title style-two" style="background-image:url(<?php echo esc_attr($bg)?>);">
<?php else :?>
<section class="page-title style-two" style="background-image:url(<?php echo esc_url(get_template_directory_uri().'/images/background/5.jpg');?>);">
<?php endif;?>
	<div class="auto-container">
		<h1><?php if($title) echo wp_kses_post($title); else esc_html_e('Our Blog', 'ordino');?></h1>
	</div>
</section>

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
              <div class="blog-standard thm-unit-test">
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