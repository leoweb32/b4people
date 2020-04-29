<?php 
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$header = ordino_set($meta, 'meta_breadcrumb_style'); 
	$header = (ordino_set($_GET, 'meta_breadcrumb_style')) ? ordino_set($_GET, 'meta_breadcrumb_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/bread_v2');
			break;
		default:
			get_template_part('includes/modules/bread/bread_v1');
		}
?>