<?php

if( function_exists('bbpress') ) {
//Services
ordino_vc_map( array(
			"name" => esc_html__("bbPress Forums", 'ordino'),
			"base" => "bbp-forum-index",
			"class" => "",
			"category" => esc_html__('Jollyall', 'ordino'),
			"icon" => 'faqs' ,
			"params" => array(				
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => esc_html__("Forum", 'ordino'),
				   "param_name" => "forum",
				   "description" => ''
				),
				
			)
	    )
);

}

vc_add_param('vc_row', $param);
vc_add_param('vc_row_inner', $param);