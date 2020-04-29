<?php $options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
ordino_bunch_global_variable(); ?>
<header class="main-header">
	
	<?php if(!(ordino_set($options, 'top_header_show'))):?>
	<div class="header-top">
		<div class="auto-container">
			<div class="clearfix">
				<?php if(ordino_set($options, 'email')):?>
				<div class="top-left">
					<ul class="clearfix">
						<li><a href="<?php echo esc_url(sanitize_email(ordino_set($options, 'email'))); ?>"><?php echo sanitize_email(ordino_set($options, 'email')); ?></a></li>
					</ul>
				</div>            
				<?php endif;?> 
				
				<div class="top-right">
					<ul class="clearfix">
						<li><a href="<?php echo esc_url(ordino_set($options, 'login_link')); ?>"><?php echo wp_kses_post(ordino_set($options, 'login')); ?></a></li>
						<li><a href="<?php echo esc_url(ordino_set($options, 'register_link')); ?>"><?php echo wp_kses_post(ordino_set($options, 'register')); ?></a></li>
						<li><a href="<?php echo esc_url(ordino_set($options, 'faq_link')); ?>"><?php echo wp_kses_post(ordino_set($options, 'faq')); ?></a></li>
					</ul>                      
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="inner-container">
		<div class="main-box clearfix">
			<div class="pull-left logo-outer">
				<div class="logo"><?php if(ordino_set($options, 'logo')): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(ordino_set($options, 'logo')); ?>" alt="<?php esc_attr_e('Logo', 'ordino');?>" title="<?php esc_attr_e('Title', 'ordino');?>"></a>
                        <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php esc_attr_e('Logo', 'ordino');?>"></a>
                        <?php endif; ?></div>
			</div>
			
			<div class="nav-outer pull-right clearfix">
				<!-- Main Menu -->
				<nav class="main-menu navbar-expand-md navbar-dark">
					<div class="navbar-header">
						<!-- Toggle Button -->      
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="nav-icon-custom flaticon-menu-1"></span>
						</button>
					</div>
					
					<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
						<?php 
	  $header = ordino_set($meta, 'meta_menu_style'); 
	 
	  $header = (ordino_set($_GET, 'meta_menu_style')) ? ordino_set($_GET, 'meta_menu_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/menu2');
			break;
		default:
			get_template_part('includes/modules/bread/menu1');
		}
?>
					</div>
				</nav><!-- Main Menu End-->
					
				<!-- Main Menu End-->
				<div class="outer-box">
					
					<?php if(ordino_set($options, 'header_social_show')):?>	
					<?php if(ordino_set( $options, 'social_media' ) && is_array( ordino_set( $options, 'social_media' ) )): ?>
					
					<ul class="social-icon-one">
						
						<?php $social_icons = ordino_set( $options, 'social_media' ); foreach( ordino_set( $social_icons, 'social_media' ) as $social_icon ): if( isset( $social_icon['tocopy' ] ) ) continue; ?>
						
						<li><a href="<?php echo esc_url(ordino_set( $social_icon, 'social_link')); ?>"><i class="fab <?php echo esc_attr(ordino_set( $social_icon, 'social_icon')); ?>"></i></a></li>
						
						<?php endforeach; ?>
					</ul>
					<?php endif;?>
					<?php endif;?>

					<!--Search Box-->
					<?php if(ordino_set($options, 'header_search_show')):?>
					<div class="search-box-outer">
						<div class="dropdown">
							<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-search"></span></button>
							<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
								<li class="panel-outer">
									<div class="form-container">
										<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
											<div class="form-group">
												<input type="text" name="s"  placeholder="<?php echo esc_attr(ordino_set($options, 'search_textx')); ?>">
												<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<?php endif ; ?>
				</div>
			</div>
		</div>
	</div>
	<!--End Header Upper-->

</header>