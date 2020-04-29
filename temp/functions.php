<?php add_action('after_setup_theme', 'ordino_bunch_theme_setup');
function ordino_bunch_theme_setup()
{
	global $wp_version;
	if(!defined('ORDINO_VERSION')) define('ORDINO_VERSION', '1.0');
	if( !defined( 'ORDINO_ROOT' ) ) define('ORDINO_ROOT', get_template_directory().'/');
	if( !defined( 'ORDINO_URL' ) ) define('ORDINO_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	
	load_theme_textdomain('ordino', get_template_directory() . '/languages');
	
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( "title-tag" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'ordino'),
				'onepage_menu' => esc_html__('Onepage', 'ordino'),
				'extra_menu' => esc_html__('Extra Menu', 'ordino'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'ordino360x250', 360, 250, true ); //'360x250 Our Services'
	add_image_size( 'ordino_7979', 79, 79, true ); //'79x79 Testimonials 1'
	add_image_size( 'ordino_370x295', 370, 295, true ); //'370x295 Latest Projects'
	add_image_size( 'ordino_360x240', 360, 240, true ); //'360x240 Latest News'
	add_image_size( 'ordino_480x400', 480, 400, true ); //'480x400 Services Carousel'
	add_image_size( 'ordino_270x220', 270, 220, true ); //'270x220 Our Team'
	
}

function ordino_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'ordino' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'ordino' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'ordino' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'ordino' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'ordino' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'ordino' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'ordino' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'ordino' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'ordino' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'ordino_gutenberg_editor_palette_styles' );

function ordino_bunch_widget_init()
{
	$options = _WSH()->option();
	global $wp_registered_sidebars;
	
	$theme_options = _WSH()->option();
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'ordino' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'ordino' ),
	  'before_widget'=>'<div id="%1$s" class="mrside sidebar blog-sidebar widget sidebar-widget %2$s "><div class="widget-inner">',
	  'after_widget'=>'</div></div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
//'.  ordino_set($options, 'footercolumn').'
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'ordino' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'ordino' ),
	  'before_widget'=>'<div id="%1$s" class="mrfooter col-md-'.  ordino_set($options, 'footercolumn').' col-sm-4 footer-column footer-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<h2 class="widget-title footer_title">',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'ordino' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'ordino' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	   'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = ordino_set(ordino_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(ordino_set($sidebar , 'topcopy')) continue ;
		
		$name = ordino_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = ordino_bunch_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  sanitize_title( $slug ) ,
			'before_widget' => '<div id="%1$s" class="side-bar widget sidebar_widget %2$s">',
			'after_widget' => "</div>",
			 'before_title' => '<div class="sidebar-title"><h3>',
	         'after_title' => '</h3></div>'
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'ordino_bunch_widget_init' );

// Update items in cart via AJAX
function ordino_load_head_scripts() {
	$options = _WSH()->option();
    if ( !is_admin() ) {
		$protocol = is_ssl() ? 'https://' : 'http://';
	}
}
add_action( 'wp_enqueue_scripts', 'ordino_load_head_scripts' );

//global variables
function ordino_bunch_global_variable() {
    global $wp_query;
}

function ordino_enqueue_scripts() {
    //styles
	//Basic Style
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	//Default Style
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css' );
	
	
	//add from html//
	wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/css/fontawesome-all.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	

	//Main Style
	//wp_enqueue_style( 'ordino-sidebar', get_template_directory_uri() . '/css/sidebar.css' );
	wp_enqueue_style( 'ordino-main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ordino-custom-style', get_template_directory_uri() . '/css/custom.css' );
	if(class_exists('woocommerce')) wp_enqueue_style( 'ordino-woocommerce', get_template_directory_uri() . '/css/woocommerce.css' );
	wp_enqueue_style( 'ordino-tut-style', get_template_directory_uri() . '/css/tut.css' );
	wp_enqueue_style( 'ordino-gutenberg-style', get_template_directory_uri() . '/css/gutenberg.css' );
	wp_enqueue_style( 'ordino-responsive', get_template_directory_uri() . '/css/responsive.css' );
	
	//Color Change
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.js', array(), false, true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js', array(), false, true );
	wp_enqueue_script( 'validate', get_template_directory_uri().'/js/validate.js', array(), false, true );
	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.js', array(), false, true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/js/appear.js', array(), false, true );
	
	//add from html//
	wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.js', array(), false, true );
	wp_enqueue_script( 'knob', get_template_directory_uri().'/js/knob.js', array(), false, true );
	wp_enqueue_script( 'popper', get_template_directory_uri().'/js/popper.js', array(), false, true );
	wp_enqueue_script( 'sticky', get_template_directory_uri().'/js/sticky.js', array(), false, true );

	
	//Extra Scripts
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/js/isotope.js', array(), false, true );

	//Main Script
	wp_enqueue_script( 'ordino-main-script', get_template_directory_uri().'/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'ordino_enqueue_scripts' );

/*-------------------------------------------------------------*/
function ordino_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'ordino' );
	$poppins = _x( 'on', 'Poppins font: on or off', 'ordino' );
 
    if ( 'off' !== $open_sans || 'off' !== $poppins ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
        }
		
		if ( 'off' !== $poppins ) {
            $font_families[] = 'Poppins:300,400,500,600,700';
        }
 
        $opt = get_option('ordino'.'_theme_options');
		if ( ordino_set( $opt, 'body_custom_font' ) ) {
			if ( $custom_font = ordino_set( $opt, 'body_font_family' ) )
				$font_families[] = $custom_font . ':300,300i,400,400i,600,700';
		}
		if ( ordino_set( $opt, 'use_custom_font' ) ) {
			$font_families[] = ordino_set( $opt, 'h1_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = ordino_set( $opt, 'h2_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = ordino_set( $opt, 'h3_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = ordino_set( $opt, 'h4_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = ordino_set( $opt, 'h5_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = ordino_set( $opt, 'h6_font_family' ) . ':300,300i,400,400i,600,700';
		}
		$font_families = array_unique( $font_families);
        
		$query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function ordino_theme_slug_scripts_styles() {
    wp_enqueue_style( 'ordino-theme-slug-fonts', ordino_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'ordino_theme_slug_scripts_styles' );
add_action( 'admin_enqueue_scripts', 'ordino_theme_slug_scripts_styles' );
/*---------------------------------------------------------------------*/
function ordino_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'ordino_add_editor_styles' );
/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function ordino_woo_related_products_limit() {
  global $product;
  $options = _WSH()->option();
  
  $num = ordino_set($options, 'number_of_products_per_page');
  $num = ($num) ? $num : 6;
	
	$args['posts_per_page'] = $num;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'ordino_jk_related_products_args' );
  function ordino_jk_related_products_args( $args ) {
	$options = _WSH()->option();
	
	$rel_num = ordino_set($options, 'number_of_related_products');
    $rel_num = ($rel_num) ? $rel_num : 4;
  
	$args['posts_per_page'] = $rel_num; // 4 related products
	$args['columns'] = $rel_num; // arranged in 2 columns
	return $args;
}		