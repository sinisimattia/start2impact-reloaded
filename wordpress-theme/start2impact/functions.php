<?php

function s2i_enqueue(){
	wp_enqueue_style( "main-theme", get_template_directory_uri()."/css/main.css", array(), "1.0.0", "all" );
	wp_enqueue_style( "blog-theme", get_template_directory_uri()."/css/blog.css", array(), "1.0.0", "all" );
	//wp_enqueue_script( "mainJS", get_template_directory_uri()."/js/baic.js", array(), "1.0.0", true );
}

add_action( "wp_enqueue_scripts", "s2i_enqueue" );

function s2i_setup(){
	add_theme_support('post-thumbnails');
	
	add_theme_support( "menus" );
	register_nav_menu( "header-menu", "Header Menu" );
	register_nav_menu( "footer-menu", "Footer Menu" );
}

//add_action( "after_setup_theme", "s2i_setup" );
add_action( "init", "s2i_setup" );

?>