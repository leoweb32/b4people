<?php $options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
ordino_bunch_global_variable(); ?>
<header class="main-header header-style-two">
        <div class="inner-container">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo"><?php if(ordino_set($options, 'logo')): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(ordino_set($options, 'logo')); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>" title="<?php esc_attr_e('Image', 'ordino');?>"></a>
                        <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php esc_attr_e('Image', 'ordino');?>"></a>
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
        </div>
    </header>