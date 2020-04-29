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
	$bg = ordino_set($settings, '404_page_header_img');
	$title = ordino_set($settings, '404_page_header_title');
?>

<?php get_template_part( 'post_bread' ); ?> 



 <section class="error-section sp-one">
        <div class="icon-three now-in-view"></div>
        <div class="icon-six now-in-view"></div>
        <div class="auto-container">
        <?php if(ordino_set($settings, '404_text')):?>    
			<div class="content">
                <h1><span class="left-icon now-in-view"></span><?php if($title) echo wp_kses_post($title); else wp_title(''); ?><span class="right-icon now-in-view"></span></h1>
                <div class="text"><?php echo wp_kses_post(ordino_set($settings, '404_text')); ?></div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"> <?php esc_html_e( 'Go to Home', 'ordino' ); ?></a>
            </div>
		<?php else :?> 	
			<div class="content">
                <h1><span class="left-icon now-in-view"></span><?php esc_html_e( '404', 'ordino' ); ?><span class="right-icon now-in-view"></span></h1>
                <h2><?php esc_html_e( 'OOPS!', 'ordino' ); ?></h2>
                <div class="text"><?php esc_html_e( 'The page you are looking for was moved, removed, renamed or might never existed.', 'ordino' ); ?></div>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"> <?php esc_html_e( 'Go to Home', 'ordino' ); ?></a>
            </div>
		<?php endif;?>	
			
        </div>
    </section>
<?php get_footer(); ?>